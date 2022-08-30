<?php
shuffle($product_shuffle);

$brand = array_map(function ($item) {
    return $item['item_brand'];
}, $product_shuffle);

$brand_unique = array_unique($brand);
sort($brand_unique);
?>

<!-- Special Price-->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filter" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-check" data-filter="*">All Brand</button>
            <?php array_map(function ($item) {
                printf('<button class="btn is-check" data-filter=".%s">%s</button>', $item, $item);
            }, $brand_unique) ?>
        </div>
        <div class="grid">
            <?php array_map(function ($item) { ?>
                <div class="grid-item <?php echo $item['item_brand'] ?> border">
                    <div class="py-2 item" style="width: 200px">
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
                </div>
            <?php }, $product_shuffle); ?>
        </div>
    </div>
</section>
<!-- Special Price-->