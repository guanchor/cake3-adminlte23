<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Configure;
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <?php
    /**
     *  CSS
     */
    // (1) AdminLTE
    //   (1.1) Bootstrap 3.3.5
    echo $this->Html->css('bootstrap.min');
    //   (1.2) Font Awesome 4.4.0
    echo $this->Html->css('font-awesome.min');
    //   (1.3) Ionicons 2.0.1
    echo $this->Html->css('ionicons.min');
    //   (1.4) AdminLTE 2.3.0
    echo $this->Html->css('adminlte/adminlte.min');
    //   (1.5) AdminLTE 2.3.0 Skins
    echo $this->Html->css('adminlte/skins/skin-blue.min');

    // (2) Customs
    //   (2.1) Global
    echo $this->Html->css('main');
    //   (2.2) From Views
    echo $this->fetch('css');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <?php //if(Configure::read('mobile-previews')) echo $this->element('Dev/mobile-previews') ?>
            <?= $this->element('Layout/Default/header') ?>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <?= $this->element('Layout/Default/mainmenu') ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <?= $this->fetch('title') ?>
                    <small><?= __($this->request->action) ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> <?= __('Home') ?></a></li>
                    <li class="active"><?= $this->fetch('title') ?></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?= $this->fetch('content') ?>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2015 <a target="_blank" href="http://inventiaplus.com">Inventia Plus S.L.</a></strong> All rights reserved.
        </footer>

    </div><!-- ./wrapper -->
    <?php
    /**
     *  JavaScript
     */
    // (1) AdminLTE
    //   (1.1) jQuery 2.1.4
    echo $this->Html->script('jquery/jquery.min');
    //   (1.2) Bootstrap 3.3.4
    echo $this->Html->script('bootstrap/bootstrap.min');
    echo $this->Html->script('adminlte/app.min');

    // (2) Customs
    //   (2.1) From Views before main.js
    echo $this->fetch('before-main');
    //   (2.2) Global
    echo $this->Html->script('main');
    //   (2.3) From Views after main.js
    echo $this->fetch('script');
    ?>
</body>
</html>
