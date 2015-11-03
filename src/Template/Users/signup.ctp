<p class="login-box-msg"><?= __('Sign up to login') ?></p>
<?= $this->Form->create($user) ?>
<div class="form-group has-feedback">
    <?= $this->Form->input('email', [
        'label' => false,
        'class' => 'form-control',
        'placeholder' => __('Email')
    ]) ?>
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->input('password', [
        'label' => false,
        'class' => 'form-control',
        'placeholder' => __('Password')
    ]) ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
    <?= $this->Form->input('confirm_password', [
        'label' => false,
        'class' => 'form-control',
        'type' => 'password',
        'placeholder' => __('Repeat Password')
    ]) ?>
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
    <div class="col-xs-8">
        <?= $this->Html->link( __('Login'), 'users/login' ) ?>
    </div><!-- /.col -->
    <div class="col-xs-4">
        <?= $this->Form->button( __('Sign up'), [ 'class' => 'btn btn-primary btn-block btn-flat' ]) ?>
    </div><!-- /.col -->
</div>
<?= $this->Form->end() ?>
