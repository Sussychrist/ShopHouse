
<?php
session_start();
if(isset($_SESSION['auth']))
{
    $_SESSION['message'] = "You are already logged in";
    header('Location: index.php');
    exit();
}
include('header.php');
?>
<head>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
<link id="pagestyle" href="../admin/administrators/assets/CSS/material-dashboard.min.css" rel="stylesheet" />
</head>
<style>
body {
    background-image: url('https://tinhocmyduc.com/wp-content/uploads/2022/08/Tuye%CC%82%CC%89n-ta%CC%A3%CC%82p-ho%CC%9Bn-100-hi%CC%80nh-ne%CC%82%CC%80n-chill-da%CC%80nh-cho-die%CC%A3%CC%82n-thoa%CC%A3i-iPhone-va%CC%80-Android.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    height: 100vh;
    overflow: hidden;
}
.card-body{
    background-color: white;
    border-radius: 10px;
    padding: 30px;
    margin-top: 50px;
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
<head>
<link id="pagestyle" href="../admin/administrators/assets/CSS/material-dashboard.min.css" rel="stylesheet" />
</head>
    <section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
          $('input[name="cpassword"]').on('keyup', function() {
          if ($(this).val() != '') 
          {
          $('label[for="cpassword"]').addClass('d-none');
          }
           else 
          {
          $('label[for="cpassword"]').removeClass('d-none');
              }
            });
          });
      </script>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('./administrators/assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
            <?php if(isset($_SESSION['message']))
            { 
              ?>
                <div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                  <strong>Hey!</strong> <?= $_SESSION['message']; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php 
              unset($_SESSION['message']);
            } ?>
              <div class="card mt-5">
                <div class="card-header ">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0 ">Enter your email and password to register</p>
                </div>
                <div class="row mt-3">
                  <div class="col-3 text-center ms-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-facebook text-black fa-3x"></i>
                    </a>
                  </div>
                  <div class="col-3 text-center px-1">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-github text-black fa-3x"></i>
                    </a>
                  </div>
                  <div class="col-3 text-center me-auto">
                    <a class="btn btn-link px-3" href="javascript:;">
                      <i class="fa fa-google text-black fa-3x"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body mt-0">
                  <form action="functions/authcode.php" method="POST" role="form">
                    <div class="input-group input-group-outline mb-3">                     
                      <input type="text" required name="name" placeholder="Name"class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="number" required name="phone" placeholder="Phone number" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <input type="email" required name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">                  
                      <input type="password" required name="password" placeholder="Password"class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">                     
                      <input type="password" required name="cpassword" placeholder="Confirm password" class="form-control">
                    </div>
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input"  required type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="register_btn" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="./login.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <script>
        $('input[name="password"]').on('keyup', function() {
              if ($(this).val() !== '') {
                  $('.password-label').addClass('d-none');
              } else {
                  $('.password-label').removeClass('d-none');
              }
          });
      </script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </section>