<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <?php echo $this->tag->stylesheetLink('plugins/admin-lte/css/bootstrap.min.css'); ?>
        <!-- font Awesome -->
        <?php echo $this->tag->stylesheetLink('plugins/admin-lte/css/font-awesome.min.css'); ?>
        <!-- Theme style -->
        <?php echo $this->tag->stylesheetLink('plugins/admin-lte/css/AdminLTE.css'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <?php echo $this->getContent(); ?>

        <!-- jQuery 1.1.* -->
        <?php echo $this->tag->javascriptInclude('plugins/jquery/dist/jquery.min.js'); ?>
        <!-- Bootstrap -->
        <?php echo $this->tag->javascriptInclude('plugins/admin-lte/js/bootstrap.min.js'); ?>

    </body>
</html>