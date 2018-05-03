<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Functions helper
 */
class FunctionsHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    public $helpers = ['Html', 'Form'];

    /**
     * 
     * @param type $title
     * @param type $link
     * @param type $icon
     * @return type
     */
    public function actions($entity) {
        ?>
        <td class="actions">
            <?=
            $this->Html->link("<i class=\"fa fa-eye fa-lg\"></i>", ['action' => 'view', $entity->id], ['escape' => false,
                'title' => __('View'),
                'data-toggle' => 'tooltip'])
            ?>
            <?=
            $this->Html->link("<i class=\"fa fa-pencil-square-o fa-lg\"></i>", ['action' => 'edit', $entity->id], ['escape' => false,
                'title' => __('Edit'),
                'data-toggle' => 'tooltip'])
            ?>
            <?=
            $this->Form->postLink("<i class=\"fa fa-trash fa-lg\"></i>", ['action' => 'delete', $entity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entity->first_name), 'escape' => false,
                'title' => __('Delete'),
                'data-toggle' => 'tooltip'])
            ?>
        </td>
        <?php
    }

    /**
     * 
     * @param type $type
     * @return string[]
     */
    public function froala($type) {
        $froala = 'admin/froala';
        $path = WWW_ROOT . $type . DS . $froala;
        $dir = opendir($path);
        $files = array();
        while ($current = readdir($dir)) {
            if ($current != "." && $current != "..") {
                if (is_dir($path . $current)) {
                    showFiles($path . $current . '/');
                } else {
                    $files[] = $froala . DS . $current;
                }
            }
        }
        //print_r($files);
        /* echo '<h2>' . $path . '</h2>';
          for ($i = 0; $i < count($files); $i++) {
          echo "'$froala" . DS . $files[$i] . "' <br>";
          } */
        return $files;
    }
    
    public function HTTP(){
        $url = "http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'];
        $uri = $_SERVER['REQUEST_URI'];
        
    }

}
