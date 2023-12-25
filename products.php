<?php
//include header
include ('./functions/userfunctions.php');
include('header.php');

if(isset($_GET['category']))
{
    $category_slug = $_GET['category'];
    $category_data = getSlugActive("categories",$category_slug);
    $category = mysqli_fetch_array($category_data);

    if($category)
    {
        $cid = $category['id'];
?>

<div class="py-5">
    <div class="container">
        <div class="col-md-12">
            <div class="card mt-4">       
                        <div class="card-header d-flex justify-content-between">
                            <h4 class ="font-rubik"><?= $category['name'];?></h4>
                            <a href="categories.php" class="btn btn-danger text-white"> <i class="fa fa-reply"></i> Back</a>
                        </div>
            </div>
            <hr>
            <div class="container py-5">
                <div class="row"> 
                    <?php
                    $products = getProductByCategory($cid);
                    $count = 0;
                    if(mysqli_num_rows($products) > 0) {
                        foreach($products as $item) {
                          
                            ?> 
                            <div class="grid-item border mr-2 mt-2" >
                                <div class="item product_data py-2"  style="width: 200px;">
                                    <div class="product font-rale ">
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
                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <div class="col">
                                                <button class="btn btn-warning form-control addToCartBtn " value="<?= $item['id'] ?? '1'?>" >Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    else {
                        echo "No records found!";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    //include footer
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
