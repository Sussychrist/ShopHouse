<?php
//include header
include ('./functions/userfunctions.php');
include('header.php');

include('authenticate.php');
?>
<style>
    body {
        background-image: url("https://tinhocmyduc.com/wp-content/uploads/2022/08/Tuye%CC%82%CC%89n-ta%CC%A3%CC%82p-ho%CC%9Bn-100-hi%CC%80nh-ne%CC%82%CC%80n-chill-da%CC%80nh-cho-die%CC%A3%CC%82n-thoa%CC%A3i-iPhone-va%CC%80-Android.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
   .container {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }
    
    .font-baloo {
    font-family: "Baloo Thambi 2", cursive;
    }

    .font-rale {
        font-family: "Raleway", cursive;
    }

    .font-rubik {
        font-family: "Rubik", cursive;
    }

    .font-size-12px {
        font-size: 12px;
    }

    .font-size-14px {
        font-size: 14px;
    }

    .font-size-16px {
        font-size: 16px;
    }

    .font-size-20px {
        font-size: 20px;
    }
    
    .text-success {
        color: #28a745 !important;
    }
    
    .text-danger {
        color: black !important;
    }
    
    .btn-warning {
        background-color: #f0ad4e;
        border-color: #f0ad4e;
    }
    
    .btn-warning:hover {
        background-color: #ec971f;
        border-color: #ec971f;
    }
    
    .product_data {
        background-color: #f6f6f6;
        border-radius: 5px;
        padding: 10px;
    }
    
    .qty {
        margin-top: 10px;
    }
</style>
<div class="py-5">
    <div class="container mt-3">
        <div class="col-md-12">                    
            <div class="container">
                <div class="container-fluid w-150 ">
                        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                        <!--  shopping cart items   -->
                        <?php
                        $items = getCartItems();
                        if(mysqli_num_rows($items)>0){
                        ?>
                            <div class="row">
                                <div class="col-sm-9">
                                    <div id = "mycart">
                                        <?php
                                            foreach ($items as $citem) {
                                            ?>
                                                <!-- cart item -->
                                                <div class="row border-top product_data py-3 mt-3">
                                                    <div class="col-sm-2">
                                                        <img class="img-fluid" src="uploads/<?= $citem['image']; ?>" alt="Image" style="height: 100px;">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <h5 class="font-baloo font-size-20"><?= $citem['name']; ?></h5>
                                                        <!-- product rating -->
                                                        <div class="d-flex">
                                                            <div class="rating text-warning font-size-12">
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="fas fa-star"></i></span>
                                                                <span><i class="far fa-star"></i></span>
                                                            </div>
                                                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                                        </div>
                                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                        <!-- your HTML code -->
                                                        <div class="qty d-flex pt-2 ">
                                                            <input type="hidden" class ="prodId" value="<?= $citem['prod_id']; ?>">
                                                            <div class="input-group mb-3" style="width:130px">
                                                                <button class="input-group-text decrement-btn updateQty" style="height:38px"><i class="fas fa-angle-down"></i></button>
                                                                <input type="text" class="form-control text-center input-qty bg-white" value="<?= $citem['prod_qty'];?>" disabled >
                                                                <button class="input-group-text increment-btn updateQty"  style="height:38px"><i class="fas fa-angle-up"></i></button>
                                                            </div>
                                                            <form>    
                                                                <button class="btn btn-danger font-baloo text-light ml-2 border-right deleteItem" value="<?= $citem['cid']; ?>">Delete</button>
                                                            </form>
                                                        </div>
                                                        <!-- !product qty -->

                                                    </div>
                                                    <div class="col-sm-2 text-right">
                                                        <div class="font-size-20 text-danger font-baloo">
                                                            $<span><?php echo $citem['selling_price'] * $citem['prod_qty']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- cart item -->
                                            <?php
                                            }
                                            
                                        ?>  
                                    </div>                           
                                </div>
                                <!-- subtotal section-->
                                <!-- subtotal section-->
                                <div class="col-sm-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                        <div class="border-top py-4">
                                            <?php
                                                $subTotal = array(); // create an array to hold subtotals
                                                foreach ($items as $citem) {
                                                    $subTotal[] = $citem['selling_price'] * $citem['prod_qty']; // calculate subtotal for each item and add to the array
                                                }
                                            ?>
                                            <h5 class="font-baloo font-size-20">Subtotal (<?php echo count($subTotal); ?> items):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo array_sum($subTotal); ?></span> </span> </h5>
                                            <div class="float-end">
                                                <a href="checkout.php" class="btn btn-warning mt-3">Proceed to Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                        else
                        {
                        ?>
                        <div class="col-sm-9">
                            <img class="img-fluid" src="./assets/confusing-woman-due-to-empty-cart-4558760-3780056.png" alt="Image">
                        </div>
                        <?php
                        }
                        ?>
            </div>
        </div>
    </div>
</div>
<div class="mt-10">
<br>
</div>
<?php
include('./Template/_top-sale.php');
?>
<br>
<br>
    <div class="container bg-dark mt-10" >
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik text-white font-size-20px">ShopHouse</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, ad.</p>
            </div>
            <div class="col-lg-3 col-12">          
                <h4 class ="font-rubik text-white font-size-20px">Address</i></h4>
                 <p class="font-rale font-size-14px text-white-50 pb-1">
                    #24, Ground Floor,<br>
                    2nd street xyz layout,<br>
                    Bac Giang, Viet Nam.
                 </p>
                 <a href="tel:+919879879876" class="text-white-50 pb-1 text-decoration-none"><i class="fa fa-phone"></i>+ 09 77347343764</a><br>
                 <a href="mailto:xyz@gmail.com" class="text-white-50 pb-1 text-decoration-none"><i class="fa fa-envelope"></i> xyz@gmail.com</a>
            </div>
            <div class="col-lg col-12">
                <h4 class="font-rubik text-white font-size-20px">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="carts.php" class="font-rale font-size-14px text-white-50 pb-1">Cart</a>
                    <a href="my-order.php" class="font-rale font-size-14px text-white-50 pb-1">Order history</a>
                    <a href="view-order.php" class="font-rale font-size-14px text-white-50 pb-1">Delivery information</a>
                    <a href="#" class="font-rale font-size-14px text-white-50 pb-1">Privacy policy</a>
                </div>
            </div>
            <div class="col-lg-4 col-12">          
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118829.82244517973!2d105.88474071640628!3d21.45156159999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313517a745114859%3A0x72186b8d58aab22d!2zxJDhu4FuIFThu6sgTG9uZyDEkGnhu4duIC0gQ8O0bmcgxJDhu5NuZyBU4bupIFBo4bun!5e0!3m2!1svi!2s!4v1680924953963!5m2!1svi!2s" class="w-100"  height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </div>

<!--Start footer-->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="./assets/js/jquery-3.6.4.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Owl-carousel-Javascript-CDN-->
<script src="jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--isoplugin-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--Javasript-->


<script src="./assets/js/custom.js"></script>
<!--Custom Javasript-->
<script src="index.js"></script>

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    alertify.set('notifier','position', 'top-right');
    <?php 
    if(isset($_SESSION['message'])) 
    {
      ?>        
        alertify.success('<?= $_SESSION['message'] ?>');
      <?php
        unset($_SESSION['message']);
    } 
   ?>
  </script>