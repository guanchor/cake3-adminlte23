<p class="login-box-msg"><?= __('Sign in to start your session') ?></p>
<?= $this->Form->create() ?>
<div class="form-group has-feedback">
    <?= $this->Form->input('email', [
        'label' => false,
        'class' => 'form-control',
        'placeholder' => __('Email'),
        'required' => true
    ]) ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->input('password', [
        'label' => false,
        'class' => 'form-control',
        'placeholder' => __('Password'),
        'required' => true
    ]) ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8">
        <div class="checkbox icheck">
            <label>
                <?= $this->Form->checkbox('remember', [
                    'label' => false,
                ]) ?>
                <?= __('Remember Me') ?>
            </label>
        </div>
    </div><!-- /.col -->
    <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat"><?= __('Sign In') ?></button>
    </div><!-- /.col -->
</div>
<?= $this->Form->end() ?>

<?php
/*
<a href="#">I forgot my password</a><br>
<a href="register.html" class="text-center">Register a new membership</a>
*/
?>

<?= $this->Html->link( __('Register a new membership'), 'users/signup' ) ?>

<?php
$this->Html->scriptStart(['block' => true]);
echo '$(function () {
        $("input").iCheck({
            checkboxClass: "icheckbox_square-blue",
        });
    });';
$this->Html->scriptEnd();
?>
