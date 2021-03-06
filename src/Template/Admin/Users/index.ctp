<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $users
 */
?>
<h3><?php echo __('Usuarios'); ?></h3>
<div class="row-fluid" style="padding-bottom: 8px;">
    <?= $this->Html->link("<i class=\"fa fa-plus fa-lg\"></i> " . __('Nuevo Usuario'), ['action' => 'add'], ['escape' => false, 'admin' => true, 'prefix' => 'admin', 'class' => 'btn btn-default']) ?>
</div>
<div class="content table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name',__('Nombre')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name',__('Apellidos')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('email',__('Correo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('username',__('Username')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('role',__('Rol')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('active',__('Estado')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',__('Creado')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified',__('Modificado')) ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td><?= h($user->active) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td class="actions">
                        <?=
                        $this->Html->link("<i class=\"fa fa-eye fa-lg\"></i>", ['action' => 'view', $user->id], ['escape' => false,
                            'title' => __('Vista'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <?=
                        $this->Html->link("<i class=\"fa fa-pencil-square-o fa-lg\"></i>", ['action' => 'edit', $user->id], ['escape' => false,
                            'title' => __('Editar'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <?=
                        $this->Form->postLink("<i class=\"fa fa-trash fa-lg\"></i>", ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->first_name), 'escape' => false,
                            'title' => __('Eliminar'),
                            'data-toggle' => 'tooltip'])
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>
