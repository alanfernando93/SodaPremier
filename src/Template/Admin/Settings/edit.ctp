<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>
<div class="col-md-5">
    <?= $this->Form->create($setting) ?>
    <fieldset>
        <h1><?= __('Edit Setting') ?></h1>
        <?php
            echo $this->Form->control('title',['class'=>'form-control','label'=>__('Titulo')]);
            echo $this->Form->control('email',['class'=>'form-control','label'=>__('Correo Empresarial')]);
            echo $this->Form->control('password',['class'=>'form-control','label'=>__('Contraseña de Correo Empresarial')]);
        ?>
    </fieldset><br>
    <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
