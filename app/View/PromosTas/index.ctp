
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready( function () {
    $('#example').DataTable(
            {
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'excel',
                ]
                
            }
            );
} );
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<style>
    .header {
        background-color: red;
        color: white;
        /* line-height: 2em; */
        padding: 1em;
        text-transform: uppercase;
    }
    .body{
        font-size: 10px;
    }
    .mensaje_exito {
        background-color: green;
        color: white;
    }
    .mensaje_error {
        background-color: red;
        color: white;
    }
    .mensaje_aviso {
        background-color: orange;
        color: white;
    }
</style>
<div id="aceptar" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Procesar Redención de promoción
      </div>
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('aceptar').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->Form->create('PromosTa',array('url'=>array('controller'=>'promosTas','action'=>'procesar_promocion')))?>
                <?= $this->Form->hidden('id')?>
                <?= $this->Form->input('folio',array('disabled'=>'disabled','type'=>'text','required'=>'required','label'=>'Folio', 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
                <?= $this->Form->input('monto',array('min'=>'250','onkeypress'=>'return event.charCode >= 48 && event.charCode <= 57','type'=>'number','required'=>'required','label'=>'Monto Comprado', 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
                <?= $this->Form->submit('Procesar Carga de Saldo a Cliente')?>
                <?= $this->Form->end()?>
            </div>
        </div>
    </div>
  </div>
</div>
<div id="rechazar" class="w3-modal">
  <div class="w3-modal-content">
      <div class="header">
        Rechazar Redención de promoción
      </div>
      
      
    <div class="w3-container" style="padding:2em">
      <span onclick="document.getElementById('rechazar').style.display='none'" 
            class="w3-button w3-display-topright" style="color:white">&times;</span>
        <div class="row">
            <div class="col-lg-12">
                <?= $this->Form->create('PromosTa',array('url'=>array('controller'=>'promosTas','action'=>'rechazar_promocion')))?>
                <?= $this->Form->hidden('id_r')?>
                <?= $this->Form->input('folio_r',array('disabled'=>'disabled','type'=>'text','required'=>'required','label'=>'Folio', 'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
                <?php 
                    $motivos_rechazo = array(
                        2=>'Tienda no Participante',
                        3=>'Factura no válida',
                        4=>'Factura no legible',
                        5=>'Factura no contiene productos Denso',
                        6=>'Monto mínimo no superado',
                        8=>'No aplican a la promocion facturas de venta mostrador',
                        9=>'Factura de tienda no Participante'
                    );
                ?>
                <?= $this->Form->input('nota',array('type'=>'select','required'=>'required','label'=>'Motivo del rechazo','options'=>$motivos_rechazo,'div'=>'bd-input-2 form-group','class'=>'bd-form-input'))?>
                <?= $this->Form->submit('Rechazar Carga de Saldo a Cliente')?>
                <?= $this->Form->end()?>
            </div>
        </div>
    </div>
  </div>
</div>
<script>
    function aceptar(id){
        document.getElementById('PromosTaId').value = id;
        document.getElementById('PromosTaFolio').value = id;
        document.getElementById('aceptar').style.display='block';
    }
    function rechazar(id){
        document.getElementById('PromosTaIdR').value = id;
        document.getElementById('PromosTaFolioR').value = id;
        document.getElementById('rechazar').style.display='block';
    }
</script>
<?php $status = array(
    1=>'No Procesado',
    2=>'Aplicado',
    3=>'Rechazado Manualmente',
    4=>'Rechazado Automáticamente',
    5=>'Intento de aplicar fallido. Se debe volver a intentar',
    6=>'Recarga Realizada, No notificado por SMS'
    );?>
<div class="row" style="padding:1%" >
    <div class="col-md-12">
        <h4>LISTA DE PARTICIPANTES</h4>
        <?php echo $this->Session->flash(); ?>
        <table id="example" class="display" style="width:100%;">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Estado</th>
                    <th>Giro</th>
                    <th>Medio</th>
                    <th>Compra</th>
                    <th>Factura</th>
                    <th>QR</th>
                    <th>Crédito Aplicado</th>
                    <th>Fecha Aplicación</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($promos as $promo):?> 
                <tr>
                    <td><?= $promo['PromosTa']['id']?></td>
                    <td><?= $promo['PromosTa']['nombre']?></td>
                    <td><?= $promo['PromosTa']['email']?></td>
                    <td><?= $promo['PromosTa']['celular']?></td>
                    <td><?= $promo['PromosTa']['estado']?></td>
                    <td><?= $promo['PromosTa']['giro']?></td>
                    <td><?= $promo['PromosTa']['medio']?></td>
                    <td><?= $promo['PromosTa']['fecha_compra']?></td>
                    <td style="text-align:center"><?= $this->Html->link('<i class="fas fa-file-pdf"></i>',$promo['PromosTa']['factura'],array('escape'=>false,'style'=>'color:red'))?></td>
                    <td style="text-align:center"><?= $this->Html->link('<i class="fas fa-file-pdf"></i>',$promo['PromosTa']['cintillo'],array('escape'=>false,'style'=>'color:red'))?></td>
                    <td><?= "$".number_format($promo['PromosTa']['credito_redimido'],2)?></td>
                    <td><?= ($promo['PromosTa']['fecha_redimir']!="" ? date("d/M/Y", strtotime($promo['PromosTa']['fecha_redimir'])):"")?></td>
                    <td style="text-align:center"><?= $status[$promo['PromosTa']['status']]?></td>
                    <td style="text-align:center">
                        <?php
                            if ($promo['PromosTa']['status']==1 || $promo['PromosTa']['status']==5){
                                echo $this->Html->link('<i class="fas fa-dollar-sign fa-2x"></i> ',"javascript:aceptar('".$promo['PromosTa']['id']."')",array('escape'=>false,'style'=>'color:green'));
                                echo $this->Html->link(' <i class="fas fa-times fa-2x"></i>',"javascript:rechazar('".$promo['PromosTa']['id']."')",array('escape'=>false,'style'=>'color:red'));
                            }
                        ?>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>
