<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">
<head>
	<?php
	$pais = array(
			'mx'=>'México',
			'co'=>'Colombia',
			'cl'=>'Chile',
			'ec'=>'Ecuador',
			'pe'=>'Perú',
			've'=>'Venezuela',
			'latam'=>'LATAM',
			'car'=>'Caribe',
			'cam'=>'Centroamérica'
	)

	?>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->Html->charset('utf-8'); ?>
	<?php echo $this->Html->meta('favicon.ico','/img/favicon.png',array('type'=>'icon'));?>
	<?php echo $this->fetch('meta');?>
	<title><?= "DENSO Autopartes ".$pais[$region]?></title>
	<?= $this->Html->css(array('nicepage'),array('media'=>'screen'))?>
	<?php echo $this->fetch('css') ?>
	<?= $this->Html->script(array('jquery','nicepage'),array('defer'=>''))?>
	<?php echo $this->fetch('script') ?>

	<?php if($region=='latam'){?>
		<!-- Global site tag (gtag.js) - Google Analytics - LATAM-->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-KBDWJPVRL2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-KBDWJPVRL2');
		</script>
	<?php } ?>

	<?php if($region=='co'){?>
		<!-- Global site tag (gtag.js) - Google Analytics - COLOMBIA -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-N2M7591Q9G"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-N2M7591Q9G');
		</script>
	<?php } ?>

	<?php if($region=='cl'){?>
		<!-- Global site tag (gtag.js) - Google Analytics - CHILE -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-5S1EFM9BT5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-5S1EFM9BT5');
		</script>
	<?php } ?>

	<?php if($region=='ec'){?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-P6YLVE1MB1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-P6YLVE1MB1');
		</script>
	<?php } ?>

	<?php if($region=='mx'){?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-BTWZWJKJFG"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-BTWZWJKJFG');
		</script>
	<?php } ?>

	<?php if($region=='pe'){?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-F3NSNLTRC1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-F3NSNLTRC1');
		</script>
	<?php } ?>

    <?php if($region=='ve'){?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-78045YBSF2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-78045YBSF2');
        </script>
	<?php } ?>

	<?php if($region=='car'){?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-6GBWW3VB20"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-6GBWW3VB20');
		</script>
	<?php } ?>

	<?php if($region=='cam'){?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-GC7XC9MMB1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-GC7XC9MMB1');
		</script>
	<?php } ?>

	<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

	<script type="application/ld+json">{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "DENSO",
			"logo": "images/Logo_DENSO.jpg",
			"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://instagram.com/name"
			]
		}</script>
	<meta name="theme-color" content="#478ac9">
	<meta name="twitter:site" content="@">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="DENSO AUTOPARTES <?= $pais[$region]?>">
	<meta name="twitter:description" content="DENSO">
	<meta property="og:title" content="DENSO AUTOPARTES <?= $pais[$region]?>">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<script>
		function gdprConfirmed() {
			return true;
		}
		function dynamicLoadScript(src) {
			var script = document.createElement('script');
			script.src = src && typeof src === 'string' ? src : 'https://www.google.com/recaptcha/api.js?render=6Ld2DqAmAAAAAJQ6zuZOAjfUPOylkki9reU846cU';
			script.async = true;
			document.body.appendChild(script);
			script.onload = function() {
				let event = new CustomEvent("recaptchaLoaded");
				document.dispatchEvent(event);
			};
		}
		document.addEventListener('DOMContentLoaded', function () {
			var confirmButton = document.querySelector('.u-cookies-consent .u-button-confirm');
			if (confirmButton) {
				confirmButton.onclick = dynamicLoadScript;
			}
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function(){
			if (!gdprConfirmed()) {
				return;
			}
			dynamicLoadScript();
		});
	</script>
	<script>
		document.addEventListener("recaptchaLoaded", function() {
			if (!gdprConfirmed()) {
				return;
			}
			(function (grecaptcha, sitekey, actions) {
				var recaptcha = {
					execute: function (action, submitFormCb) {
						try {
							grecaptcha.execute(
								sitekey,
								{action: action}
							).then(function (token) {
								var forms = document.getElementsByTagName('form');

								for (var i = 0; i < forms.length; i++) {
									var fields = forms[i].getElementsByTagName('input');

									for (var j = 0; j < fields.length; j++) {
										var field = fields[j];

										if ('recaptchaResponse' === field.getAttribute('name')) {
											field.setAttribute('value', token);
											break;
										}
									}
								}
								submitFormCb();
							});
						} catch (e) {
							var formError = document.querySelector('.u-form-send-error');

							if (formError) {
								formError.innerText = 'Error de propietario del Sitio: ' + e.message.replace(/:[\s\S]*/, '');
								formError.style.display = 'block';
							}
						}
					},

					executeContact: function (submitFormCb) {
						recaptcha.execute(actions['contact'], submitFormCb);
					}
				};

				window.recaptchaObject = recaptcha;
			})(
				grecaptcha,

				'6Ld2DqAmAAAAAJQ6zuZOAjfUPOylkki9reU846cU',
				{'contact': 'contact'}
			);
		});
	</script>

	<meta data-intl-tel-input-cdn-path="intlTelInput/">

</head>
<body class="u-body u-xxl-mode" data-lang="es">
<header class="u-clearfix u-custom-color-1 u-header u-sticky u-sticky-5545 u-valign-middle-lg u-valign-middle-xl u-header" id="sec-a3c4">
	<a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'home',$region))?>" class="u-align-left u-image u-logo u-image-1" data-image-width="1158" data-image-height="387" title="HOME">
		<img src="<?= $this->Html->url('/img/Logo_DENSO.jpg')?>" class="u-logo-image u-logo-image-1">
	</a>
	<?= $this->Element('Menu/menu',array('region'=>$region))?>
</header>

<?php echo $this->Session->flash();?>
<?php echo $this->fetch('content'); ?>

<?= $this->Element('Menu/footer',array('region'=>$region))?>

</body>
</html>
