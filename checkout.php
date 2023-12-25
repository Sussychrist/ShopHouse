<?php
//include header
include ('./functions/userfunctions.php');
include('header.php');

include('authenticate.php');

$cartItems = getCartItems();

if(mysqli_num_rows($cartItems)==0){
    header ('Location: index.php');
}
?>

<div class="py-5">
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">                    
                    <div class="card-body shadow">
                    <!--  Checkout   -->
                        <form action="functions/placeorder.php" method="POST">
                            <div class="row">
                                    <div class="col-md-7">
                                    <h5 class="font-baloo font-size-20">Basic Details</h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                                <label class="fw-bold">Name</label>
                                                <input type="text" name="name" id ="name" required placeholder="Enter your full name" class="form-control">
                                                <small class="text-danger name"></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="fw-bold">Email</label>
                                                <input type="email" name="email" id ="email" required placeholder="Enter your Email" class="form-control">
                                                <small class="text-danger email"></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="fw-bold">Phone</label>
                                                <input type="number" name="phone" id ="phone" required placeholder="Enter your phone number" class="form-control">
                                                <small class="text-danger phone"></small>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="fw-bold">Pin Code</label>
                                                <input type="number" name="pincode" id ="pincode" required placeholder="Enter your pin code" class="form-control">
                                                <small class="text-danger pincode"></small>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <label class="fw-bold">Address</label>
                                                <textarea rows="5"  name="address" id ="address" required class="form-control" placeholder="Your address"></textarea>
                                                <small class="text-danger address"></small>
                                            </div>                         
                                    </div>                                               
                                    </div>
                                    <div class="col-md-5">
                                        <h5>Order Details</h5>
                                        <hr>
                                            <?php
                                            $items = getCartItems();
                                            $totalPrice = 0;
                                            foreach ($items as $citem) {
                                            ?>
                                                <!-- cart item -->
                                                <div class="row product_data py-3 mt-3">
                                                    <div class="col-md-2">
                                                        <img class="img-fluid" src="uploads/<?= $citem['image']; ?>" alt="Image" width= "60px">
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="font-baloo font-size-20"><?= $citem['name']; ?></label>
                                                        <!-- product rating -->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="font-baloo font-size-20">$<?= $citem['selling_price']; ?></label>
                                                        <!-- product rating -->
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="font-baloo font-size-20">x <?= $citem['prod_qty']; ?></label>
                                                        <!-- product rating -->
                                                    </div>
                                                </div>
                                                <!-- cart item -->
                                            <?php
                                            $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                                            }
                                            ?>
                                        <div class="sub-total border text-center mt-2">
                                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                                                        
                                        </div>
                                        <hr>
                                        <h5>Total Price : <span class = "float-end font-size-25 fw-bold text-success">$<?= $totalPrice ?></span></h5>
                                            <div class="">
                                                <input type="hidden" name="payment_mode" value="COD">
                                                <button type="submit" name ="placeOrderBtn" class = "btn btn-success text-light w-100" style="height: 45px">Corfirm And Place Order | COD</button>
                                            </div>
                                            <div id="paypal-button-container" class="mt-3"></div>      
                                    </div>
                                    <!-- subtotal section-->
                                </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Replace "test" with your own sandbox Business account app client ID -->
<script src="https://www.paypal.com/sdk/js?client-id=AQs6GCWsaOHYNRZ52bV8BgWIPcWtoo9hkoSCy5EtSQcPKPg0XCFR-RUqI14O3g72f3d3J-QqvuX5tbN4&currency=USD"></script>

<script>
   
      paypal.Buttons({
        
        onClick(){
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pincode = $('#pincode').val();
            var address = $('#address').val();
           if(name.length == 0) 
           {
              $('.name').text("This field is required");
              return false;
           }else{
              $('.name').text("");
           }
           if(email.length == 0) 
           {
              $('.email').text("This field is required");
              return false;
           }
           else{
              $('.email').text("");
           }
           if(phone.length == 0) 
           {
              $('.phone').text("This field is required");
              return false;
           }
           else{
              $('.phone').text("");
           }
           if(pincode.length == 0) 
           {
              $('.pincode').text("This field is required");
              return false;
           }
           else{
              $('.pincode').text("");
           }
           if(address.length == 0) 
           {
              $('.address').text("This field is required");
              return false;
           }
           else{
              $('.address').text("");
           }
           if(name.length == 0 || email.length == 0 || phone.length == 0 || pincode.length == 0 || address.length == 0){
              return false;
           }
        },
        // Order is created on the server and the order id is returned
        createOrder: (data, actions)=>{
          
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '<?=$totalPrice ?>'
                    }
                }]
            });
        },
        // Finalize the transaction on the server after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
             
            // Successful capture! For dev/demo purposes:
           // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pincode = $('#pincode').val();
            var address = $('#address').val();

            var data = {
                'name': name,
                'email': email,
                'phone' : phone,
                'pincode' : pincode,
                'address' : address,
                'payment_mode' : "Paid with PayPal",
                'payment_id' : transaction.id,
                'placeOrderBtn' : true,
            };
            $.ajax({
                method: "POST",
                url: "functions/placeorder.php",
                data: data,
                success: function (response)
                {
                    if(response == 201)
                    {
                        alertify.success("Order Placed Successfully!");
                        actions.redirect('my-order.php');
                        window.location.href = 'my-order.php';
                    }                 
                }
            });

          });
        }
    }).render('#paypal-button-container');
    </script>