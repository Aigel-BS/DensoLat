<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>DENSO AUTOPARTES LATAM</title>
	<?= $this->Html->css(array('nicepage'),array('media'=>'screen'))?>
	<?php echo $this->fetch('css') ?>
	<?= $this->Html->script(array('jquery','nicepage'),array('defer'=>''))?>
	<?php echo $this->fetch('script') ?>

	<meta name="generator" content="Nicepage 5.12.7, nicepage.com">
	<meta name="referrer" content="origin">

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
	<meta name="twitter:title" content="DENSO AUTOPARTES LATAM">
	<meta name="twitter:description" content="DENSO">
	<meta property="og:title" content="DENSO AUTOPARTES LATAM">
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
<header class="u-clearfix u-custom-color-1 u-header u-sticky u-sticky-5545 u-valign-middle-lg u-valign-middle-xl u-header"
		id="sec-a3c4"><a href="<?= $this->Html->url(array('controller'=>'pages','action'=>'home','mx'))?>" class="u-align-left u-image u-logo u-image-1" data-image-width="1158"
						 data-image-height="387" title="HOME">
		<img src="<?= $this->Html->url('/img/Logo_DENSO.jpg')?>" class="u-logo-image u-logo-image-1">
	</a>
	<?= $this->Element('Menu/menu',array('region'=>'mx'))?>
</header>
<?php echo $this->Session->flash();?>
<?php echo $this->fetch('content'); ?>

<?= $this->Element('Menu/footer',array('region'=>$region))?>

</body>
</html>
