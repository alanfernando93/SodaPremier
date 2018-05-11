<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<h3><?= h($order->full_name) ?></h3>
<div class="col-md-6">
    <table class="vertical-table" border="1">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($order->full_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carnet de Identidad') ?></th>
            <td><?= h($order->ci) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo Electronico') ?></th>
            <td><?= h($order->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero de Order') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($order->phono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha de Pedido') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <?php if ($order->created != $order->modified): ?>
            <tr>
                <th scope="row"><?= __('Fecha de entraga') ?></th>
                <td><?= h($order->modified) ?></td>
            </tr>
        <?php endif; ?>
    </table>
</div>
