<div class="card card-login mx-auto mt-5">
    <div class="card-header">Login</div>
    <div class="card-body">
        <?= $this->Form->create() ?>
        <div class="form-group">
            <?= $this->Form->control('username',['class' => 'form-control', 'id' => 'Username', 'placeholder' => 'Enter username']) ?>            
        </div>
        <div class="form-group">
            <?= $this->Form->control('password',['type'=>'password', 'class' => 'form-control', 'id' => 'Password', 'placeholder' => 'Password']) ?>            
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
        </div>
        <?= $this->Form->button('Login', ['class' => 'btn btn-primary btn-block']) ?>
        
        <?= $this->Form->end() ?>
        <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
    </div>
</div>