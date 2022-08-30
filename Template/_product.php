<?php
    $item_id = $_GET['item_id'];
    foreach ($product->getData() as $item):
        if($item['item_id'] == $item_id):
?>
<!-- product-->
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $item['item_image'] ?>" alt="product<?php echo $item['item_id'] ?>" class="img-fluid" style="width:540px">
                <div class="form-row pt-4 font-baloo font-size-16">
                    <div class="col">
                        <button type="button" class="btn btn-danger form-control">Proceed to Buy</button>

                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-warning form-control">Add to cart</button>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-20"><?php echo $item['item_name'] ?></h5>
                <small>by <?php echo $item['item_brand'] ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-regular fa-star"></i></span>
                    </div>
                    <a href="#" class="font-rale font-size-14 px-2">20,534 ratings | 1000+ answered
                        questions</a>
                </div>
                <hr class="m-0">
                <!-- product price-->
                <table class="my-3">
                    <tbody>
                        <tr class="font-rale font-size-14">
                            <td>M.R.P:</td>
                            <td>
                                <strike>$300</strike>
                            </td>
                        </tr>

                        <tr class="font-rale font-size-14">
                            <td>Deal Price: </td>
                            <td class="font-size-20 text-danger">
                                $<?php echo $item['item_price'] ?>
                                <small class="text-dark font-size-12">Inclusive of all taxes</small>
                            </td>
                        </tr>

                        <tr class="font-rale font-size-14">
                            <td>You Save:</td>
                            <td class="font-size-20 text-danger">
                                $<?php echo $item['item_price'] ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- !product price-->

                <!-- policy-->
                <div class="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second my-2">
                                <span class="border rounded-pill p-3 fa-solid fa-retweet"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">
                                10 Days
                                <br>
                                Replacement
                            </a>
                        </div>

                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second my-2">
                                <span class="border rounded-pill p-3 fa-solid fa-truck"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">
                                Daily Tuition
                                <br>
                                Deliverd
                            </a>
                        </div>

                        <div class="return text-center mr-5">
                            <div class="font-size-20 color-second my-2">
                                <span class="border rounded-pill p-3 fa-solid fa-check-double"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">
                                1 Year
                                <br>
                                Warranty
                            </a>
                        </div>
                    </div>
                </div>
                <!-- !policy-->
                <hr>
                <!-- Order details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Mar 29 - Apr 1</small>
                    <small>Sold by <a href="#">Daily Electronics</a> (4.5 out of 5 | 18,198 ratings)</small>
                    <small><i class="fa-solid fa-location-dot"></i> Deliver to Customer - 424201</small>
                </div>
                <!-- !Order details -->

                <div class="row">
                    <div class="col-6">
                        <!-- Colors -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color</h6>
                                <div class="rounded-circle p-2 color-yellow-bg">
                                    <button class="btn font-size-14"></button>
                                </div>

                                <div class="rounded-circle p-2 color-primary-bg">
                                    <button class="btn font-size-14"></button>
                                </div>

                                <div class="rounded-circle p-2 color-second-bg">
                                    <button class="btn font-size-14"></button>
                                </div>

                            </div>

                        </div>
                        <!-- !Colors -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section-->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button data-id="pro1" class="qty-up border bg-light"><i class="fa-solid fa-angle-up"></i></button>
                                <input data-id="pro1" type="text" class="qty-input border bg-light px-2 w-50" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i class="fa-solid fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- product qty section-->
                    </div>
                </div>

                <!-- Size-->
                <div class="size my-3">
                    <h6 class="font-baloo">Size</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="border font-rubik p-2"><button class="btn p-0 font-size-14">4GB RAM</button></div>
                        <div class="border font-rubik p-2"><button class="btn p-0 font-size-14">6GB RAM</button></div>
                        <div class="border font-rubik p-2"><button class="btn p-0 font-size-14">8GB RAM</button></div>
                    </div>
                </div>
                <!-- Size-->

            </div>

            <div class="col-12">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a aliquam vitae vel?</p>
            </div>
        </div>
    </div>
</section>
<!-- !product-->

<?php
        endif;
    endforeach;
?>