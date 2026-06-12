<div class="loyalty-container">
    <h2>Administración de Códigos (Vouchers)</h2>

    <div style="margin-bottom: 20px;">
        <?php echo $this->Form->create('Voucher', array('url' => array('action' => 'generate', 'admin' => true), 'class' => 'form-inline')); ?>
        <?php echo $this->Form->input('points_value', array('label' => 'Valor en Puntos:', 'class' => 'form-control', 'type' => 'number', 'required' => true)); ?>
        <?php echo $this->Form->button('Generar Nuevo Código', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->Form->end(); ?>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Valor (Puntos)</th>
                <th>Estado</th>
                <th>Usuario (Si fue usado)</th>
                <th>Fecha Generación</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vouchers as $voucher): ?>
            <tr>
                <td><?php echo h($voucher['Voucher']['id']); ?></td>
                <td><strong><?php echo h($voucher['Voucher']['code']); ?></strong></td>
                <td><?php echo h($voucher['Voucher']['points_value']); ?></td>
                <td>
                    <?php if ($voucher['Voucher']['is_used']): ?>
                        <span class="label label-danger">Usado</span>
                    <?php else: ?>
                        <span class="label label-success">Disponible</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $voucher['Voucher']['is_used'] ? h($voucher['User']['email'] ?? $voucher['Voucher']['used_by_user_id']) : '-'; ?></td>
                <td><?php echo h($voucher['Voucher']['created']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->Html->css('loyalty', array('inline' => false)); ?>
