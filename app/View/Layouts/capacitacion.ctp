<!doctype html>
<html class="no-js">
<head>
	<meta charset="UTF-8">
	<title>Capacitación | DENSO Autopartes LATAM</title>
	<!--IE Compatibility modes-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--Mobile first-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logo1.ico"/>
	<!-- Global styles -->
	<?= $this->Html->css(array('/admin/css/components','/admin/css/custom'))?>
	<?= $this->fetch('css'); ?>
	<style>
		@font-face {
			font-family: Denso;
			src: url("<?= $this->Html->url('/fonts/denso/DENSO-Italic.otf')?>") format("opentype");
			src: local("<?= $this->Html->url('/fonts/denso/DENSO-Italic.otf')?>") format("opentype");
		}
	</style>
</head>
<body class="no_header">
<div id="wrap">
	<div class="wrapper">
		<div id="left">
			<div class="menu_scroll">
				<div class="left_media" style="height: 130px;background-size: contain;background-repeat: no-repeat;background-position-x: center;background-image: url('<?= $this->Html->url('/img/logo_2.png') ?>')">
				</div>
				<?= $this->Element('menu_cursos')?>
				<!-- /#menu -->
			</div>
		</div>
		<!-- /#left -->
		<?php echo $this->fetch('content'); ?>
	</div>
	<!--wrapper-->
</div>
<?= $this->Html->script(array('/admin/js/components','/admin/js/custom'))?>
<?php echo $this->fetch('script'); ?>
</body>

</html>
