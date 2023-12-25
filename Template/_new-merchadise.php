<?php
shuffle($product_shuffle);
//include header
sort($product_shuffle);
include ('./config/dbcon.php');
function getNew()
{
    global $con;
    $query = "SELECT * FROM products WHERE status='1'";
    return $query_run = mysqli_query($con, $query);
}

?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20px">New Merchandises</h4>
        <hr>
        <!--owl carousel-->
        <div class="owl-carousel owl-theme">
            <?php 
               $trendingProducts = getNew();
               $product_shuffle = $trendingProducts;
               if(mysqli_num_rows($trendingProducts)>0)
               {
               
                foreach($product_shuffle as $item) 
                {
                    ?>
                    <div class="item py-2">
                        <div class="product font-rale">
                        <a href="productview.php?product=<?= $item['slug'];?>"><img src="uploads/<?= $item['image'];?>" alt="<?= $item['name'];?>" class="img-fluid"></a>
                            <div class="text-center">
                                <h6 class = "font-rubik font-size-14px"><?= $item['name'];?></h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$<?= $item['selling_price'];?></span>
                                </div>
                                <div class="col">
                                    <button class="btn btn-warning form-control addToCartBtn " value="<?= $item['id'];?>" >Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
        <!--owl carousel-->
    </div>
</section>
