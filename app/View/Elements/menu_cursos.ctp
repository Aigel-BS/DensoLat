<?php if (!isset($menu_opt)){?>
<ul id="menu" style="font-family: 'Denso'">
	<li style="color: #1e1e1e;padding: 1% 5%;"><small><i>Bienvenido <?= $this->Session->read('Auth.User.nombre')?></i></small></li>
	<li>
		<?= $this->Html->link('<i class="fa fa-book"></i>Mis Cursos',array('controller'=>'cursos','action'=>'mis_cursos'),array('escape'=>false))?>
	</li>
	<li>
		<?= $this->Html->link('<i class="fa fa-certificate "></i>Mis Diplomas',array('controller'=>'users','action'=>'mis_diplomas'),array('escape'=>false))?>
	</li>
	<li>
		<?= $this->Html->link('<i class="fa fa-user"></i>Mi Perfil','#',array('escape'=>false))?>
	</li>
	<?php
		if($this->Session->read('Auth.User.rol') == 1 ){
    ?>
	<li>
		<?= $this->Html->link('<i class="fa fa-users"></i>Usuarios',array('controller'=>'users','action'=>'index'),array('escape'=>false))?>
	</li>
	<?php } ?>
	<li>
		<?= $this->Html->link('<i class="fa fa-sign-out"></i>Cerrar Sesión',array('controller'=>'users','action'=>'logout'),array('escape'=>false))?>
	</li>
</ul>
<?php
    }else{
?>
    <ul id="menu" style="font-family: 'Denso'">
        <li style="color: #1e1e1e;padding: 1% 5%;"><small><i>Bienvenido <?= $this->Session->read('Auth.User.nombre')?></i></small></li>
        <?php
            if ($this->Session->read('Auth.User.distribuidor_id')==999999999){
                foreach ($distribuidores as $key=>$distribuidor){
            ?>
                <li>
                    <?= $this->Html->link('<i class="fa fa-arrow-right"></i>'.$distribuidor,array('controller'=>'ventas','action'=>'dashboard',$key),array('escape'=>false))?>
                </li>
                <?php if ($key == 179){?>
                        <li>
                            <?= $this->Html->link('<i class="fa fa-dollar "></i>Bujías Estandar',array('controller'=>'ventas','action'=>'dashboard',$key,'estandar'),array('escape'=>false))?>
                        </li>
                        <li>
                            <?= $this->Html->link('<i class="fa fa-dollar "></i>Bujías Iridium',array('controller'=>'ventas','action'=>'dashboard',$key,'iridium'),array('escape'=>false))?>
                        </li>
                <?php }?>
        <?php
                }
            }else if($this->Session->read('Auth.User.distribuidor_id')==179){
        ?>
            <li>
                <?= $this->Html->link('<i class="fa fa-dollar "></i>Bujías Estandar',array('controller'=>'ventas','action'=>'dashboard',$this->Session->read('Auth.User.distribuidor_id'),'estandar'),array('escape'=>false))?>
            </li>
            <li>
                <?= $this->Html->link('<i class="fa fa-dollar "></i>Bujías Iridium',array('controller'=>'ventas','action'=>'dashboard',$this->Session->read('Auth.User.distribuidor_id'),'iridium'),array('escape'=>false))?>
            </li>
        <?php
                }
            else{
        ?>
            <li>
                <?= $this->Html->link('<i class="fa fa-dollar "></i>Concurso',array('controller'=>'ventas','action'=>'dashboard'),array('escape'=>false))?>
            </li>
        <?php } ?>

        <li>
            <?= $this->Html->link('<i class="fa fa-sign-out"></i>Cerrar Sesión',array('controller'=>'users','action'=>'logout'),array('escape'=>false))?>
        </li>
    </ul>
<?php
}
?>
