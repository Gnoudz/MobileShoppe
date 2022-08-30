 <?php
    $product_shuffle = $product->getData();
    shuffle($product_shuffle);
 ?>
 <!-- Top sale-->
 <section id="top-sale">
     <div class="container py-5">
         <h4 class="font-rubik font-size-20">Top Sale</h4>
         <hr>
         <!-- Owl carousel-->
         <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
             <div class="item py-2">
                 <div class="product font-rale">
                     <a href=""><img src="<?php echo $item['item_image'];?>" alt="product<?php echo $item['item_id'];?>" class="img-fluid"></a>
                     <div class="text-center">
                         <h6><?php echo $item['item_name']??"Unknown"; ?></h6>
                         <div class="rating text-warning font-size-12">
                             <span><i class="fa-solid fa-star"></i></span>
                             <span><i class="fa-solid fa-star"></i></span>
                             <span><i class="fa-solid fa-star"></i></span>
                             <span><i class="fa-solid fa-star"></i></span>
                             <span><i class="fa-regular fa-star"></i></span>
                         </div>
                         <div class="price py-2">
                             <span>$<?php echo $item['item_price']?></span>
                         </div>
                         <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                     </div>
                 </div>
             </div>

             <?php }?>
         </div>
         <!-- Owl carousel-->
     </div>
 </section>
 <!-- Top sale-->