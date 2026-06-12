<div class="loyalty-container">
    <h2>Catálogo de Puntos</h2>
    
    <div class="text-right" style="margin-bottom: 20px;">
        <a href="<?php echo $this->Html->url(array('controller' => 'store', 'action' => 'cart')); ?>" class="btn btn-warning">
            Ver Mi Carrito
        </a>
    </div>

    <?php if (empty($products)): ?>
        <p>No hay productos disponibles por el momento.</p>
    <?php else: ?>
        <div class="products-grid">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="<?php echo $product['ProductsSale']['image_url'] ? h($product['ProductsSale']['image_url']) : 'https://via.placeholder.com/300x200?text=No+Image'; ?>" class="product-image" alt="Product">
                    <div class="product-info">
                        <h4 class="product-title"><?php echo h($product['ProductsSale']['name']); ?></h4>
                        <p><?php echo h($product['ProductsSale']['description']); ?></p>
                        <div class="product-cost">
                            <?php echo h($product['ProductsSale']['points_cost']); ?> Puntos
                        </div>
                        
                        <?php echo $this->Form->create('Cart', array('url' => array('action' => 'add_to_cart'))); ?>
                        <?php echo $this->Form->hidden('product_id', array('value' => $product['ProductsSale']['id'])); ?>
                        <?php echo $this->Form->input('quantity', array('type' => 'number', 'value' => 1, 'min' => 1, 'class' => 'form-control', 'label' => 'Cantidad', 'style' => 'width: 80px; margin-bottom: 10px; display: inline-block;')); ?>
                        <?php echo $this->Form->button('Agregar al Carrito', array('type' => 'submit', 'class' => 'btn btn-primary btn-add-cart')); ?>
                        <?php echo $this->Form->end(); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?php echo $this->Html->css('loyalty', array('inline' => false)); ?>
