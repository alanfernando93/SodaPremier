<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<h2><?= __('Actualizar Datos de Usuario') ?></h2>
<?= $this->Form->create($user, ['class' => 'needs-validation']) ?>
<div class="form-row">
    <?= $this->Form->control('role', ['type' => 'hidden']); ?>
    <div class="col-md-4 mb-3">
        <label for="firstName"><?= __('Nombre') ?></label>
        <?= $this->Form->text('first_name', ['id' => 'firstName', 'class' => 'form-control', 'placeholder' => 'Ingrese Nombre']); ?>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="lastName"><?= __('Apellido') ?></label>
        <?= $this->Form->text('last_name', ['id' => 'lastName', 'class' => 'form-control', 'placeholder' => __('Ingrese Apellidos')]); ?>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label for="username"><?= __('Username') ?></label>
        <?= $this->Form->text('username', ['id' => 'username', 'class' => 'form-control', 'placeholder' => 'Ingrese Username']); ?>
        <div class="invalid-feedback">
            Please choose a username.
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-md-5 mb-3">
        <label for="email"><?= __('Correo Electronico') ?></label>        
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <?= $this->Form->text('email', ['id' => 'email', 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'Ingrese Correo Electronico']); ?>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="password"><?= __('Contraseña') ?></label>
        <?= $this->Form->text('password', ['id' => 'password', 'class' => 'form-control', 'disabled' => true, 'type' => 'password']); ?>
        <div class="invalid-feedback">
            Please provide a valid state.
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <label for="active"><?= __('Estado') ?></label>
        <?= $this->Form->text('active', ['id' => 'active', 'class' => 'form-control select', 'disabled' => true, 'type' => 'select', 'options' => ['true' => 'activado', 'false' => 'bloqueado']]); ?>
        <div class="invalid-feedback">
            Please provide a valid options.
        </div>
    </div>
</div>
<?= $this->Form->button(__('Guadar'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>