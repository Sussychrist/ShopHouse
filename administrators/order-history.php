<?php
// Include header
include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h4>Order History                 
                  <a href="orders.php" class="btn btn-primary float-end">Back</a>
                  </h4>
                </div>
                <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Tracking No</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $orders = getOrderHistory();
                            if(mysqli_num_rows($orders)>0) {
                                foreach($orders as $item) {
                            ?>
                                <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['name']; ?></td>
                                    <td><?= $item['tracking_no']; ?></td>
                                    
                                    <td>$<?= $item['total_price']; ?></td>
                                    <td><?= $item['created_at']; ?></td>
                                    <td>
                                        <a href="view-order.php?t=<?= $item['tracking_no']; ?>" class="btn btn-danger">View Details</a>
                                    </td>
                                </tr>
                            <?php
                                }
                            } else {
                            ?>
                                <tr>
                                    <td colspan="5" class="text-center">No orders yet.</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>       
    </div>
</div>
<?php
include('includes/footer.php');
?> 

