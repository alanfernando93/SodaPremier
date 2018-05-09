<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Psy\debug;
use Cake\Event\Event;
use Cake\Mailer\Email;

//use Cake\Network\Email\Email; // <-- Importante para utilizacion de correo electronico

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function home() {
        $this->loadModel('Orders');
        $products = $this->Orders->Products->find('list', ['limit' => 200]);
        $this->set(compact('products'));
    }

    public function addOrder() {
        $this->loadModel('Orders');
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'), ['key' => 'order']);

                return $this->redirect('/#order');
//                return $this->setAction('home');
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'), ['key' => 'order']);
            return $this->redirect('/#order');
        }
        $this->setAction('home');
    }

    public function sendComment() {
        $this->loadModel('Settings');
        $this->loadModel('Comments');
        Email::setConfigTransport('gmail', [
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'username' => 'alanfernando93.am@gmail.com',
            'password' => 'alanmamanihuayllani',
            'className' => 'Smtp',
            'tls' => true
        ]);
        $comment = $this->Comments->newEntity();
        $setting = $this->Settings->get(1);
        if ($this->request->is('post')) {
            $correo = new Email(); //instancia de correo
            $correo->setTransport('gmail'); //nombre del configTrasnport que acabamos de configurar
            $correo->setTemplate('welcome'); //plantilla a utilizar
            $correo->setEmailFormat('html'); //formato de correo
            $correo->setTo($setting->email); //correo para
            $correo->setFrom($setting->email); //correo de
            $correo->setSubject('Sugerencias'); //asunto
            $correo->setViewVars([//enviar variables a la plantilla
                'name' => $this->request->getData('nombre'),
                'email' => $this->request->getData('email'),
                'message' => $this->request->getData('contenido'),
//                        'var3' => 'http://blog.kiuvox.com'
            ]);

            $comment = $this->Comments->patchEntity($comment, $this->request->getData());
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'), ['key' => 'comment']);
                if ($correo->send()) {
                    return $this->redirect('/#contact');
                }
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'), ['key' => 'comment']);
            return $this->redirect('/#contact');
        }
        $this->setAction('home');
    }

    public function sendMail() {
        Email::setConfigTransport('gmail', [
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'username' => 'alanfernando93.am@gmail.com',
            'password' => 'alanmamanihuayllani',
            'className' => 'Smtp',
            'tls' => true
        ]);
//        debug($this->request->getData('message'));
//        debug(Email::getConfigTransport('gmail'));
        if ($this->request->is('post')) {
            $correo = new Email(); //instancia de correo
            $correo->setTransport('gmail'); //nombre del configTrasnport que acabamos de configurar
            $correo->setTemplate('welcome'); //plantilla a utilizar
            $correo->setEmailFormat('html'); //formato de correo
            $correo->setTo('alanfernando93@hotmail.com'); //correo para
            $correo->setFrom('alanfernando.am93@gmaill.com'); //correo de
            $correo->setSubject('Correo de prueba en cakephp3'); //asunto
            $correo->setViewVars([//enviar variables a la plantilla
                'content' => 'hola\npollo    99999'
//                        'var1' => 'Hugo',
//                        'var2' => 'Kiuvox',
//                        'var3' => 'http://blog.kiuvox.com'
            ]);

            if ($correo->send()) {
                $this->Flash->success(__('Correo enviado'), ['key' => 'order']);

                return $this->redirect('/#contact');
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'), ['key' => 'order']);
                return $this->redirect('/#contact');
            }
        }
        $this->setAction('home');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->loadModel('Orders');
        $this->Orders->getEventManager()->on('Model.Order.afterPlace', function ($event) {
            Log::write(
                    'info', 'A new order was placed with id: ' . $event->getSubject()->id
            );
        });
        // $this->set('page_active', 'class="active"');
    }

}
