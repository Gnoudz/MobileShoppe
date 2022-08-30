<?php 
    shuffle($product_shuffle);
?>
<!-- New phones -->
<section id="new-phones">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">New phones</h4>
        <hr>
        <!-- Owl carousel-->
        <div class="owl-carousel owl-theme">
            <div class="item py-2 bg-light">
                <div class="product font-rale">
                    <a href=""><img src="./assets/products/8.png" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Samsung Galaxy</h6>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                        <div class="price py-2">
                            <span>$521</span>
                        </div>
                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                    </div>
                </div>
            </div>

            <?php array_map(function ($item) { ?>
                    <div class="py-2 item bg-light">
                        <div class="product font-rale">
                            <a href=""><img src="<?php echo $item['item_image'] ?>" alt="product<?php echo $item['item_id'] ?>" class="img-fluid"></a>
                            <div class="text-center">
                                <h6><?php echo $item['item_name'] ?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-regular fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?php echo $item['item_price'] ?></span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
            <?php }, $product_shuffle); ?>

        </div>
        <!-- Owl carousel-->
    </div>
</section>
<!-- New phones -->