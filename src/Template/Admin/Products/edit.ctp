<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="col-md-6">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <h1><?= __('Modificar Producto') ?></h1>
        <?php
        echo $this->Form->control('name', ['class' => 'form-control', 'label' => __('Nombre')]);
        echo $this->Form->control('description', ['class' => 'form-control', 'label' => __('Descripcion')]);
        echo $this->Form->control('type', ['class' => 'form-control', 'label' => __('Categoria'), 'options' => ['jugo' => 'Jugos', 'gaseosa' => 'Gaseosa']]);
        echo $this->Form->control('stock', ['class' => 'form-control', 'label' => __('Stock')]);
        echo $this->Form->control('price', ['class' => 'form-control', 'label' => __('Precio')]);
        echo $this->Form->control('photo', ['value' => '/', 'type' => 'hidden']);
        echo $this->Form->control('photo_dir', ['value' => "/", 'type' => 'hidden']);
        echo $this->Form->control('user_id', ['value' => $current, 'type' => 'hidden']);
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Guadar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
