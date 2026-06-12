<div class="loyalty-container" style="max-width: 600px; margin: 0 auto;">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Registro al Programa de Lealtad</h3>
        </div>
        <div class="panel-body">
            <?php echo $this->Form->create('User', array('url' => array('action' => 'register'))); ?>
            
            <div class="form-group">
                <?php echo $this->Form->input('full_name', array('label' => 'Nombre Completo', 'class' => 'form-control', 'required' => true)); ?>
            </div>

            <div class="form-group">
                <?php echo $this->Form->input('email', array('label' => 'Correo Electrónico', 'class' => 'form-control', 'type' => 'email', 'required' => true)); ?>
            </div>
            
            <div class="form-group">
                <?php echo $this->Form->input('password', array('label' => 'Contraseña', 'class' => 'form-control', 'type' => 'password', 'required' => true)); ?>
            </div>
            
            <div class="form-group">
                <?php echo $this->Form->input('phone', array('label' => 'Teléfono', 'class' => 'form-control')); ?>
            </div>
            
            <div class="form-group">
                <?php echo $this->Form->input('business_type', array(
                    'label' => 'Tipo de Negocio', 
                    'class' => 'form-control',
                    'options' => array(
                        'taller' => 'Taller',
                        'instalador' => 'Instalador',
                        'cliente_final' => 'Cliente Final'
                    )
                )); ?>
            </div>
            
            <div class="form-group">
                <?php echo $this->Form->input('address', array('label' => 'Dirección', 'class' => 'form-control')); ?>
            </div>
            
            <div class="row">
                <div class="col-md-4 form-group">
                    <?php echo $this->Form->input('city', array('label' => 'Ciudad', 'class' => 'form-control')); ?>
                </div>
                <div class="col-md-4 form-group">
                    <?php echo $this->Form->input('state', array('label' => 'Estado', 'class' => 'form-control')); ?>
                </div>
                <div class="col-md-4 form-group">
                    <?php echo $this->Form->input('country', array('label' => 'País', 'class' => 'form-control')); ?>
                </div>
            </div>

            <br>
            <?php echo $this->Form->button('Registrarme', array('type' => 'submit', 'class' => 'btn btn-primary btn-block btn-lg')); ?>
            
            <?php echo $this->Form->end(); ?>
        </div>
        <div class="panel-footer text-center">
            ¿Ya tienes cuenta? <a href="<?php echo $this->Html->url(array('action' => 'login')); ?>">Inicia Sesión</a>
        </div>
    </div>
</div>

<?php echo $this->Html->css('loyalty', array('inline' => false)); ?>
