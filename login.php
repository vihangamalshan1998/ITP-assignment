<?php

session_start();
include 'config.php';

if (isset($_POST['btnlogin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = mysqli_query($con,"SELECT * FROM user
    WHERE email='$email' AND password='$password'");
    
    if(mysqli_num_rows($sql)>0){
        
        $sqluser = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
        $userrecord = mysqli_fetch_array($sqluser);
        $uid = $userrecord['user_id'];

        $_SESSION['mysess']=mt_rand();
        $_SESSION['uid']=$uid;
        header('Location:Customer/customer_profile.php?uid='.$_SESSION['uid']);
        } else {
            echo"<script>alert('Invalid Email or Password');</script>";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Login</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--bg-transparent u-header--abs-top">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="navbar navbar-expand u-header__navbar">
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-2">
              <img src="images/logo.png" class="img-fluid">
            </div>
          </div>
          <!-- End Default Logo -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative height-lg-100vh">
      <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center gradient-half-primary-v1 height-lg-100vh px-0">
        <div class="w-100 p-5">
          <!-- SVG Quote -->
          <figure class="text-center mb-5 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
               viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path class="fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- Testimonials Carousel Main -->
          <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-fade="true"
               data-nav-for="#testimonialsNavPagination">
            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">'Vizel' <br/>Engine Capacity : 1500cc,<br/> Auto, <br/>Pessengers : 4 - 5, <br/>Manufacture year : 2015   </blockquote>
                
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">'Mercedes Benze' <br/> Engine Capacity : 2000cc,<br/>Auto, <br/>Pessengers : 4 - 5,<br/> Manufacture year : 2015  </blockquote>
                
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">"Alto' <br/>Engine Capacity : 800cc,<br/>Auto, <br/>Pessengers : 4 - 5, <br/>Manufacture year : 2015  </blockquote>
                
              </div>
              <!-- End Testimonials -->
            </div>
          </div>
          <!-- End Testimonials Carousel Main -->

          <!-- Testimonials Carousel Pagination -->
          <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern mx-auto"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-center-mode="true"
               data-slides-show="3"
               data-is-thumbs="true"
               data-focus-on-select="true"
               data-nav-for="#testimonialsNavMain">
            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="images/bg_2.jpg" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="images/car-1.jpg" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="images/car-4.jpg" alt="Image Description">
              </div>
            </div>
          </div>
          <!-- End Testimonials Carousel Pagination -->

          <!-- Clients -->
          <div class="position-absolute right-0 bottom-0 left-0 text-center p-5">
            <h4 class="h6 text-white-70 mb-3"> Powered By<br/>Kumara Rent A Car  </h4>
            
          </div>
          <!-- End Clients -->
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-3 space-lg-0">
            <!-- Form -->
            <form class="js-validate mt-5" method="POST">
              <!-- Title -->
              <div class="mb-7">
                <h2 class="h3 text-primary font-weight-normal mb-0">Welcome </h2>
                <p>Login to manage your account.</p>
              </div>
              <!-- End Title -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="form-label" for="signinSrEmail">Email address</label>
                <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required
                       data-msg="Please enter a valid email address."
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="form-label" for="signinSrPassword">
                  <span class="d-flex justify-content-between align-items-center">
                    Password
                    <a class="link-muted text-capitalize font-weight-normal" href="recover-account.html">Forgot Password?</a>
                  </span>
                </label>
                <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                       data-msg="Your password is invalid. Please try again."
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
              <!-- End Form Group -->

              <!-- Button -->
              <div class="row align-items-center mb-5">
                <div class="col-6">
                  <span class="small text-muted">Don't have an account?</span>
                  <a class="small" href="Customer/register.php">Signup</a>
                </div>

                <div class="col-6 text-right">
                  <button type="submit" name="btnlogin" class="btn btn-primary transition-3d-hover">Get Started</button>
                </div>
              </div>
              <!-- End Button -->

              <span class="small text-muted">-------------------------------or-------------------------------</span>

              <div class="row mt-2">
                <div class="col-md-6 text-center">
                   <a href="Driver/login.php" type="submit" name="btnlogin" class="btn btn-secondary transition-3d-hover mt-3">Login As  Driver</a> 
               </div>
               <div class="col-md-6 text-center">
                   <a href="VehicleOwner/login.php" type="submit" name="btnlogin" class="btn btn-secondary transition-3d-hover mt-3">Login As  VehicleOwner</a>
                </div>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="assets/vendor/slick-carousel/slick/slick.js"></script>

  <!-- JS Front -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.validation.js"></script>
  <script src="assets/js/components/hs.slick-carousel.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');
    });
  </script>
</body>
</html>