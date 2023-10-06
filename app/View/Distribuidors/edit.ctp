<?= $this->Form->create('Distribuidor')?>
<?= $this->Form->hidden('id',array('value'=>$distribuidor['Distribuidor']['id']))?>
<?= $this->Form->input('nombre',array('value'=>$distribuidor['Distribuidor']['nombre']))?>
<?= $this->Form->input('direccion',array('value'=>$distribuidor['Distribuidor']['direccion']))?>
<?= $this->Form->input('colonia',array('value'=>$distribuidor['Distribuidor']['colonia']))?>
<?= $this->Form->input('estado',array('value'=>$distribuidor['Distribuidor']['estado']))?>
<?= $this->Form->input('ciudad',array('value'=>$distribuidor['Distribuidor']['ciudad']))?>
<?= $this->Form->submit('Guardar Cambios')?>
