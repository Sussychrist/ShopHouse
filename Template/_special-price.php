<?php
 include ('./functions/special.php');
 
?>

<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20px">Special Price</h4>
        <hr>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <?php
            $categories = getAllCategories();
            foreach($categories as $category) {
                printf('<button class="btn" data-filter=".%s">%s</button>', $category['slug'], $category['name']);
            }
            ?>
        </div>
        <div class="grid">
            <?php
                $products = getAllActive("products");
                if(mysqli_num_rows($products)>0)
                {
                    foreach($products as $item)
                    {
                        $categories = getAllCategories();
                        $categoryClass = "";
                        foreach($categories as $category) {
                            if ($category['id'] == $item['category_id']) {
                                $categoryClass = $category['slug'];
                                break;
                            }
                        }
                        ?>                                           
                    <div class="grid-item border <?= $categoryClass; ?>">
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
                                            <button class="btn btn-warning form-control addToCartBtn " value="<?= $item['id'];?>" >Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                else
                {
                    echo"No records found!";
                }
            ?>
        </div>
    </div>
</section>

