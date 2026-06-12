<div class="loyalty-container">
    <h2>Mi Carrito de Canje</h2>

    <div class="cart-list">
        <?php if (empty($cartItems)): ?>
            <p>Tu carrito está vacío.</p>
            <a href="<?php echo $this->Html->url(array('action' => 'index')); ?>" class="btn btn-default">Volver a la tienda</a>
        <?php else: ?>
            <?php $total = 0; ?>
            <?php foreach ($cartItems as $item): ?>
                <?php 
                    $subtotal = $item['Cart']['quantity'] * $item['ProductsSale']['points_cost']; 
                    $total += $subtotal;
                ?>
                <div class="cart-item">
                    <div>
                        <strong><?php echo h($item['ProductsSale']['name']); ?></strong><br>
                        Cantidad: <?php echo h($item['Cart']['quantity']); ?>
                    </div>
                    <div>
                        <?php echo h($subtotal); ?> Puntos
                    </div>
                </div>
            <?php endforeach; ?>
            
            <div class="cart-total">
                Total a pagar: <?php echo h($total); ?> Puntos
            </div>

            <div class="text-right" style="margin-top: 20px;">
                <?php echo $this->Form->create('Store', array('url' => array('action' => 'checkout'))); ?>
                <a href="<?php echo $this->Html->url(array('action' => 'index')); ?>" class="btn btn-default">Seguir Comprando</a>
                <?php echo $this->Form->button('Finalizar Compra / Canjear Puntos', array('type' => 'submit', 'class' => 'btn btn-success btn-lg')); ?>
                <?php echo $this->Form->end(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php echo $this->Html->css('loyalty', array('inline' => false)); ?>
