<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<h3><?php echo __('Pedidos'); ?></h3>
<div class="row-fluid" style="padding-bottom: 8px;">
   <!-- <?= $this->Html->link("<i class=\"fa fa-plus fa-lg\"></i> " . __('Nuevo Pedido'), ['action' => 'add'], ['escape' => false, 'admin' => true, 'prefix' => 'admin', 'class' => 'btn btn-default']) ?> -->
</div>
<div class="content table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('full_name',__('Nombre')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('ci',__('Carnet de Identidad')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('phono',__('Telefono')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('email',__('Correo')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('status',__('Estado')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',__('Creado')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified',__('Modificado')) ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $this->Number->format($order->id) ?></td>
                    <td><?= h($order->full_name) ?></td>
                    <td><?= h($order->ci) ?></td>
                    <td><?= $this->Number->format($order->phono) ?></td>
                    <td><?= h($order->email) ?></td>
                    <td><?= h($order->status) ?></td>
                    <td><?= h($order->created) ?></td>
                    <td><?= h($order->modified) ?></td>
                    <td class="actions">
                        <?=
                        $this->Html->link("<i class=\"fa fa-eye fa-lg\"></i>", ['action' => 'view', $order->id], ['escape' => false,
                            'title' => __('Vista'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <!--<?=
                        $this->Html->link("<i class=\"fa fa-pencil-square-o fa-lg\"></i>", ['action' => 'edit', $order->id], ['escape' => false,
                            'title' => __('Editar'),
                            'data-toggle' => 'tooltip'])
                        ?>-->
                        <?=
                        $this->Form->postLink("<i class=\"fa fa-trash fa-lg\"></i>", ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id), 'escape' => false,
                            'title' => __('Eliminar'),
                            'data-toggle' => 'tooltip'])
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
</div>
