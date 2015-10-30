<!-- Logo -->
<a href="<?= $this->Url->build( '/' ) ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>App</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LPA Visit - App</span>
</a>

<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="hidden-xs"><?= $logged['email'] ?></span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <p>
                            <?= $logged['email'] ?>
                            <?php if( isset($logged['created']) ) : ?>
                            <small><?= __('Member since') ?> <?= $logged['created'] ?></small>
                            <?php endif ?>
                        </p>
                    </li>
                    <?php if( isset($logged['extra']) ) : ?>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                        </div>
                    </li>
                    <?php endif ?>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?= $this->Html->link( __('Profile'), ['controller'=>'users','action'=>'view',$logged['id']], ['class'=>'btn btn-default btn-flat'] ) ?>
                        </div>
                        <div class="pull-right">
                            <?= $this->Html->link( __('Sign out'), ['controller'=>'users','action'=>'logout'], ['class'=>'btn btn-default btn-flat'] ) ?>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
