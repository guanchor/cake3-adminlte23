<div class="row">
    <div class="col-xs-12">
        <div class="actions">
            <ul class="side-nav btn-group">
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
                <li class="btn btn-danger btn-sm"><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li class="btn btn-info btn-sm"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                <li class="btn btn-primary btn-sm"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="users view info-box">
            <div class="box box-info">
                <span class="info-box-icon bg-aqua">
                    <i class="fa fa-user"></i>
                </span>
                <div class="info-box-content">
                    <div class="box-header">
                        <h3 class="box-title"><?= h($user->name) ?></h3>
                    </div>
                    <div class="box-body">
                        <dl class="dl-horizontal">
                            <dt><?= __('Username') ?></dt>
                            <dd><?= h($user->username) ?></dd>
                            <dt><?= __('Password') ?></dt>
                            <dd><?= $user->password ? '****' : '' ?></dd>
                            <dt><?= __('Email') ?></dt>
                            <dd><?= h($user->email) ?></dd>
                            <dt><?= __('Name') ?></dt>
                            <dd><?= h($user->name) ?></dd>
                            <dt><?= __('Surname') ?></dt>
                            <dd><?= h($user->surname) ?></dd>
                            <dt><?= __('Id') ?></dt>
                            <dd><?= $this->Number->format($user->id) ?></dd>
                            <dt><?= __('Created') ?></dt>
                            <dd><?= h($user->created) ?></dd>
                            <dt><?= __('Modified') ?></dt>
                            <dd><?= h($user->modified) ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
