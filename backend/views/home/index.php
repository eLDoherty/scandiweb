<section class="product container">
    <form action="<?php echo BASEURL; ?>/home/delete" method="POST" id="form-mass-delete">
        <div class="product-list__wrapper">
            <?php foreach( $data['data'] as $item ) : ?>
                <div class="card-product"> <!-- Content start -->         
                    <input type="checkbox" name="checkbox[]" class="delete-checkbox" value="<?php echo $item['sku']; ?>">               
                    <div class="inner-card">
                        <span class="sku"><?php echo $item['sku']; ?></span>
                        <h3 class="product-name"><?php echo $item['name']; ?></h3>
                        <span class="price">$<?php echo $item['price']; ?></span>
                        <?php if( $item['size']) : ?>
                        <p class="attribute">SIZE : <?php echo $item['size']; ?>MB</p>
                        <?php endif; ?>
                        <?php if( $item['weight']) : ?>
                        <p class="attribute">WEIGHT : <?php echo $item['weight']; ?>KG</p>
                        <?php endif; ?>
                        <?php if( $item['dimension']) : ?>
                        <p class="attribute">DIMENSION (CM) : <?php echo $item['dimension']; ?></p>
                        <?php endif; ?>
                    </div>
                </div> <!-- Content End -->
            <?php endforeach; ?>
        </div>
    </form>
</section>
<script src="<?php echo BASEURL; ?>/js/home.js"></script>
