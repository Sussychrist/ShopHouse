<?php
//include header
 include ('./functions/userfunctions.php');
 include('header.php');
 
 if(isset($_GET['product']))
{
    $product_slug= $_GET['product'];
    $product_data = getSlugActive("products",$product_slug);
    $product = mysqli_fetch_array($product_data);

    if($product)
    {
        ?>
        <div class="py-5">
            <div class="container">
                <div class="col-md-12">
                        <div class="container product_data">
                            <div class="row">
                                <div class="col-sm-6 mt-5">
                                    <img class="img-fluid" src="uploads/<?= $product['image'];?>" alt="<?= $product['name'];?>">
                                    <div class="form-row pt-4 font-size-16 font-baloo">
                                        <div class="col">
                                            <button class="btn btn-danger form-control">Proceed to Buy</button>
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-warning form-control addToCartBtn " value="<?= $product['id'];?>" >Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 py-5">
                                    <h5 class="font-size-16 font-rubik"><?= $product['name'];?></h5>
                                    <hr>
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <a href="#" class="text-decoration-none text-dark font-rale font-size-14">  20,534 ratings | 1000+ answered questions</a>
                                    </div>
                                    <!---    product price       -->
                                    <table class="my-3">
                                        <tr class="font-rale font-size-14">
                                            <td>M.R.P:</td>
                                            <td><strike>$<?= $product['original_price'];?></strike></td>
                                        </tr>
                                        <tr class="font-rale font-size-14">
                                            <td>Deal Price:</td>
                                            <td class="font-size-20 text-danger">$<?= $product['selling_price'];?><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                        </tr>
                                        <tr class="font-rale font-size-14">
                                            <td>You Save:</td>
                                            <td><span class="font-size-16 text-danger">$<?= $product['original_price'] - $product['selling_price'];?></span></td>
                                        </tr>
                                    </table>
                                    <!---    !product price       -->

                                    <!--    #policy -->
                                    <div id="policy">
                                        <div class="d-flex">
                                            <div class="return text-center mr-5">
                                                <div class="font-size-20 my-2 color-second">
                                                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                                </div>
                                                <a href="#" class="text-decoration-none text-dark font-rale font-size-12">10 Days <br> Replacement</a>
                                            </div>
                                            <div class="return text-center mr-5">
                                                <div class="font-size-20 my-2 color-second">
                                                    <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                                </div>
                                                <a href="#" class="text-decoration-none text-dark font-rale font-size-12">Daily Tuition <br>Deliverd</a>
                                            </div>
                                            <div class="return text-center mr-5">
                                                <div class="font-size-20 my-2 color-second">
                                                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                                </div>
                                                <a href="#" class="text-decoration-none text-dark font-rale font-size-12">1 Year <br>Warranty</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--    !policy -->
                                    <hr>
                                    <!-- order-details -->
                                    <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                        <small>Delivery by : Mar 29  - Apr 1</small>
                                        <small>Sold by <a href="#">Daily Electronics </a>(4.5 out of 5 | 18,198 ratings)</small>
                                        <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                                    </div>
                                    <!-- !order-details -->
                                    <!-- product qty section -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- color -->
                                            <div class="color my-3">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="font-baloo">Color:</h6>
                                                <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                                <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                            </div>
                                            </div>
                                            <!-- !color -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- product qty section -->
                                            <div class="qty d-flex ">
                                            <h6 class="font-baloo">Storage</h6>
                                            <div class="px-4 d-flex font-rale align-items-center">
                                                <input type="text" class="qty_input border px-2 w-50 bg-light" placeholder="<?= $product['qty'];?>" disabled>
                                            </div>
                                            </div>
                                            <!-- !product qty section -->
                                        </div>
                                    </div>
                                    <!-- !product qty section -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group mb-3" style="width:130px">
                                                <button class="input-group-text decrement-btn"><i class="fas fa-angle-down"></i></button>
                                                <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled >
                                                <button class="input-group-text increment-btn"><i class="fas fa-angle-up"></i></button>
                                            </div>
                                        </div>                                   
                                    </div>                                    
                                    <!-- size -->
                                    <div class="size my-3">
                                        <h6 class="font-baloo">Size :</h6>
                                        <div class="d-flex justify-content-between w-75">
                                            <div class="font-rubik border p-2">
                                                <button class="btn p-0 font-size-14">Small</button>
                                            </div>
                                            <div class="font-rubik border p-2">
                                                <button class="btn p-0 font-size-14">Huge</button>
                                            </div>
                                            <div class="font-rubik border p-2">
                                                <button class="btn p-0 font-size-14">Giganotosaurus</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- !size -->
                                </div>
                                    <!-- product description -->
                                <div class="py-2">
                                    <h6 class="font-baloo font-size-20px">Product info</h6>
                                    <hr>
                                    <p class="font-rale font-size-14"><?= $product['small_description'];?></p>
                                </div>         
                                <div class="py-2">
                                    <h6 class="font-baloo font-size-20px">Product description</h6>
                                    <hr>
                                    <p class="font-rale font-size-14"><?= $product['description'];?></p>
                                </div>                               
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <?php
        include('./Template/_top-sale.php');
        ?>
      
        <?php
    }
    else
    {
        echo "Something went wrong";
    }

}
else
{
    echo "Something went wrong";
}
include ('footer.php');
?>