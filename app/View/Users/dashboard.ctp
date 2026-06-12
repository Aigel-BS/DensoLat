<div class="loyalty-container">
    <h2>Mi Dashboard de Lealtad</h2>
    
    <div class="alert alert-info">
        <strong>Puntos Disponibles: </strong> <span class="text-points" style="font-size: 1.5em;"><?php echo h($user['User']['point_balance']); ?> pkt</span>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Redimir Código</div>
                <div class="panel-body">
                    <?php echo $this->Form->create('Voucher', array('url' => array('controller' => 'vouchers', 'action' => 'redeem_code'))); ?>
                    <?php echo $this->Form->input('code', array('label' => 'Ingresa tu código único', 'class' => 'form-control', 'required' => true)); ?>
                    <br>
                    <?php echo $this->Form->end(array('label' => 'Redimir Código', 'class' => 'btn btn-primary')); ?>
                </div>
            </div>
            <a href="<?php echo $this->Html->url(array('controller' => 'store', 'action' => 'index')); ?>" class="btn btn-success btn-lg btn-block" style="margin-bottom: 20px;">
                Ir a la Tienda de Puntos
            </a>
        </div>
        
        <div class="col-md-6">
            <h3>Historial de Movimientos</h3>
            <?php if (!empty($logs)): ?>
                <?php foreach ($logs as $log): ?>
                    <div class="log-card">
                        <div>
                            <strong><?php echo h($log['PointLog']['description']); ?></strong><br>
                            <span class="log-date"><?php echo $this->Time->format('d/m/Y H:i', $log['PointLog']['created']); ?></span>
                        </div>
                        <div class="text-points" style="color: <?php echo $log['PointLog']['amount'] > 0 ? '#28a745' : '#dc3545'; ?>">
                            <?php echo $log['PointLog']['amount'] > 0 ? '+' : ''; ?><?php echo h($log['PointLog']['amount']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No tienes movimientos aún.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php echo $this->Html->css('loyalty', array('inline' => false)); ?>
