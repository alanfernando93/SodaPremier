<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>

<div class="card card-register mx-auto mt-5">
    <div class="card-header"><?= __('Registrar una Cuenta') ?></div>
    <div class="card-body">
        <?= $this->Form->create($user) ?>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="InputName"><?= __('Nombre') ?></label>
                    <input class="form-control" id="InputName" type="text" name="first_name" aria-describedby="nameHelp" placeholder="<?= __('Ingrese Nombre') ?>">
                </div>
                <div class="col-md-6">
                    <label for="InputLastName"><?= __('Apellidos') ?></label>
                    <input class="form-control" id="InputLastName" type="text" name="last_name" aria-describedby="nameHelp" placeholder="<?= __('Ingrese Apellidos ') ?>">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="InputEmail1"><?= __('Correo Electronico') ?></label>
                    <input class="form-control" id="InputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="<?= __('Ingese Correo Electronico') ?>">
                </div>
                <div class="col-md-6">
                    <label for="InputUsername"><?= __('Username') ?></label>
                    <input class="form-control" id="InputUsername" type="text" name="username" aria-describedby="emailHelp" placeholder="<?= __('Ingrese Username') ?>">
                </div>
            </div>

        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="InputPassword1"><?= __('Contraseña') ?></label>
                    <input class="form-control" id="InputPassword1" type="password" name="password" placeholder="<?= __('Contraseña') ?>">
                </div>
                <div class="col-md-6">
                    <label for="ConfirmPassword"><?= __('Confirmar Contraseña') ?></label>
                    <input class="form-control" id="ConfirmPassword" type="password" name="confirmPassword" placeholder="<?= __('Confirmar Contraseña') ?>">
                </div>
            </div>
        </div>        
        <?= $this->Form->control('role', ['type' => 'hidden', 'value' => 'user']) ?>
        <?= $this->Form->control('active', ['type' => 'hidden', 'value' => true]) ?>
        <?= $this->Form->button(__('Crear'), ['class' => 'btn btn-primary btn-block']) ?>
        <?= $this->Form->end() ?>
        <div class="text-center">
<!--            <?= $this->Html->link('<<' . __('Restroceder'), ['class' => 'd-block small mt-3']) ?>
                        <a class="d-block small mt-3" href="login.html">Login Page</a>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>-->
        </div>
    </div>
</div>