<html>
<head>
	<title>Impresión</title>
	<style>
		@font-face {
			font-family: Denso;
			src: url("<?= $this->Html->url('/fonts/denso/DENSO-Regular.otf')?>") format("opentype");
		}
		@font-face {
			font-family: Denso-Black;
			src: url("<?= $this->Html->url('/fonts/denso/DENSO-Black.otf')?>") format("opentype");
		}
		@font-face {
			font-family: Denso-Light;
			src: url("<?= $this->Html->url('/fonts/denso/DENSO-Light.otf')?>") format("opentype");
		}

		@font-face {
			font-family: Denso-Bold;
			src: url("<?= $this->Html->url('/fonts/denso/DENSO-Bold.otf')?>") format("opentype");
		}
		body {
			font-family: 'Denso';
			font-size: 10px;

			height: 100vh;
		}
		.main{
			background-image: url('<?= $this->Html->url('/img/diploma/fondo.jpg')?>');
			background-size: contain;
			width:auto;
			height: 100vh;
			background-repeat: no-repeat;
		}
		.titulo {
			position: fixed;
			bottom: 0px;
			left: 3.5in;
			width: 5in;
			top: 1in;
			font-family: 'Denso';
			font-size: 26px;
			color: white;
			background-color: black;
			height: .3in;
			padding: 10px 1px 7px 1px;
			text-align: center;
			font-weight: normal;
		}
		.etiqueta_1{
			position: fixed;
			top: 1.8in;
			width: 8in;
			left: 2in;
			color: black;
			z-index: 100;
			text-align: center;
			font-size: 20px;
			line-height: .25in;
		}

		.estudiante{
			position:fixed;
			top: 2.8in;
			width: 8in;
			left: 2in;
			color:black;
			text-align: center;
			font-size: 24px;
			font-family: 'Denso-Bold';
			text-transform: uppercase;
		}

		.etiqueta_2{
			position:fixed;
			top: 3.7in;
			width: 7in;
			left: 2.6in;
			color:black;
			text-align: center;
			font-size: 20px;
			font-family: 'Denso';
			line-height: .3in;
		}
		.fecha{
			position:fixed;
			top: 5.3in;
			width: 8in;
			left: 2in;
			color:black;
			text-align: center;
			font-size: 22px;
			font-family: 'DENSO';
		}

		.firma_1{
			position: fixed;
			bottom: 1.1in;
			left: 3in;
			color: black;
			line-height: 1.5px;
			z-index: 100;
			width: 2.5in;
			font-size: 14px;
			text-align: center;
			border-top: 2px solid black;
			padding: 20px;
			font-family: 'Denso';

		}
		.firma_2 {
			position: fixed;
			bottom: 1.1in;
			left: 6.2in;
			color: black;
			line-height: 1.5px;
			z-index: 100;
			width: 2.5in;
			font-size: 14px;
			text-align: center;
			border-top: 2px solid black;
			padding: 20px;
			font-family: 'Denso';

		}

		.v-spacer {
			position: fixed;
			bottom: 100px;
			left: 500px;
			color: black;
			line-height: 1.5px;
			z-index: 100;
			width: 4%;
			font-size: 14px;
			text-align: center;
			padding: 20px;

		}

		@media print {
			body, page {
				font-family: 'Denso';
				font-size: 10px;
				background-image: url('<?= $this->Html->url('/img/diploma/fondo.jpg')?>');
				background-size: cover;
				print-color-adjust: exact;

			}
			.titulo {}
			.footer{}
			.m-t-60{}
			.spacer{}
			.main{
				background-image: unset;
				width:11in;
				height: 8.2in;
			}

		}
	</style>
</head>
<body onload="window.print()">
	<?php echo $this->fetch('content'); ?>
</body>
</html>




