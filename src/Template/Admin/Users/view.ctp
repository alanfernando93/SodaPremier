<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<div class="card card-login mx-auto mt-5">
    <div class="card-header">
        <?= $this->Html->link('<span aria-hidden="true">&times;</span>', ['controller' => 'users', 'action' => 'index'],['escape'=>false,'class'=>'close','aria-label'=>'Close'])?>
        <h3><?= __('Usuario') . ' ' . h($user->username) ?></h3>
    </div>
    <div class="card-body">

        <div class="users view large-9 medium-8 columns content">
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Nombre') ?></th>
                    <td> : <?= h($user->first_name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Apellido') ?></th>
                    <td> : <?= h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Correo Electronico') ?></th>
                    <td> : <?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Rol') ?></th>
                    <td> : <?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Creado') ?></th>
                    <td> : <?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modificado') ?></th>
                    <td> : <?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Active') ?></th>
                    <td> : <?= $user->active ? __('Si') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>