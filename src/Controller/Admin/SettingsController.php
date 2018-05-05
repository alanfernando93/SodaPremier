<?php

namespace App\Controller\Admin;

use Cake\Event\Event;

/**
 * Settings Controller
 *
 *
 * @method \App\Model\Entity\Setting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SettingsController extends AdminController {
    
    /**
     * Edit method
     *
     * @param string|null $id Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $setting = $this->Settings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $setting = $this->Settings->patchEntity($setting, $this->request->getData());
            if ($this->Settings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The setting could not be saved. Please, try again.'));
        }
        $this->set(compact('setting'));
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // $this->set('page_active', 'class="active"');
    }

    public function isAuthorized($user) {
// All registered users can add articles
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
// The owner of an article can edit and delete it
//        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
//            $articleId = (int) $this->request->getParam('pass.0');
//            if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
//                return true;
//            }
//        }
        return parent::isAuthorized($user);
    }

}
