<?php
echo $this->Html->css(
	array(
		//'/admin/css/pages/tables',
	),
	array('inline'=>false)
);

echo $this->Html->script(
	array(
		'/admin/vendors/datatables/js/jquery.dataTables.min',
		'/admin/js/pluginjs/dataTables.tableTools',
		'/admin/vendors/datatables/js/dataTables.colReorder',
		'/admin/vendors/datatables/js/dataTables.bootstrap.min',
		'/admin/vendors/datatables/js/dataTables.buttons.min',
		'/admin/js/pluginjs/jquery.dataTables.min',
		'/admin/vendors/datatables/js/dataTables.responsive.min',
		'/admin/vendors/datatables/js/dataTables.rowReorder.min',
		'/admin/vendors/datatables/js/buttons.colVis.min',
		'/admin/vendors/datatables/js/buttons.html5.min',
		'/admin/vendors/datatables/js/buttons.bootstrap.min',
		'/admin/vendors/datatables/js/buttons.print.min',
		'/admin/vendors/datatables/js/dataTables.scroller.min',
	),
	array('inline'=>false)
);

$roles = array(
	1=>'Administrador',
	2=>'Participante'
);

?>

<!-- MODALS-->
<div class="modal fade" id="add_user" role="dialog" aria-labelledby="modalLabelsuccess">
	<div class="modal-dialog modal-lg" role="document">
		<?= $this->Form->create('User',array('url'=>array('action'=>'add','controller'=>'users')))?>
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h4 class="modal-title text-white" id="modalLabelsuccess">Registrar Nuevo Usuario</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<?= $this->Form->input('nombre',array('required'=>true,'type'=>'text','class'=>'form-control','div'=>'col-md-6','label'=>'Nombre Completo',));?>
					<?= $this->Form->input('username',array('required'=>true,'type'=>'email','class'=>'form-control ','div'=>'col-md-6','label'=>'Correo Electrónico',));?>
					<?= $this->Form->input('telefono',array('required'=>true,'type'=>'text','class'=>'form-control ','div'=>'col-md-6','label'=>'Teléfono',));?>
					<?= $this->Form->input('ocupacion',array('type'=>'text','class'=>'form-control ','div'=>'col-md-6','label'=>'Ocupación / Puesto',));?>
					<?= $this->Form->input('password',array('onchange'=>'javascript:validarPassword()','required'=>true,'type'=>'password','class'=>'form-control ','div'=>'col-md-6','label'=>'Contraseña',));?>
					<?= $this->Form->input('password_2',array('onchange'=>'javascript:validarPassword()','required'=>true,'type'=>'password','class'=>'form-control ','div'=>'col-md-6','label'=>'Confirmar Contraseña',));?>
					<div id="password_not_match" class="col-sm-12 text-warning" style="display: none">
						Las contraseñas no coinciden.
					</div>
					<?= $this->Form->input('rol',array('required'=>true,'type'=>'select','options'=>array(1=>'Administrador',2=>'Participante'),'class'=>'form-control','div'=>'col-md-6','label'=>'Rol de Usuario','empty'=>'Seleccionar un rol'));?>
					<?php
						if (isset($cuentas)){
							echo $this->Form->input('cuenta_id',array('required'=>true,'type'=>'select','options'=>$cuentas,'class'=>'form-control','div'=>'col-md-6','label'=>'Cuenta Titular','empty'=>'Seleccionar una cuenta'));
						}else{
							echo $this->Form->hidden('cuenta_id',array('value'=>$this->Session->read('Auth.User.cuenta_id')));
						}
					?>
					<?= $this->Form->input('activo',array('required'=>true,'type'=>'select','class'=>'form-control ','options'=>array(0=>'No',1=>'Si'),'div'=>'col-md-6','label'=>'Activar Cuenta',));?>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn  btn-danger" data-dismiss="modal">Cerrar</button>
				<?= $this->Form->submit('Guardar Usuario',array('class'=>'btn  btn-success','id'=>'submitButton'))?>
			</div>
		</div>
		<?= $this->Form->end()?>
	</div>
</div>

<div class="modal fade" id="edit_user" role="dialog" aria-labelledby="modalLabelsuccess">
	<div class="modal-dialog modal-lg" role="document">
		<?= $this->Form->create('User',array('url'=>array('action'=>'edit','controller'=>'users')))?>
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h4 class="modal-title text-white" id="modalLabelsuccess">Acutalizar información de Usuario</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<?= $this->Form->hidden('id',array('id'=>'id_e'))?>
					<?= $this->Form->input('nombre',array('id'=>'nombre_e','required'=>true,'type'=>'text','class'=>'form-control','div'=>'col-md-6','label'=>'Nombre Completo',));?>
					<?= $this->Form->input('username',array('id'=>'username_e','required'=>true,'type'=>'email','class'=>'form-control ','div'=>'col-md-6','label'=>'Correo Electrónico',));?>
					<?= $this->Form->input('telefono',array('id'=>'telefono_e','required'=>true,'type'=>'text','class'=>'form-control ','div'=>'col-md-6','label'=>'Teléfono',));?>
					<?= $this->Form->input('ocupacion',array('id'=>'ocupacion_e','type'=>'text','class'=>'form-control ','div'=>'col-md-6','label'=>'Ocupación / Puesto',));?>
					<?= $this->Form->input('rol',array('id'=>'rol_e','required'=>true,'type'=>'select','options'=>array(1=>'Administrador',2=>'Participante'),'class'=>'form-control','div'=>'col-md-6','label'=>'Rol de Usuario','empty'=>'Seleccionar un rol'));?>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn  btn-danger" data-dismiss="modal">Cerrar</button>
				<?= $this->Form->submit('Actualizar Usuario',array('class'=>'btn  btn-success','id'=>'submitButton_e'))?>
			</div>
		</div>
		<?= $this->Form->end()?>
	</div>
</div>

<div id="content" class="bg-container">
	<header class="head">
		<div class="main-bar">
			<div class="row no-gutters">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h4 class="nav_top_align">
						<i class="fa fa-users"></i>
						Usuarios
					</h4>
				</div>
			</div>
		</div>
	</header>
	<div class="outer">
		<div class="inner bg-container">
			<div class="row">
				<div class="col">
					<div class="card" style="width: 85vw;">
						<div class="card-header bg-white">
							Lista de Usuarios
							<div style="float: right">
								<?= $this->Html->link("<i class='fa fa-plus'></i>",'javascript:addUser()',array('escape'=>false))?>
							</div>
						</div>
						<div class="card-body card_block_top_align ">
								<table class="table table-striped table-bordered table-hover" id="sample_1">
									<thead>
									<tr>
										<th style="width:2%">Activo</th>
										<th style="width:15%">Nombre</th>
										<th style="width:15%">Correo Electrónico</th>
										<th style="width:10%">Teléfono</th>
										<?php if ($this->Session->read('Auth.User.cuenta_id')==1){?>
											<th>Cuenta</th>
										<?php } ?>
										<th style="width:10%">Rol</th>
										<th style="width:10%">Ocupación</th>
										<th style="width:10%" class="text-center">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ($users as $user): ?>
										<tr>
											<td class="text-center">
												<?php
													echo $this->Html->link('<i class ="fa fa-circle" style="color:silver"></i>','javascript:activar('.$user['User']['id'].',1)',array('id'=>'activar_'.$user['User']['id'],'escape'=>false,"data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>"Activar Usuario",'style'=>($user['User']['activo']==1 ? 'display:none' : '')));
													echo $this->Html->link('<i class ="fa fa-circle" style="color:green"></i>','javascript:activar('.$user['User']['id'].',0)',array('id'=>'desactivar_'.$user['User']['id'],'escape'=>false,"data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>"Desactivar Usuario",'style'=>($user['User']['activo']==0 ? 'display:none' : '')));
												?>
											</td>
											<td><?= $this->Html->link($user['User']['nombre'],array('controller'=>'users','action'=>'perfil',$user['User']['id']))?></td>
											<td><?= $user['User']['username']?></td>
											<td><?= $user['User']['telefono']?></td>
											<?php if ($this->Session->read('Auth.User.cuenta_id')==1){?>
												<td><?= $user['Cuenta']['nombre']?></td>
											<?php }?>
											<td><?= $roles[$user['User']['rol']]?></td>
											<td><?= $user['User']['ocupacion']?></td>
											<td class="text-center">
												<?= $this->Html->link("<i class='fa fa-edit'></i>",'javascript:editUser('.$user['User']['id'].')',array('escape'=>false,"data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>"Editar Información",))?>
												<?= $this->Form->postLink('<i class="fa fa-trash-o"></i>', array('controller'=>'users','action' => 'delete', $user['User']['id']), array("data-toggle"=>"tooltip", "data-placement"=>"top", "title"=>"Eliminar Usuario",'escape'=>false, 'confirm'=>'¿Deseas eliminar al usuario '.$user['User']['nombre'].' del registro. Todo su historial y avance será eliminado y no es posible rehacer esta acción'));?>
											</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function addUser(){
		$("#add_user").modal('show');
	}

	function validarPassword(){
		if (document.getElementById('UserPassword').value != document.getElementById('UserPassword2').value){
			document.getElementById('password_not_match').style.display = '';
			document.getElementById('submitButton').style.display = 'none';
		}else{
			document.getElementById('password_not_match').style.display = 'none';
			document.getElementById('submitButton').style.display = '';
		}
	}

	function activar(id,status){
		var dataString = 'id='+ id + "&activo="+status;
		$.ajax({
			type: "POST",
			url: '<?php echo Router::url(array("controller" => "users", "action" => "activar"), TRUE); ?>' ,
			data: dataString,
			cache: false,
			success: function(html) {
				if(html == 0){ //Desactivado
					document.getElementById('desactivar_'+id).style.display = 'none';
					document.getElementById('activar_'+id).style.display = '';
				}
				else{ //Activado
					document.getElementById('desactivar_'+id).style.display = '';
					document.getElementById('activar_'+id).style.display = 'none';
				}
			}
		});
	}

	function editUser(id){
		var dataString = 'id='+ id;
		$.ajax({
			type: "POST",
			url: '<?php echo Router::url(array("controller" => "users", "action" => "getUser"), TRUE); ?>' ,
			data: dataString,
			cache: false,
			success: function(html) {
					document.getElementById('nombre_e').value=html.User.nombre;
					document.getElementById('username_e').value=html.User.username;
					document.getElementById('telefono_e').value=html.User.telefono;
					document.getElementById('ocupacion_e').value=html.User.ocupacion;
					document.getElementById('rol_e').value=html.User.rol;
					document.getElementById('id_e').value=html.User.id;
			}
		});
		$("#edit_user").modal('show');
	}

</script>
<?php $this->Html->scriptStart(array('inline' => false));?>
	'use strict';
	$(document).ready(function() {
		TableAdvanced.init();
		$(".dataTables_scrollHeadInner .table").addClass("table-responsive");
		$("#sample_5_wrapper table").removeClass("table-responsive");
		$(".dataTables_wrapper .dt-buttons .btn").addClass('btn-secondary').removeClass('btn-default');
		$(".dataTables_wrapper").removeClass("form-inline");
	});

	var TableAdvanced = function() {
	// ===============table 1====================
	var initTable1 = function() {
	var table = $('#sample_1');
	/* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */
	/* Set tabletools buttons and button container */
	table.DataTable({
	dom: "Bflr<'table-responsive't><'row'<'col-md-5 col-12'i><'col-md-7 col-12'p>>",
	lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
	language: {
	sSearch: "Buscador",
	lengthMenu: '_MENU_ registros por página',
	info: 'Mostrando _TOTAL_ registro(s)',
	infoFiltered: " filtrado(s) de un total de _MAX_ en _PAGES_ páginas",
	emptyTable: "Sin información",
	paginate: {
	previous: 'Anterior',
	next: 'Siguiente'
	},
	},
	buttons: [
	{
	extend: 'csv',
	text: '<i class="fa  fa-file-excel-o"></i> Exportar',
	filename: 'Usuarios',
	class : 'excel',
	charset: 'utf-8',
	bom: true,
	},
	{
	extend: 'print',
	text: '<i class="fa  fa-print"></i> Imprimir',
	filename: 'Usuarios',
	},
	],
	});
	var tableWrapper = $('#sample_1_wrapper'); // datatable creates the table wrapper by adding with id {your_table_id}_wrapper
	tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
	}
	return {
	//main function to initiate the module
	init: function() {
	if (!jQuery().dataTable) {
	return;
	}
	initTable1();
	}
	};
	}();
<?php $this->Html->scriptEnd();?>
