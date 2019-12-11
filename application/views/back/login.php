<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login to Click & Earn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_URL() ?>assets/back/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>







	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>PLEASE LOGIN TO APP</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">

<?php if($this->session->flashdata("error")): ?>
<div class="alert alert-danger"><?php echo $this->session->flashdata("error"); ?></div>
<?php endif; ?>
                        <form action="<?php echo base_URL() ?>welcome/verify_password" id="loginForm" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Email</label>
                                <input type="email" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="email" id="username" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Yur strong password</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="<?php echo base_URL() ?>welcome/register">Register</a>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2019 Click & Earn</p>
			</div>
		</div>   
    </div>


       <!-- jquery
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_URL() ?>assets/back/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_URL() ?>assets/back/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_URL() ?>assets/back/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?php echo base_URL() ?>assets/back/js/tawk-chat.js"></script>
</body>

</html>