<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment[]|\Cake\Collection\CollectionInterface $comments
 */
?>
<h3><?php echo __('Comentarios'); ?></h3>
<div class="row-fluid" style="padding-bottom: 8px;">
   <!-- <?= $this->Html->link("<i class=\"fa fa-plus fa-lg\"></i> " . __('Nuevo Commentaio'), ['action' => 'add'], ['escape' => false, 'admin' => true, 'prefix' => 'admin', 'class' => 'btn btn-default']) ?> -->
</div>
<div class="content table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contenido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email',__('Correo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre',__('Nombre')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',__('Creado')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified',__('Modificado')) ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
                <tr>
                    <td><?= $this->Number->format($comment->id) ?></td>
                    <td><?= h($comment->contenido) ?></td>
                    <td><?= h($comment->email) ?></td>
                    <td><?= h($comment->nombre) ?></td>
                    <td><?= h($comment->created) ?></td>
                    <td><?= h($comment->modified) ?></td>
                    <td class="actions">
                        <?=
                        $this->Html->link("<i class=\"fa fa-eye fa-lg\"></i>", ['action' => 'view', $comment->id], ['escape' => false,
                            'title' => __('View'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <!--<?=
                        $this->Html->link("<i class=\"fa fa-pencil-square-o fa-lg\"></i>", ['action' => 'edit', $comment->id], ['escape' => false,
                            'title' => __('Edit'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <?=
                        $this->Form->postLink("<i class=\"fa fa-trash fa-lg\"></i>", ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id), 'escape' => false,
                            'title' => __('Delete'),
                            'data-toggle' => 'tooltip'])
                        ?>-->
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
