<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */
?>
<h3><?= __('Roles'); ?></h3>
<div class="row-fluid" style="padding-bottom: 8px;">
    <?= $this->Html->link("<i class=\"fa fa-plus fa-lg\"></i> " . __('New Role'), ['action' => 'add'], ['escape' => false, 'admin' => true, 'prefix' => 'admin', 'class' => 'btn btn-default']) ?>
</div>
<div class="content table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $role): ?>
                <tr>
                    <td><?= $this->Number->format($role->id) ?></td>
                    <td><?= h($role->role) ?></td>
                    <td><?= h($role->created) ?></td>
                    <td><?= h($role->modified) ?></td>
                    <td class="actions">
                        <?=
                        $this->Html->link("<i class=\"fa fa-eye fa-lg\"></i>", ['action' => 'view', $role->id], ['escape' => false,
                            'title' => __('View'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <?=
                        $this->Html->link("<i class=\"fa fa-pencil-square-o fa-lg\"></i>", ['action' => 'edit', $role->id], ['escape' => false,
                            'title' => __('Edit'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <?=
                        $this->Form->postLink("<i class=\"fa fa-trash fa-lg\"></i>", ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'escape' => false,
                            'title' => __('Delete'),
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
