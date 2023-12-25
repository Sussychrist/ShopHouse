<?php
//include header
 include ('./functions/userfunctions.php');
 include('header.php');

?>

<div class="py-5">
    <div class="container">
            <div class="col-md-12">
            <div class="card mt-4">       
                        <div class="card-header d-flex justify-content-between">
                            <h4 class ="font-rubik">All Category</h4>
                            <a href="index.php" class="btn btn-danger text-white"> <i class="fa fa-reply"></i> Back</a>
                        </div>
            </div>
                <hr>
                    <div class="row">
                        <?php
                            $categories = getAllActive("categories");
                                if(mysqli_num_rows($categories)>0)
                                {
                                    foreach($categories as $item)
                                    {
                                        ?>                                           
                                            <div class="col-md-3 mb-2">
                                                <a href="products.php?category=<?= $item['slug'];?>" class ="text-decoration-none text-dark">
                                                    <div class="card shadow">
                                                        <div class="card-body">
                                                            <img src="uploads/<?= $item['image'];?>" alt="Category Image" class="w-100">
                                                            <h4 class="text-center font-baloo font-size-20px"><?= $item['name'];?></h4>
                                                        </div>
                                                    </div>
                                                </a>
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
    </div>
</div>
<?php
//include footer
include ('footer.php');
?>