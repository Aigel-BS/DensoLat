<!DOCTYPE html>
<html>
<head>
	<title>Capacitacion DENSO Autopartes LATAM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="shortcut icon" href="img/logo1.ico"/>
	<!--Global styles -->
	<?= $this->Html->css(array('/admin/css/components','/admin/css/custom','/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min','/admin/css/pages/login3'))?>
</head>
<body class="login_backimg" style="background-image: url(<?= $this->Html->url('/img/Banner-website.jpg')?>)">
<div class="container">
	<div class="row">
		<div class="col-12 mx-auto login_section">
			<div class="row">
				<div class=" col-lg-4 col-md-8 col-sm-12  mx-auto login2_border login_section_top" style="background-color:#f9f9f9">
					<?php echo $this->Flash->render('positive') ?>
					<div class="login_logo login_border_radius1">
						<h3 class="text-center">
							<?= $this->Html->image('logo_2.png',array('class'=>'admire_logo'))?>
							<br />
							<span class="m-t-15">Iniciar Sesión</span>
						</h3>
					</div>
					<div class="m-t-15">
						<?php echo $this->fetch('content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- global js -->
<?= $this->Html->script(array('/admin/js/jquery.min','/admin/js/index','/admin/js/bootstrap.min','/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min','/admin/vendors/jquery.backstretch/js/jquery.backstretch','/admin/js/pages/login3'))?>
</body>

</html>

