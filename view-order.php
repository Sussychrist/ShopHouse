<?php
// Include header
include ('./functions/userfunctions.php');
include('header.php');

// Authenticate user
include('authenticate.php');

if(isset($_GET['t'])){
    $tracking_no = $_GET['t'];
    
    $orderData = checkTrackingNoValid($tracking_no);
    if(mysqli_num_rows($orderData) < 0)
    {
        ?>
            <h4>NO ORDER</h4>
        <?php
        die();
    }
}
else
{
    ?> 
    <h4>Something went wrong</h4>
    <?php
    die();
}

$data = mysqli_fetch_array($orderData);
?>
<div class="py-5">
    <div class="container">
        <div class="">
            <div class="row">           
                <div class="col-md-12">
                    <div class="card mt-5">
                        <div class="card-header d-flex justify-content-between">
                            <h4 class ="">View Order</h4>
                            <a href="my-order.php" class="btn btn-danger text-white"> <i class="fa fa-reply"></i> Back</a>
                        </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="mb-3">Delivery Details</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <h6 class="font-weight-bold">Name</h6>
                                                <div class="border p-2">
                                                    <?= $data['name']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="font-weight-bold">Email</h6>
                                                <div class="border p-2">
                                                    <?= $data['email']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="font-weight-bold">Phone</h6>
                                                <div class="border p-2">
                                                    <?= $data['phone']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="font-weight-bold">Tracking No.</h6>
                                                <div class="border p-2">
                                                    <?= $data['tracking_no']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="font-weight-bold">Address</h6>
                                                <div class="border p-2">
                                                    <?= $data['address']; ?>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <h6 class="font-weight-bold">Pin Code</h6>
                                                <div class="border p-2">
                                                    <?= $data['pincode']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Order Details</h4>
                                    
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $userId = $_SESSION['auth_user']['user_id'];
                                                    $order_query = "SELECT o.id as oid, o.tracking_no, o.user_id, oi.*, oi.qty as orderqty, p.* FROM orders o, order_items oi, products p WHERE o.user_id = '$userId' AND oi.order_id = o.id AND p.id= oi.prod_id AND o.tracking_no = '$tracking_no'";
                                                    $order_query_run = mysqli_query($con, $order_query);
                                                    if(mysqli_num_rows($order_query_run)>0) {
                                                        foreach ($order_query_run as $item) {
                                                            ?>
                                                            <tr>
                                                                <td class="align-middle">
                                                                    <img src="uploads/<?= $item['image']; ?>" width="50px" height="50px" alt="<?= $item['name']; ?> " class="img-fluid">
                                                                    <label class="font-baloo font-size-20"><?= $item['name']; ?></label>
                                                                </td>
                                                                <td class="align-middle">
                                                                    <label class="font-baloo font-size-20">$<?= $item['price']; ?></label>
                                                                </td>
                                                                <td class="align-middle">
                                                                    <label class="font-baloo font-size-20">x <?= $item['orderqty']; ?></label>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <h5>Total Price: <span class="float-end font-baloo font-size-20 text-success">$<?= $data['total_price'] ?></span></h5>
                                        <hr>
                                        <div>
                                            <label class="font-rubik font-size-16 font-weight-bold">Payment Mode:</label>
                                            <div class="border p-2 mb-3"><?= $data['payment_mode']; ?></div>
                                        </div>
                                        <div>
                                            <label class="font-rubik font-size-16 font-weight-bold">Status:</label>
                                            <div class="mb-3">
                                                <form action="./functions/placeorder.php" method="POST">
                                                <input type="hidden" name="tracking_no" value="<?= $data['tracking_no']; ?>">
                                                    <select name="order_status" disabled class="p-2 w-100">
                                                        <option value="0" <?= $data['status'] == 0?"selected":"" ?>> Under Process</option>
                                                        <option value="1" <?= $data['status'] == 1?"selected":"" ?>>Completed</option>
                                                        <option value="2" <?= $data['status'] == 2?"selected":"" ?>>Cancelled</option>
                                                    </select>
                                                    <button type="submit" name ="cancel_order_btn" class="btn btn-warning mt-3 float-end">Cancel Order</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include('footer.php');
?>

