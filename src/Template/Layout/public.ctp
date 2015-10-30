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
    //   (2.1) iCheck 1.0.1
    echo $this->Html->css('icheck/square/blue');

    // (3) Customs
    //   (3.1) Global
    //echo $this->Html->css('public');
    //echo $this->Html->css('common');
    //   (3.2) From Views
    echo $this->fetch('css');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
    <!-- Main content -->
    <section class="content">
        <div class="login-box">
            <div class="login-logo">
                <b>Admin</b>LPA Visit -<br />App
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    </section><!-- /.content -->

    <?php
    /**
     *  JavaScript
     */
    // (1) AdminLTE
    //   (1.1) jQuery 2.1.4
    echo $this->Html->script('jquery/jquery.min');
    //   (1.2) Bootstrap 3.3.4
    echo $this->Html->script('bootstrap/bootstrap.min');
    //   (1.3) AdminLTE 2.3.0
    //echo $this->Html->script('adminlte/app.min');
    // (2) Plugins
    //   (2.1) iCheck 1.0.1
    echo $this->Html->script('icheck/icheck.min');

    // (3) Customs
    //   (3.1) Global
    //echo $this->Html->script('public');
    //echo $this->Html->script('common');
    //   (3.2) From Views
    echo $this->fetch('script');
    ?>
</body>
</html>
