<div class="loyalty-container">
    <h2>Administración de Pedidos (Redenciones)</h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID Orden</th>
                <th>Usuario</th>
                <th>Puntos Totales</th>
                <th>Estado</th>
                <th>Fecha</th>
                <th>Líneas (Productos)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td>#<?php echo h($order['Order']['id']); ?></td>
                <td><?php echo h($order['User']['email']); ?></td>
                <td><?php echo h($order['Order']['total_points']); ?></td>
                <td><span class="badge"><?php echo h($order['Order']['status']); ?></span></td>
                <td><?php echo h($order['Order']['created']); ?></td>
                <td>
                    <ul>
                    <?php foreach ($order['OrdersProduct'] as $op): ?>
                        <li><?php echo h($op['ProductsSale']['name'] ?? 'Producto #'.$op['product_id']); ?> x<?php echo h($op['quantity']); ?> (<?php echo h($op['points_at_purchase']); ?> pts)</li>
                    <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->Html->css('loyalty', array('inline' => false)); ?>
