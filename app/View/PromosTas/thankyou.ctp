<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    @font-face {
        font-family: Barlow Bold;
        src: url("./fonts/barlow/Barlow-ExtraBold.woff") format("woff");
    }
    @font-face {
        font-family: Barlow;
        src: url("./fonts/barlow/Barlow-Medium.woff") format("woff");
    }
     @font-face {
        font-family: Denso;
        src: url("./fonts/denso/DENSO-Italic.otf") format("opentype");
    }
    body{
        font-family: Barlow;
    }
    ::placeholder {
        color: #4f4e4e !important;
        font-size: 1.1em;
    }
    .header {
        background-color: red;
        color: white;
        /* line-height: 2em; */
        padding: 1em;
        text-transform: uppercase;
    }
</style>    

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '< Ant',
    nextText: 'Sig >',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'dd/MM/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>

<div class="row" style="padding:2em;background-image:url(./img/fondo_landing.png);background-size: cover">
    <div class="col-md-12" style="font-size:1.5em;text-align:center;">
        <p><?= $this->Html->image('ae1c5c85568c8958a1b91ec6400343f1_DENSOArcCMYK.jpg',array('width'=>'30%'))?>
        <p style="font-family: 'Barlow Bold'; font-size:4em; color:red; letter-spacing: 2px">RECÁRGATE</p>
        <p style="font-family: 'Denso';font-size:2.5em;margin-top: -3%;">CON DENSO</p>
        <p style="font-family: 'Barlow';font-size:1.3em;letter-spacing: 2px;margin-top: -1%;">
            ¡Gracias por comprar Bujías Denso! 
        </p>
        <p><b>FOLIO:<font style="background-color:red;color:white;border-radius: 3px"><?= $folio_participacion?></font></b></p>
        <p>
            La línea de productos Denso está diseñada para entregar un desempeño superior, todos los días con una instalación fácil a la primera First Time Fit®.
Denso te abonará saldo en tu celular en las próximas 48 horas, te llegará un mensaje confirmando el abono del tiempo aire.

        </p>
        <p>Para hacer válida la promoción, toda la información enviada será revisada y deberá cumplir con todos los criterios establecidos en los términos y condiciones de la promoción.</p>

        <p>
            <?= $this->Html->link('Ir a sitio web Denso México',array('controller'=>'pages','action'=>'home'),array('style'=>'color:red;font-family:Denso'))?>
        </p>
    </div>
    
</div>
