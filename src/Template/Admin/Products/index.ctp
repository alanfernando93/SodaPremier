<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<h3><?php echo __('Productos'); ?></h3>
<div class="row-fluid" style="padding-bottom: 8px;">
    <?= $this->Html->link("<i class=\"fa fa-plus fa-lg\"></i> " . __('Nuevo Producto'), ['action' => 'add'], ['escape' => false, 'admin' => true, 'prefix' => 'admin', 'class' => 'btn btn-default']) ?>
</div>
<div class="content table-responsive">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name',__('Nombre')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('type',__('Categoria')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price',__('Precio')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created',__('Creado')) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified',__('Modificado')) ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->name) ?></td>
                    <td><?= h($product->type) ?></td>
                    <td><?= $this->Number->format($product->stock) ?></td>
                    <td><?= $this->Number->format($product->price) ?></td>
                    <td><?= h($product->created) ?></td>
                    <td><?= h($product->modified) ?></td>
                    <td class="actions">
                        <!--<?=
                        $this->Html->link("<i class=\"fa fa-eye fa-lg\"></i>", ['action' => 'view', $product->id], ['escape' => false,
                            'title' => __('Vista'),
                            'data-toggle' => 'tooltip'])
                        ?>-->
                        <?=
                        $this->Html->link("<i class=\"fa fa-pencil-square-o fa-lg\"></i>", ['action' => 'edit', $product->id], ['escape' => false,
                            'title' => __('Editar'),
                            'data-toggle' => 'tooltip'])
                        ?>
                        <?=
                        $this->Form->postLink("<i class=\"fa fa-trash fa-lg\"></i>", ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->first_name), 'escape' => false,
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
