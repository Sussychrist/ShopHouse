<?php
// Include header
include ('./functions/userfunctions.php');
include('header.php');

// Authenticate user
include('authenticate.php');
?>

<style>
body {
    background-image: url('https://tinhocmyduc.com/wp-content/uploads/2022/08/Tuye%CC%82%CC%89n-ta%CC%A3%CC%82p-ho%CC%9Bn-100-hi%CC%80nh-ne%CC%82%CC%80n-chill-da%CC%80nh-cho-die%CC%A3%CC%82n-thoa%CC%A3i-iPhone-va%CC%80-Android.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 100vh;
    overflow: hidden;
}

.container {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    padding: 30px;
    margin-top: 50px;
}

h1 {
    text-align: center;
    margin-bottom: 30px;
}

.table {
    margin-top: 20px;
}

.btn-primary {
    background-color: #6c757d;
    border-color: #6c757d;
}

.btn-primary:hover {
    background-color: #495057;
    border-color: #495057;
}

.text-center {
    text-align: center;
}
</style>
<div class="container">
    <h1 class ="mt-4">Your Orders</h1>
    <div class="table-responsive ">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Tracking No</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $orders = getOrders();
                if(mysqli_num_rows($orders)>0) {
                    foreach($orders as $item) {
                ?>
                    <tr>
                        <td><?= $item['id']; ?></td>
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

<?php
include ('under.php') ;
?>
