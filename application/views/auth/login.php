<?$this->load->helper('url');?>
<head>
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Вход</div>
            <div class="panel-body">
                <?$attributes = array('role' => 'form');
                echo form_open('auth/login', $attributes);?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Логин" name="identity" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Запомнить меня
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </fieldset>
                <?echo form_close();?>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
<script src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/chart.min.js"></script>
<script src="<?php echo base_url(); ?>js/chart-data.js"></script>
<script src="<?php echo base_url(); ?>js/easypiechart.js"></script>
<script src="<?php echo base_url(); ?>js/easypiechart-data.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>
