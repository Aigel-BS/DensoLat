<?= $this->assign('title', "Recárgate con Denso - Compra Bujías Denso y ¡Gana Saldo Gratis!"); ?>
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
    @media only screen and (min-width: 768px) {
        .titulo{
            font-family: 'Barlow Bold'; 
            font-size:7vw; 
            color:red; 
            letter-spacing: 2px
        }
    }
    @media only screen and (max-width: 768px) {
        .titulo{
            font-family: 'Barlow Bold'; 
            font-size:50px; 
            color:red; 
            letter-spacing: 2px
        }
    }
    
</style>    

<div id="mecanica" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Mecánica de la promoción
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('mecanica').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <ol>
                    <li>Acude a tu Tienda participante más cercana.</li>
                    <li>Compra Bujías Denso, por un importe mínimo de $250.00** (doscientos cincuenta pesos, 00/100 M.N.)</li>
                    <li>Factura tu compra.</li>
                    <li>Ingresa tus datos y factura en este formulario o desde tu celular escanea el código QR en los posters ubicados en las tiendas participantes. </li>
                    <li>Llena todos los datos solicitados.</li>
                    <li>Sube la foto de tu factura en donde sea legible el número de parte Denso, así como la foto del código QR o cintillo de identificación fiscal de la factura. </li>
                    <li>Deberás contar con un número de celular registrado y válido en la república mexicana.</li>
                    <li>** Los montos de la promoción son calculados antes de IVA</li>
                </ol>
            </div>
        </div>
    </div>
  </div>
</div>
<?php
    $sucursales = array(
        'AOCSA (BASE AEREA)'=>'AOCSA (BASE AEREA)',
        'AOCSA (R.MICHEL)'=>'AOCSA (R.MICHEL)',
        'AOCSA (ZAPOPAN)'=>'AOCSA (ZAPOPAN)',
        'APYMSA (Adolfo Horn)'=>'APYMSA (Adolfo Horn)',
        'APYMSA (Colon)'=>'APYMSA (Colon)',
        'APYMSA (Tesistan)'=>'APYMSA (Tesistan)',
        'Autopartes JIMHER'=>'Autopartes JIMHER',
        'Auto Partes El Progreso (Cabo San Lucas)'=>'Auto Partes El Progreso (Cabo San Lucas)',
        'Auto Partes El Progreso (Forjadores)'=>'Auto Partes El Progreso (Forjadores)',
        'Auto Partes El Progreso (Matriz)'=>'Auto Partes El Progreso (Matriz)',
        'Auto Partes El Progreso (Nicolas Bravo)'=>'Auto Partes El Progreso (Nicolas Bravo)',
        'Auto Partes El Progreso (San Jose Del Cabo)'=>'Auto Partes El Progreso (San Jose Del Cabo)',
        'Auto Partes Pensiones'=>'Auto Partes Pensiones',
        'Auto Partes Reyes'=>'Auto Partes Reyes',
        'Autopartes Mosar (Diego Díaz)'=>'Autopartes Mosar (Diego Díaz)',
        'Autopartes Mosar (Guadalupe)'=>'Autopartes Mosar (Guadalupe)',
        'Autopartes Mosar (Laredo)'=>'Autopartes Mosar (Laredo)',
        'Autopartes Mosar (Moderna)'=>'Autopartes Mosar (Moderna)',
        'Autopartes Mosar (TEC)'=>'Autopartes Mosar (TEC)',
        'Autopartes Mosar (Victoria)'=>'Autopartes Mosar (Victoria)',
        'Autopartes Patria'=>'Autopartes Patria',
        'Autopartes Tadeo'=>'Autopartes Tadeo',
        'Brakes Depot'=>'Brakes Depot',
        'CERMA Automotriz, (Alemán)'=>'CERMA Automotriz, (Alemán)',
        'CERMA Automotriz, (Boticaria)'=>'CERMA Automotriz, (Boticaria)',
        'CERMA Automotriz, (Coatzacoalcos)'=>'CERMA Automotriz, (Coatzacoalcos)',
        'CERMA Automotriz, (Córdoba)'=>'CERMA Automotriz, (Córdoba)',
        'CERMA Automotriz, (Cortéz)'=>'CERMA Automotriz, (Cortéz)',
        'CERMA Automotriz, (Lafragua)'=>'CERMA Automotriz, (Lafragua)',
        'CERMA Automotriz, (Minatitlán)'=>'CERMA Automotriz, (Minatitlán)',
        'CERMA Automotriz, (Orizaba)'=>'CERMA Automotriz, (Orizaba)',
        'CERMA Automotriz, (Poza Rica)'=>'CERMA Automotriz, (Poza Rica)',
        'CERMA Automotriz, (Rio Medio)'=>'CERMA Automotriz, (Rio Medio)',
        'CERMA Automotriz, (Tejería)'=>'CERMA Automotriz, (Tejería)',
        'CERMA Automotriz, (Tuxtla 1)'=>'CERMA Automotriz, (Tuxtla 1)',
        'CERMA Automotriz, (Tuxtla 2)'=>'CERMA Automotriz, (Tuxtla 2)',
        'CERMA Automotriz, (Victoria)'=>'CERMA Automotriz, (Victoria)',
        'CERMA Automotriz, (Villa 1)'=>'CERMA Automotriz, (Villa 1)',
        'CERMA Automotriz, (Villa 2)'=>'CERMA Automotriz, (Villa 2)',
        'CERMA Automotriz, (Xalapa 1)'=>'CERMA Automotriz, (Xalapa 1)',
        'CERMA Automotriz, (Xalapa 2)'=>'CERMA Automotriz, (Xalapa 2)',
        'Chavitar (Matriz)'=>'Chavitar (Matriz)',
        'Chavitar (Nogales)'=>'Chavitar (Nogales)',
        'Chavitar (Nueva España)'=>'Chavitar (Nueva España)',
        'Chavitar (Ocampo)'=>'Chavitar (Ocampo)',
        'Chavitar (Silvestre Terrazas)'=>'Chavitar (Silvestre Terrazas)',
        'DIAGSA Automotriz (Acatzingo)'=>'DIAGSA Automotriz (Acatzingo)',
        'DIAGSA Automotriz (Apizaco)'=>'DIAGSA Automotriz (Apizaco)',
        'DIAGSA Automotriz (Huajuapan)'=>'DIAGSA Automotriz (Huajuapan)',
        'DIAGSA Automotriz (Libramiento)'=>'DIAGSA Automotriz (Libramiento)',
        'DIAGSA Automotriz (Matriz)  '=>'DIAGSA Automotriz (Matriz)  ',
        'DIAGSA Automotriz (Purísima)'=>'DIAGSA Automotriz (Purísima)',
        'DIAGSA Automotriz (Reforma Centro)'=>'DIAGSA Automotriz (Reforma Centro)',
        'DIAGSA Automotriz (Santiago)'=>'DIAGSA Automotriz (Santiago)',
        'DIAGSA Automotriz (Serdan)'=>'DIAGSA Automotriz (Serdan)',
        'DIAGSA Automotriz (Tepeaca)'=>'DIAGSA Automotriz (Tepeaca)',
        'DIAGSA Automotriz (Teziutlan)'=>'DIAGSA Automotriz (Teziutlan)',
        'Autopartes Atlas'=>'Autopartes Atlas',
        'Exclusivas Automotrices Sánchez (Pantitlán)'=>'Exclusivas Automotrices Sánchez (Pantitlán)',
        'Exclusivas Automotrices Sánchez (Qro. 1)'=>'Exclusivas Automotrices Sánchez (Qro. 1)',
        'Exclusivas Automotrices Sánchez (Qro. 3)'=>'Exclusivas Automotrices Sánchez (Qro. 3)',
        'Exclusivas Automotrices Sánchez (San Juan del Río)'=>'Exclusivas Automotrices Sánchez (San Juan del Río)',
        'Exclusivas Automotrices Sánchez (SLP)'=>'Exclusivas Automotrices Sánchez (SLP)',
        'Exclusivas Automotrices Sánchez (Tecamac)'=>'Exclusivas Automotrices Sánchez (Tecamac)',
        'Exclusivas Automotrices Sánchez (Uruapan)'=>'Exclusivas Automotrices Sánchez (Uruapan)',
        'Exclusivas Automotrices Sánchez (Veracruz 1)'=>'Exclusivas Automotrices Sánchez (Veracruz 1)',
        'Exclusivas Automotrices Sánchez (Vertiz)'=>'Exclusivas Automotrices Sánchez (Vertiz)',
        'Exclusivas Automotrices Sánchez (Villahermosa)'=>'Exclusivas Automotrices Sánchez (Villahermosa)',
        'H y H Refacciones (16 de septiembre)'=>'H y H Refacciones (16 de septiembre)',
        'H y H Refacciones (Comalcalco)'=>'H y H Refacciones (Comalcalco)',
        'H y H Refacciones (Gaviotas)'=>'H y H Refacciones (Gaviotas)',
        'H y H Refacciones (Mendez)'=>'H y H Refacciones (Mendez)',
        'H y H Refacciones (Reforma)'=>'H y H Refacciones (Reforma)',
        'H y H Refacciones (Tamulte)'=>'H y H Refacciones (Tamulte)',
        'H y H Refacciones (Tierra Colorada)'=>'H y H Refacciones (Tierra Colorada)',
        'H y H Refacciones (Usumacinta)'=>'H y H Refacciones (Usumacinta)',
        'HERMANN MAHLE'=>'HERMANN MAHLE',
        'Jorge´s Diesel 1'=>'Jorge´s Diesel 1',
        'Jorge´s Diesel 2'=>'Jorge´s Diesel 2',
        'MAFRA (Mayoreo Automotriz  Matamoros)'=>'MAFRA (Mayoreo Automotriz  Matamoros)',
        'MAFRA (Mayoreo Automotriz Centro)'=>'MAFRA (Mayoreo Automotriz Centro)',
        'MAFRA (Mayoreo Automotriz La Mesa) '=>'MAFRA (Mayoreo Automotriz La Mesa) ',
        'MAFRA (Mayoreo Automotriz Pinos)'=>'MAFRA (Mayoreo Automotriz Pinos)',
        'MD Refacciones (Moreno Diesel)'=>'MD Refacciones (Moreno Diesel)',
        'Oil and Filters del Pacifico (Ciudad Obregón)'=>'Oil and Filters del Pacifico (Ciudad Obregón)',
        'Oil and Filters del Pacifico (Guamuchil)'=>'Oil and Filters del Pacifico (Guamuchil)',
        'Oil and Filters del Pacifico (Hermosillo)'=>'Oil and Filters del Pacifico (Hermosillo)',
        'Oil and Filters del Pacifico (La Paz)'=>'Oil and Filters del Pacifico (La Paz)',
        'Oil and Filters del Pacifico (Los Mochis)'=>'Oil and Filters del Pacifico (Los Mochis)',
        'Oil and Filters del Pacifico (Matriz) '=>'Oil and Filters del Pacifico (Matriz) ',
        'Oil and Filters del Pacifico (Mazatlán)'=>'Oil and Filters del Pacifico (Mazatlán)',
        'Orma Autopartes (Abastos)'=>'Orma Autopartes (Abastos)',
        'Orma Autopartes (Aeropuerto)'=>'Orma Autopartes (Aeropuerto)',
        'Orma Autopartes (Águilas)'=>'Orma Autopartes (Águilas)',
        'Orma Autopartes (Chapala)'=>'Orma Autopartes (Chapala)',
        'Orma Autopartes (Cruz Del Sur)'=>'Orma Autopartes (Cruz Del Sur)',
        'Orma Autopartes (Ejército)'=>'Orma Autopartes (Ejército)',
        'Orma Autopartes (El Salto)'=>'Orma Autopartes (El Salto)',
        'Orma Autopartes (González Gallo)'=>'Orma Autopartes (González Gallo)',
        'Orma Autopartes (Guadalupe)'=>'Orma Autopartes (Guadalupe)',
        'Orma Autopartes (Punto Oriente)'=>'Orma Autopartes (Punto Oriente)',
        'Orma Autopartes (R Michel)'=>'Orma Autopartes (R Michel)',
        'Orma Autopartes (Santa Margarita)'=>'Orma Autopartes (Santa Margarita)',
        'Orma Autopartes (Tesistán)'=>'Orma Autopartes (Tesistán)',
        'Orma Autopartes (Tlajomulco)'=>'Orma Autopartes (Tlajomulco)',
        'Orma Autopartes (Tonalá)'=>'Orma Autopartes (Tonalá)',
        'Orma Autopartes (Washington)'=>'Orma Autopartes (Washington)',
        'Orma Autopartes (Zapopan)'=>'Orma Autopartes (Zapopan)',
        'Orma Autopartes (Zapotlanejo)'=>'Orma Autopartes (Zapotlanejo)',
        'Owari Autopartes'=>'Owari Autopartes',
        'Promotora de Repuestos Automotrices (PRASA)'=>'Promotora de Repuestos Automotrices (PRASA)',
        'Refaccionaria Armando' => 'Refaccionaria Armando',
        'Refaccionaria Toni' => 'Refaccionaria Toni',
        'Refaccionaria Hiroma' => 'Refaccionaria Hiroma',
        'Refacciones JG' => 'Refacciones JG',
        'Autopartes Calderón' => 'Autopartes Calderón',
        'Refaccionaria Aguilar'=>'Refaccionaria Aguilar',
        'Refaccionaria Alemana (Guadalajara)'=>'Refaccionaria Alemana (Guadalajara)',
        'Refaccionaria Alemana (Zapopan)'=>'Refaccionaria Alemana (Zapopan)',
        'Refaccionaria del Sol  (Sucursal Independencia)'=>'Refaccionaria del Sol  (Sucursal Independencia)',
        'Refaccionaria del Sol (Matriz)'=>'Refaccionaria del Sol (Matriz)',
        'Refaccionaria del Sol (Sucursal 25)'=>'Refaccionaria del Sol (Sucursal 25)',
        'Refaccionaria del Sol (Sucursal 34)'=>'Refaccionaria del Sol (Sucursal 34)',
        'Refaccionaria del Sol (Sucursal 47)'=>'Refaccionaria del Sol (Sucursal 47)',
        'Refaccionaria del Sol (Sucursal Calle 11) '=>'Refaccionaria del Sol (Sucursal Calle 11) ',
        'Refaccionaria del Sol (Sucursal Carranza)'=>'Refaccionaria del Sol (Sucursal Carranza)',
        'Refaccionaria del Sol (Sucursal Constitución y Chiapas)'=>'Refaccionaria del Sol (Sucursal Constitución y Chiapas)',
        'Refaccionaria del Sol (Sucursal Tuxpan)'=>'Refaccionaria del Sol (Sucursal Tuxpan)',
        'Refaccionaria del Sur'=>'Refaccionaria del Sur',
        'Refaccionaria El Sauz'=>'Refaccionaria El Sauz',
        'Refaccionaria Guadalajara'=>'Refaccionaria Guadalajara',
        'Silver Nissan'=>'Silver Nissan',
        'Refaccionaria La Amarillita'=>'Refaccionaria La Amarillita',
        'Refaccionaria La Amarillita Tlajomulco'=>'Refaccionaria La Amarillita Tlajomulco',
        'Refaccionaria Mexicana Del Centro (Acueducto)'=>'Refaccionaria Mexicana Del Centro (Acueducto)',
        'Refaccionaria Mexicana Del Centro (Arnulfo Ávila)'=>'Refaccionaria Mexicana Del Centro (Arnulfo Ávila)',
        'Refaccionaria Mexicana Del Centro (Matriz)'=>'Refaccionaria Mexicana Del Centro (Matriz)',
        'Refaccionaria Moderna del Bajío (Blvd. Hidalgo)'=>'Refaccionaria Moderna del Bajío (Blvd. Hidalgo)',
        'Refaccionaria Moderna del Bajío (Centro Max)'=>'Refaccionaria Moderna del Bajío (Centro Max)',
        'Refaccionaria Moderna Monterrey (Sucursal Centro)'=>'Refaccionaria Moderna Monterrey (Sucursal Centro)',
        'Refaccionaria Moderna Monterrey (Sucursal Chapultepec)'=>'Refaccionaria Moderna Monterrey (Sucursal Chapultepec)',
        'Refaccionaria Moderna Monterrey (Sucursal Eloy Cavazos)'=>'Refaccionaria Moderna Monterrey (Sucursal Eloy Cavazos)',
        'Refaccionaria Moderna Monterrey (Sucursal Guadalupe Oriente)'=>'Refaccionaria Moderna Monterrey (Sucursal Guadalupe Oriente)',
        'Refaccionaria Moderna Monterrey (Sucursal Lincoln)'=>'Refaccionaria Moderna Monterrey (Sucursal Lincoln)',
        'Refaccionaria Moderna Monterrey (Sucursal Madero)'=>'Refaccionaria Moderna Monterrey (Sucursal Madero)',
        'Refaccionaria Moderna Monterrey (Sucursal Satélite)'=>'Refaccionaria Moderna Monterrey (Sucursal Satélite)',
        'Refaccionaria Moderna Monterrey (Sucursal Universidad)'=>'Refaccionaria Moderna Monterrey (Sucursal Universidad)',
        'Refaccionaria Moderna Monterrey (Sucursal Vasconcelos)'=>'Refaccionaria Moderna Monterrey (Sucursal Vasconcelos)',
        'Refaccionaria Nueva (A. Himno Nacional)'=>'Refaccionaria Nueva (A. Himno Nacional)',
        'Refaccionaria Nueva (Av. Aguascalientes)'=>'Refaccionaria Nueva (Av. Aguascalientes)',
        'Refaccionaria Nueva (Benito Juárez)'=>'Refaccionaria Nueva (Benito Juárez)',
        'Refaccionaria Nueva (Blvd. Zacatecas)'=>'Refaccionaria Nueva (Blvd. Zacatecas)',
        'Refaccionaria Nueva (Colón)'=>'Refaccionaria Nueva (Colón)',
        'Refaccionaria Nueva (López Mateos Poniente)'=>'Refaccionaria Nueva (López Mateos Poniente)',
        'Refaccionaria Nueva (López Mateos)'=>'Refaccionaria Nueva (López Mateos)',
        'Refaccionaria Nueva (Mahatma Gandhi)'=>'Refaccionaria Nueva (Mahatma Gandhi)',
        'Refaccionaria Nueva (Matriz)'=>'Refaccionaria Nueva (Matriz)',
        'Refaccionaria Nueva (Petróleos Mexicanos)'=>'Refaccionaria Nueva (Petróleos Mexicanos)',
        'Refaccionaria Nueva (San Juan de Dios)'=>'Refaccionaria Nueva (San Juan de Dios)',
        'Refaccionaria Nueva (Vasco de Quiroga)'=>'Refaccionaria Nueva (Vasco de Quiroga)',
        'El tríangulo'=>'El tríangulo',
        'Refaccionaria González'=>'Refaccionaria González',
        'Autopartes Patria'=>'Autopartes Patria',
        'Refaccionaria la Casita'=>'Refaccionaria la Casita',
        'Auto Afinaciones Aguilar'=>'Auto Afinaciones Aguilar',
    );
?>
<div id="sucursales" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Tiendas y sucursales participantes
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('sucursales').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <?php 
                        ksort($sucursales);
                        foreach($sucursales as $sucursal):?>
                        <li><?= $sucursal?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
  </div>
</div>

<div id="qr" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        ¿Qué es el QR y Cintillo?
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('qr').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->Html->image('cintillo_qr.png',array('width'=>'100%'))?>
            </div>
        </div>
    </div>
  </div>
</div>

<div id="tya" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Términos y Condiciones
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('tya').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <ul>
            <li>En la compra buj&iacute;as de la marca Denso en cualquier tienda participante se abonar&aacute; 30.00, $50.00 o $100.00 pesos de acuerdo al monto de compra sin IVA en Tiempo Aire para tu celular especificado en la siguiente tabla:<table border="0" cellpadding="0" cellspacing="0" style="width: 337.25pt;border-collapse: collapse;" width="450">
            <table style="width:100%;border: 1px solid gray">
                <tr>
                    <td style="background-color: red;">
                        <p style="text-align: center; color:white"><strong>Monto (Sin IVA)</strong></p>
                    </td>
                    <td style="background-color: red;">
                        <p style="text-align: center; color:white"><strong>Recarga</strong></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: left;">$250.00** - $399.00** pesos</p>
                    </td>
                    <td>
                        <p style="text-align: left;">$30.00 pesos</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: left;">$400.00** - $699.00** pesos</p>
                    </td>
                    <td>
                        <p style="text-align: left;">$50.00 pesos</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p style="text-align: left;">$700.00** pesos o más</p>
                    </td>
                    <td>
                        <p style="text-align: left;">$100.00 pesos</p>
                    </td>
                </tr>
        </table>
    </li>
    <li>El saldo se ver&aacute; reflejado en un m&aacute;ximo de 48 horas, te llegar&aacute; un mensaje confirmando el abono del tiempo aire. &bull;Compra m&iacute;nima $250.00** (doscientos cincuenta pesos, 00/100 M.N.) equivalente a $30.00 (treinta pesos, 00/100 M.N.)&nbsp;</li>
    <li>El Monto m&aacute;ximo a recargar es $100.00 (cien pesos, 00/100 M.N.) aun cuando la compra sea superior a $700.00** (setecientos pesos, 00/100 M.N.).&nbsp;</li>
    <li>Para hacer v&aacute;lida la promoci&oacute;n deber&aacute; subir la foto de la factura en donde sea legible el n&uacute;mero de parte Denso, no &ldquo;varios&rdquo;, as&iacute; como la foto del c&oacute;digo QR o cintillo de identificaci&oacute;n fiscal de la factura.&nbsp;</li>
    <li>Factura sujeta a aprobaci&oacute;n.&nbsp;</li>
    <li>Un consumidor s&oacute;lo podr&aacute; canjear hasta un m&aacute;ximo de 2 (dos) recargas al mismo tel&eacute;fono.&nbsp;</li>
    <li>Promoci&oacute;n &uacute;nicamente v&aacute;lida para Mec&aacute;nicos y usuarios finales.&nbsp;</li>
    <li>Las facturas no son acumulables. El abono es por factura y no se tomar&aacute;n en cuenta facturas duplicadas ni canceladas.&nbsp;</li>
    <li>&Uacute;nicamente es v&aacute;lido en l&iacute;neas de prepago Telcel, AT&amp;T, Movistar, Unef&oacute;n y Virgin al n&uacute;mero registrado.&nbsp;</li>
    <li>Los montos de recarga pueden variar dependiendo de la compa&ntilde;&iacute;a telef&oacute;nica y est&aacute;n sujetos a cambio.&nbsp;</li>
    <li>Esta promoci&oacute;n es v&aacute;lida del 1 de junio al 31 de julio de 2020, o hasta agotar existencias.&nbsp;</li>
    <li>Promoción está sujeta a disponibilidad y puede finalizar sin previo aviso.</li>
    <li>Aplican restricciones.&nbsp;</li>
    <li>Al participar en la promoci&oacute;n, los participantes aceptan lo establecido en la mec&aacute;nica, formas de participaci&oacute;n y sus T&eacute;rminos y Condiciones aplicables a esta promoci&oacute;n en la Rep&uacute;blica Mexicana.&nbsp;</li>
    <li>Las tiendas participantes NO podrán suscribir facturas para redimir recargas de saldo. Las facturas hechas como venta mostrador o por cierre diario no serán válidas.</li>
    <li>Cada tienda participante debe tener el póster de la promoción a la vista.</li>
    <li>La única forma admitida para validar una compra y solicitar una recarga de saldo, es a través de una factura activa. Bajo ninguna circunstancia se permitirá cancelar alguna factura que participe de la promoción.</li>
    <li>Para una misma razón social, sea persona física o moral, sólo se permitirá redimir hasta un máximo de 2 ocasiones.</li>
    <li>DENSO se reserva el derecho a suspender la promoción sin previo aviso de manera local, regional o nacional, si observa prácticas que vayan en contra de la ética corporativa que podrá encontrar en www.denso.com</li>
    <li>Dudas a contacto@densoautopartes.com.mx</li>
    <li>** Los montos de la promoción son calculados antes de IVA</li>
</ul>
            </div>
        </div>
    </div>
  </div>
</div>

<div id="aviso-privacidad" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Aviso de Privacidad
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('aviso-privacidad').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <p><strong>Introducci&oacute;n</strong></p>
                <p>En DENSO (de aqu&iacute; en adelante &ldquo;nuestra empresa&rdquo;) siempre nos hemos esforzado para proteger la informaci&oacute;n personal de nuestros clientes. Con el aumento de la recopilaci&oacute;n de informaci&oacute;n personal de los clientes a trav&eacute;s de Internet mediante los registros de usuarios, los programas de premios, las encuestas de usuarios, etc., gestionar y proteger adecuadamente la informaci&oacute;n personal de nuestros clientes se ha vuelto a&uacute;n m&aacute;s importante en los &uacute;ltimos a&ntilde;os.</p>
                <p>Nuestra empresa ha establecido una &ldquo;Pol&iacute;tica de privacidad&rdquo; que se presenta a continuaci&oacute;n. Nos comprometemos a gestionar nuestros sitios web de modo que sean seguros y agradables para nuestros clientes mediante la aplicaci&oacute;n diligente de la prevenci&oacute;n de uso no autorizado, divulgaci&oacute;n, modificaci&oacute;n, etc. de la informaci&oacute;n personal proporcionada por nuestros clientes.</p>
                <p><strong>Definici&oacute;n de informaci&oacute;n personal</strong></p>
                <p>Informaci&oacute;n personal se refiere a cualquier informaci&oacute;n que sea proporcionada a nuestra empresa, que podr&iacute;a utilizarse para identificar a una persona como, por ejemplo, el nombre y los apellidos, el domicilio u otra direcci&oacute;n f&iacute;sica, un n&uacute;mero de tel&eacute;fono o una direcci&oacute;n de correo electr&oacute;nico, o bien cualquier informaci&oacute;n que identifique de forma &uacute;nica a la persona.</p>
                <p><strong>Recopilaci&oacute;n de informaci&oacute;n personal</strong></p>
                <p>Cuando DENSO recopila informaci&oacute;n personal a trav&eacute;s de Internet, lo hace bajo la norma b&aacute;sica de que tal informaci&oacute;n se proporciona voluntariamente (registro). Recopilaremos informaci&oacute;n personal solo en la medida en que sea necesario para lograr el prop&oacute;sito para el cual la estamos recopilando, que ser&aacute; expl&iacute;citamente revelado. Si no desea proporcionar (registrar) la informaci&oacute;n personal que buscamos, puede negarse a hacerlo a su entera discreci&oacute;n. En tales casos, es posible que no pueda acceder a algunos de los servicios que ofrecemos a trav&eacute;s de los sitios web de nuestra empresa.</p>
                <p><strong>Prop&oacute;sito y limitaci&oacute;n de uso de la informaci&oacute;n personal</strong></p>
                <p>Cuando solicitemos informaci&oacute;n personal (registro), revelaremos de antemano el prop&oacute;sito de dicha solicitud y el m&eacute;todo de utilizaci&oacute;n de la informaci&oacute;n y, a continuaci&oacute;n, recopilaremos la informaci&oacute;n dentro de los l&iacute;mites correspondientes. Una regla general limita el uso de la informaci&oacute;n personal a lo siguiente. Tambi&eacute;n hay posibilidades de otros usos de la informaci&oacute;n personal como, por ejemplo, datos estad&iacute;sticos en formas en que los datos no puedan distinguirse personalmente.</p>
                <ul type="disc">
                    <li>Suministrar la mercanc&iacute;a o el servicio que desea.</li>
                    <li>Mejorar el servicio que le brindamos.</li>
                    <li>Proporcionarle informaci&oacute;n acerca de nuevos productos o servicios.</li>
                    <li>Para gestionar promociones o concursos en los que ha participado en nuestro/s sitio/s web/s.</li>
                    <li>Con su consentimiento, para proporcionarle actualizaciones e informaci&oacute;n sobre productos y servicios ofrecidos que son similares a los que ha comprado anteriormente.</li>
                </ul>
                <p><strong>Regla de no revelaci&oacute;n de informaci&oacute;n personal a terceros</strong></p>
                <p>Nuestra empresa no revelar&aacute; ninguna informaci&oacute;n personal que nos haya proporcionado (registrado) a terceros, excepto en los siguientes casos:</p>
                <ol type="disc">
                    <li>Ha dado su consentimiento para revelar su informaci&oacute;n personal a terceros.</li>
                    <li>Su informaci&oacute;n personal debe revelarse a nuestra filial, subsidiaria o subcontratista con quien tenemos un acuerdo de confidencialidad con el fin de cumplir el objetivo para el que se recopil&oacute;, como hemos indicado anteriormente.&nbsp;(Ejemplo: instruir a un proveedor de servicios de env&iacute;o).</li>
                    <li>Su informaci&oacute;n personal se ha transformado en datos estad&iacute;sticos que no revelar&aacute;n su identidad.</li>
                    <li>La ley exige la revelaci&oacute;n.</li>
                </ol>
                <p><strong>Uso de correo directo</strong></p>
                <p>No vamos a utilizar el nombre, la direcci&oacute;n de correo electr&oacute;nico, la direcci&oacute;n f&iacute;sica, etc. que se nos ha proporcionado, salvo en los casos mencionados, para ninguna actividad de correo directo sin su consentimiento. Sin embargo, si ha dado su consentimiento expresamente en el momento del registro, podemos utilizar su direcci&oacute;n de correo electr&oacute;nico para enviarle informaci&oacute;n como anunciarle que gan&oacute; un premio.</p>
                <p><strong>Referencia, correcci&oacute;n o eliminaci&oacute;n de informaci&oacute;n personal</strong></p>
                <p>Si desea consultar la informaci&oacute;n personal que poseemos o corregir o eliminar dicha informaci&oacute;n, p&oacute;ngase en contacto con nosotros mediante el canal de consulta a trav&eacute;s de los procedimientos estipulados de la empresa. Despu&eacute;s de la verificaci&oacute;n de la identidad de la persona que hace la solicitud, revelaremos, corregiremos o eliminaremos la informaci&oacute;n dentro de un plazo razonable.</p>
                <p><strong>Centro de asistencia al cliente</strong></p>
                <p>Si desea revisar su informaci&oacute;n personal, p&oacute;ngase en contacto con el departamento que respondi&oacute; la encuesta o con la informaci&oacute;n de contacto que le entreg&oacute; nuestra empresa cuando proporcion&oacute; su informaci&oacute;n personal.</p>
                <p>Si no sabe con qui&eacute;n ponerse en contacto o si desea realizar una consulta acerca de la informaci&oacute;n personal que proporcion&oacute; en nuestro sitio web, utilice el formulario de consulta.</p>
                <p><strong>Gesti&oacute;n de la informaci&oacute;n personal</strong></p>
                <p>El administrador del sitio web de DENSO&nbsp;mantiene una gesti&oacute;n estricta de la informaci&oacute;n personal que se ha recopilado y se toman las medidas adecuadas para evitar el uso no autorizado, la revelaci&oacute;n o la modificaci&oacute;n de la informaci&oacute;n. Si se publican t&eacute;rminos de uso espec&iacute;ficos en el sitio web, dichos t&eacute;rminos de uso prevalecer&aacute;n sobre esta &ldquo;Pol&iacute;tica de privacidad&rdquo;.</p>
                <p><strong>Manejo de la informaci&oacute;n personal</strong></p>
                <p>Cuando realiza una consulta, solicita cat&aacute;logos o cuando solicitamos participantes, etc., se le pedir&aacute; que introduzca su informaci&oacute;n personal en nuestro sitio web. Nos esforzamos para proteger la informaci&oacute;n personal mediante la aplicaci&oacute;n de medidas de control de seguridad adecuadas en funci&oacute;n de esta pol&iacute;tica de privacidad.</p>
                <p>En casos distintos de los mencionados anteriormente, puede visitar nuestro sitio web sin necesidad de revelar su informaci&oacute;n personal.</p>
                <p><strong>Uso de contadores de visitas</strong></p>
                <p>Los contadores de visitas est&aacute;n incorporados en algunas p&aacute;ginas de nuestro sitio web para comprobar cu&aacute;ntas veces se ha accedido a p&aacute;ginas espec&iacute;ficas. Los datos estad&iacute;sticos obtenidos mediante los contadores de visitas se usan para mejorar nuestro sitio web, etc. Los anuncios y otros elementos de los sitios web operados por nuestras empresas asociadas pueden mostrarse en funci&oacute;n de su historial de navegaci&oacute;n en nuestro sitio web, etc.</p>
                <p><strong>Uso del registro de acceso</strong></p>
                <p>Cuando utiliza nuestro sitio web, el registro de acceso, incluida su direcci&oacute;n IP, queda registrado. Esta informaci&oacute;n se usa para controlar el acceso a nuestro sitio web, no para identificar a los usuarios, excepto en aquellas p&aacute;ginas que requieren autenticaci&oacute;n de usuario.</p>
                <p><strong>Informaci&oacute;n personal en sitios web de terceros</strong></p>
                <p>No somos responsables en forma alguna por la recopilaci&oacute;n de informaci&oacute;n personal en sitios web operados por otras empresas que se han introducido en nuestro sitio web.</p>
                <p><strong>Otra aclaraci&oacute;n</strong></p>
                <p>Nuestra empresa se esfuerza por proteger su informaci&oacute;n personal, pero no podemos garantizar la seguridad de la informaci&oacute;n cuando se nos transmite. Cada cliente debe asumir la responsabilidad de la transmisi&oacute;n segura de datos. Le solicitamos que tome las debidas precauciones con respecto a la seguridad de los datos mientras est&aacute; conectado a Internet. Nuestra empresa puede modificar esta &ldquo;Pol&iacute;tica de privacidad&rdquo; en cualquier momento. En este caso, tendr&aacute; efecto cuando se publique en el sitio web de nuestra empresa.</p>
                
            </div>
        </div>
    </div>
  </div>
</div>

<div id="faq" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Preguntas Frecuentes
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('faq').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
             <p>Promoci&oacute;n &ldquo;Rec&aacute;rgate con Denso&rdquo; te abona recarga de tu compra en Tiempo Aire para tu celular.&nbsp;</p>
<p>Solo aplica para Buj&iacute;as de la Marca Denso&nbsp;</p>
<p><strong>&iquest;C&oacute;mo puedo Participar?</strong></p>
<p>Compra buj&iacute;as de la marca Denso en cualquier tienda participante que emita facturas.&nbsp;</p>
<p><strong>&iquest;Cu&aacute;l es la din&aacute;mica de la promoci&oacute;n?&nbsp;</strong></p>
<ol>
    <li>Factura tu compra.&nbsp;</li>
    <li>Ingresa en el sitio web: www. densoautopartes.com.mx/recargate-con-denso o desde tu celular escanea el c&oacute;digo QR en los posters ubicados en las tiendas participantes.&nbsp;</li>
    <li>Llena todos los datos solicitados.&nbsp;</li>
    <li>Sube la foto de tu factura en donde sea legible el n&uacute;mero de parte Denso, as&iacute; como la foto del c&oacute;digo QR o cintillo de de identificaci&oacute;n fiscal de la factura.&nbsp;</li>
    <li>Deber&aacute;s contar con un n&uacute;mero de celular registrado y v&aacute;lido en la rep&uacute;blica mexicana.&nbsp;</li>
</ol>
<p><strong>&iquest;En cu&aacute;nto tiempo ver&eacute; reflejado mi saldo?</strong>&nbsp;</p>
<p>En un plazo m&aacute;ximo de 48 horas, te llegar&aacute; un mensaje confirmando el abono del tiempo aire.&nbsp;</p>
<p><strong>&iquest;Pueden recargarme saldo si no factur&eacute; mi compra?</strong>&nbsp;</p>
<p>No, ya que no es posible validar la compra de nuestros productos si no es a trav&eacute;s de una factura 100% aut&eacute;ntica.&nbsp;</p>
<p><strong>&iquest;Cu&aacute;les son los l&iacute;mites de abono?</strong></p>
<p>Deber&aacute;s hacer una compra m&iacute;nima de $250.00** (doscientos cincuenta pesos, 00/100 M.N.) pesos en Buj&iacute;as de la Marca Denso equivalente a $30.00 (treinta pesos, 00/100 M.N.) El monto m&aacute;ximo a abonar es de $100.00 (cien pesos, 00/100 M.N.), aun cuando la compra sea superior a $700.00** (setecientos pesos, 00/100 M.N.). El n&uacute;mero m&aacute;ximo de recargas dentro del per&iacute;odo de promoci&oacute;n es 2.&nbsp;</p>
<p><strong>&iquest;Qui&eacute;n puede participar?&nbsp;</strong></p>
<p>Cualquier persona (Mec&aacute;nico o usuario final) que compre Buj&iacute;as de la marca Denso en tiendas participantes y cuenten con un n&uacute;mero de celular registrado y v&aacute;lido.&nbsp;</p>
<p><strong>&iquest;Qu&eacute; pasa si no recibo mi saldo en 48 horas?</strong>&nbsp;</p>
<p>Por favor manda un correo a: contacto@densoautopartes.com.mx adjuntando tu factura de compra y el n&uacute;mero de celular al que se quiere hacer la recarga.&nbsp;</p>
<p><strong>&iquest;Las facturas son acumulables?&nbsp;</strong></p>
<p>No. El abono es por factura y no se tomar&aacute;n en cuenta facturas duplicadas ni canceladas.&nbsp;</p>
<p><strong>&iquest;Cu&aacute;l es la vigencia de la Promoci&oacute;n?&nbsp;</strong>Esta promoci&oacute;n es v&aacute;lida del 1 de junio al 31 de julio de 2020, o hasta agotar existencias.&nbsp;</p>
<p><strong>&iquest;Qu&eacute; compa&ntilde;&iacute;as de telefon&iacute;a participan?</strong>&nbsp;</p>
<p>Todas las compa&ntilde;&iacute;as en planes de prepago.</p>
<p>** Los montos de la promoción son calculados antes de IVA</p>   
            </div>
        </div>
    </div>
  </div>
</div>

<script>
    function showMecanica(){
        document.getElementById('mecanica').style.display='block';
    } 
    
    function showTyA(){
        document.getElementById('tya').style.display='block';
    }
    
    function showPrivacidad(){
        document.getElementById('aviso-privacidad').style.display='block';
    }
    
    function showFaq(){
        document.getElementById('faq').style.display='block';
    }
    function showQR(){
        document.getElementById('qr').style.display='block';
    }
    function showSucursales(){
        document.getElementById('sucursales').style.display='block';
    }
</script>

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
    dateFormat: 'dd-mm-yy',
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
    <div class="col-md-6" style="font-size:1.5em;text-align:center;">
        <p><?= $this->Html->image('ae1c5c85568c8958a1b91ec6400343f1_DENSOArcCMYK.jpg',array('width'=>'30%'))?>
        <p class="titulo">RECÁRGATE</p>
        <p style="font-family: 'Denso';font-size:2.5em;margin-top: -5%;">CON DENSO</p>
        <p style="font-family: 'Barlow';font-size:1.3em;letter-spacing: 2px;margin-top: -1%;">
            Compra Bujías <font style="font-family:'Denso'; color:red">DENSO</font> y <font style="color:red">¡Gana Saldo Gratis!</font>
        </p>
        <p style="font-size:.7em;margin-top: 1%">Compra de $250.00** a $399.00** pesos y</p>
        <p style="margin-top: -2%"><b>¡Recibe <font style="background-color:red;color:white;border-radius: 3px">$30.00</font> pesos en Tiempo Aire!</b></p>
        <p style="font-size:.7em;margin-top: 1%">Compra de $400.00** a $699.00** pesos y</p>
        <p style="margin-top: -2%"><b>¡Recibe <font style="background-color:red;color:white;border-radius: 3px">$50.00</font> pesos en Tiempo Aire!</b></p>
        <p style="font-size:.7em;margin-top: 1%">Compra $700.00** pesos o más y</p>
        <p style="margin-top: -2%"><b>¡Recibe <font style="background-color:red;color:white;border-radius: 3px">$100.00</font> pesos en Tiempo Aire!</b></p>
        <p>** Los montos de la promoción son calculados antes de IVA</p>
        <div style="font-family:'Barlow'; font-size:15px; margin-top:10%">
            <p><?= $this->Html->link('Leer Mecánica de la promoción','javascript:showMecanica()',array('style'=>'color:red')) ?>
            <p><?= $this->Html->link('Leer Términos y Condiciones','javascript:showTyA()',array('style'=>'color:red')) ?>
            <p><?= $this->Html->link('Leer Aviso de Privacidad','javascript:showPrivacidad()',array('style'=>'color:red')) ?>
            <p><?= $this->Html->link('Leer Preguntas Frecuentes','javascript:showFaq()',array('style'=>'color:red')) ?>
            <p><?= $this->Html->link('Tiendas Participantes','javascript:showSucursales()',array('style'=>'color:red')) ?>

        </div>
            
    </div>
    <div class="col-md-6">
        <p style="padding-top:1%;font-size:1.5em">Registra tu Factura y datos aquí:</p>
        <?php 
            $empresa = array(
                'Telcel'=>'Telcel',
                'ATT NEXTEL' => 'AT&T',
                'MOVISTAR' => 'Movistar',
                'Iusacell Unefon' => 'Unefón',
            );
            $estados = array(
                'Aguascalientes' => 'Aguascalientes',
                'Baja California' => 'Baja California',
                'Baja California Sur' => 'Baja California Sur',
                'Campeche' => 'Campeche',
                'Chiapas' => 'Chiapas',
                'Chihuahua' => 'Chihuahua',
                'Coahuila' => 'Coahuila',
                'Colima' => 'Colima',
                'Ciudad de México' => 'Ciudad de México',
                'Durango' => 'Durango',
                'Guanajuato' => 'Guanajuato',
                'Guerrero' => 'Guerrero',
                'Hidalgo' => 'Hidalgo',
                'Jalisco' => 'Jalisco',
                'Estado de México' => 'Estado de México',
                'Michoacán' => 'Michoacán',
                'Morelos' => 'Morelos',
                'Nayarit' => 'Nayarit',
                'Nuevo Leon' => 'Nuevo Leon',
                'Oaxaca' => 'Oaxaca',
                'Puebla' => 'Puebla',
                'Querétaro' => 'Querétaro',
                'Quintana Roo' => 'Quintana Roo',
                'San Luis Potosí' => 'San Luis Potosí',
                'Sinaloa' => 'Sinaloa',
                'Sonora' => 'Sonora',
                'Tabasco' => 'Tabasco',
                'Tamaulipas' => 'Tamaulipas',
                'Pantitlán' => 'Pantitlán',
                'Veracruz' => 'Veracruz',
                'Yucatán' => 'Yucatán',
                'Zacatecas' => 'Zacatecas'
            );
            $giros = array(
                'Refaccionaria'=>'Refaccionaria',
                'Taller'=>'Taller',
                'Empresa'=>'Empresa',
                'Particular' => 'Particular'
            );
            $medios = array(
                'Red Social' => 'Red Social',
                'Poster' => 'Poster',
                'Sucursal' => 'Sucursal'
            );
            
        ?>
        <?= $this->Form->create('PromosTa',array('type'=>'file'))?>
        <?= $this->Form->input('nombre',array('required'=>'required','placeholder'=>'Nombre Completo', 'label'=>false,'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('email',array('required'=>'required','placeholder'=>'Correo Electrónico','type'=>'email','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('celular',array('maxlength'=>'10','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57','type'=>'text','required'=>'required','placeholder'=>'Celular','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('celular_2',array('maxlength'=>'10','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57','type'=>'text','required'=>'required','placeholder'=>'Confirmar Celular','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('empresa_celular',array('required'=>'required','empty'=>'Seleccionar Compañía Celular','type'=>'select','options'=>$empresa,'label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('estado',array('required'=>'required','empty'=>'Seleccionar Estado','type'=>'select','options'=>$estados,'label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('giro',array('required'=>'required','type'=>'select','options'=>$giros,'empty'=>'Seleccionar giro','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('tienda',array('required'=>'required','type'=>'select','options'=>$sucursales,'empty'=>'¿En que tienda realizaste tu compra?','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('medio',array('required'=>'required','type'=>'select','options'=>$medios,'empty'=>'¿Cómo te enteraste de nosotros?','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('rfc_cliente',array('required'=>'required','maxlength'=>'13','placeholder'=>'RFC de cliente (Sin guiones ni espacios)','label'=>false, 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('factura',array('required'=>'required','type'=>'file','label'=>'Subir Fotografía de Factura', 'style'=>'width:100%','div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('cintillo',array('required'=>'required','type'=>'file','label'=>array('text'=>'Subir Fotografía de QR y cintillo '.$this->Html->link('<i class="fa fa-question-circle-o"></i>','javascript:showQR()',array('style'=>'color:red','escape'=>false))), 'style'=>'width:100%','div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('fecha_compra',array('label'=>false,'required'=>'required','id'=>'datepicker','type'=>'text','placeholder'=>'Fecha de Compra','div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
        <?= $this->Form->input('tya',array('required'=>'required','type'=>'checkbox','label'=>'Acepto los términos y condiciones de la promoción'))?>
        **Todos los campos son obligatorios
        <?= $this->Form->submit('Enviar Formulario')?>
        
    </div>
    
</div>
