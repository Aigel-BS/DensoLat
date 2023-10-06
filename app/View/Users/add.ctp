<?= $this->Form->create('User') ?>
<?php echo $this->Form->input('nombre'); ?>
<?php echo $this->Form->input('username'); ?>
<?php echo $this->Form->input('password',array('type'=>'password')); ?>
<?php echo $this->Form->submit(__('Guardar')); ?>
<?= $this->Form->end() ?>
