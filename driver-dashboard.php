<?php 
  session_start();
  include ('../config.php');
  $nic = $_SESSION['nic'];
  
  $sql =  mysqli_query($con,"SELECT * FROM user WHERE NIC = '$nic'");
  if($sql){
    while($record=mysqli_fetch_array($sql)){
      $name=$record['Fname'];
      $email=$record['Email'];
      $pro=$record['Profile_Pic'];
     
      //echo $name;
    }
  }else{
    echo "Unsuccessfull";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Driver dashboard</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../assets/vendor/summernote/dist/summernote-lite.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/flatpickr.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/new1.css">
</head>
<body>


  <?php include('../header.php');
  
        include('../account-sidebar.php');
  ?>
  <!-- ========== MAIN ========== -->
     
  <main id="content" role="main">
 <!-- Breadcrumb Section -->
 <div class="bg-primary mt-10 ">
            <div class="container space-top-1 pb-3 ravini">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
                        <div
                            class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
                            <!-- Breadcrumb -->
                          
                            <!-- End Breadcrumb -->

                            <!-- Breadcrumb Nav Toggle Button -->
                            <div class="d-lg-none">
                                <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                                    aria-label="Toggle navigation" aria-expanded="false"
                                    aria-controls="breadcrumbNavBar" data-toggle="collapse"
                                    data-target="#breadcrumbNavBar">
                                    <span id="breadcrumbHamburgerTrigger" class="u-hamburger__box">
                                        <span class="u-hamburger__inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- End Breadcrumb Nav Toggle Button -->
                        </div>
                    </div>

                    <div class="col-lg-7 order-lg-1">
                        <!-- User Info -->
                        <div class="media d-block d-sm-flex align-items-sm-center">
                            <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                                <img class="img-fluid rounded-circle" src="driverimages/<?php echo $pro; ?>"
                                    alt="Image Description">
                                <span
                                    class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h1 class="h3 text-white font-weight-medium mb-1">Welcome,<?php echo $name; ?></h1>
                                <span class="d-block text-white"><?php echo $email; ?></span>
                            </div>
                        </div>
                        <!-- End User Info -->
                    </div>
                </div>
            </div>

            <div class="container space-bottom-1 space-bottom-lg-0">
                <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
                      <!-- Navbar -->
                      <div
                        class="u-header u-header-left-aligned-nav u-header--bg-transparent-lg u-header--white-nav-links z-index-4">
                        <div class="u-header__section bg-transparent">
                            <nav
                                class="js-breadcrumb-menu navbar navbar-expand-lg u-header__navbar u-header__navbar--no-space">
                                <div id="breadcrumbNavBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <!-- General -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="generalDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="generalDropdownMenu">
                                                Home
                                            </a>

                                            <ul id="generalDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="generalDropdown">
                                                
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="customer_profile.php?uid=<?php echo $record['user_id'];?>">Profile</a></li>

                                            </ul>
                                        </li>
                                        <!-- General -->

                                        <!-- Account Settings -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accountSettingsDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="replacement.php" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accountSettingsDropdownMenu">
                                                 Make a Replacement
                                            </a>

                                            <ul id="accountSettingsDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="edit_profile.php?uid=<?php echo $record['user_id'];?>">Edit Profile</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="change-password.php?uid=<?php echo $record['user_id'];?>">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <!-- Account Settings -->

                                        <!-- Payements -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="billingDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="billingDropdownMenu">
                                                Payments
                                            </a>

                                            <ul id="billingDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="billingDropdown">

                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="8.PaymentHistory.php?uid=<?php echo $record['user_id'];?>">Payment History</a></li>
                                            </ul>
                                        </li>
                                        <!-- Payements -->

                                        
                                

                                        <!-- Reports -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accessibilityDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accessibilityDropdownMenu">
                                                Reports
                                            </a>

                                            <ul id="accessibilityDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="8.JourneyHistory.php?uid=<?php echo $record['user_id'];?>">Journey Report</a></li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item"
                                            data-event="hover"
                                            data-animation-in="slideInUp"
                                            data-animation-out="fadeOut">
                                        <a id="accessibilityDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="activity.php" aria-haspopup="true" aria-expanded="false" aria-labelledby="accessibilityDropdownMenu">
                                            Journey History
                                        </a>

                                        <ul id="accessibilityDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="7.Replacement.php?uid=<?php echo $record['user_id'];?>">Vehicle Replacement</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="3.FeedBACKt.php?uid=<?php echo $record['user_id'];?>">FeedBack</a></li>
                        

                        
                      </ul>
                    </li>
                                        <!-- Reports -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- End Navbar -->

                    <div class="ml-lg-auto">
                        <!-- Button -->
                        
                        <!-- End Button -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->

        <a href= "profile.php"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top"><i >PROFILE</i></button></a>

    <!-- Hero Section -->
    <div class="d-lg-flex">
      <div class="container d-lg-flex align-items-lg-center height-lg-100vh space-bottom-1 space-top-3 space-bottom-lg-3 space-lg-0">

        <div class="row align-items-lg-center w-100 mt-lg-9">
          <!-- SVG Icon -->

          <div class="col-lg-4 mb-7 mb-lg-0 top-m">
          <div class="card mb-0">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
              <h4><b>UPCOMING JOURNIES</b></h4>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- User -->
                
                <a class="d-flex align-items-start mb-4" href="#">

                
                  <div class="ml-3">
                  <a href="upcoming.php">
                  <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                    <span class="d-block text-dark">place : colombo</span>
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Request</button></a>
                   </a>
                  </div>
                  </a>
                
                <!-- End User -->

                <!-- User -->
                
                <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <a href="upcoming.php">
                  <h2 class="lead text-center">August : <span class="lead text-center">15</span></h2>
                    <span class="d-block text-dark">place : Kandy</span>
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Request</button>
                    </a>
                  </div>
                
                </a>
                <!-- End User -->

                <!-- User -->
                
              <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <a href="upcoming.php">
                  <h2 class="lead text-center">August : <span class="lead text-center">18</span></h2>
                    <span class="d-block text-dark">place : Hambantota</span>
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Request</button>
                    </a>
                  </div>
                </a>
                
                <!-- End User -->

                <!-- User -->
                
                <a class="d-flex align-items-start mb-4" href="#">

                <div class="ml-3">
                <a href="upcoming.php">
                <h2 class="lead text-center">August : <span class="lead text-center">20</span></h2>
                <span class="d-block text-dark">place : Kagella</span>
                <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Request</button>
                </a>
                </div>
               
                </a>
                
                <!-- End User -->
              </div>
            </div>
          </div>
          <!-- End SVG Icon -->

          <div class="col-lg-8 top-m">
          <figure id="SVGvirtualReality" class="svg-preloader ie-virtual-reality">
              <img class="js-svg-injector" src="../assets/svg/illustrations/virtual-reality.svg" alt="Image Description"
                   data-parent="#SVGvirtualReality">
            </figure>

            <div class="pl-lg-4">
              <!-- Title -->
              <div class="mb-4">
                <h1 class="text-primary font-weight-normal">Your Next <span class="font-weight-semi-bold">Journey</span>.</h1>
                
              </div>
              <!-- End Title -->

              <!-- Countdown -->
              <div class="js-countdown row mb-5"
                   data-end-date="2020/11/30"
                   data-month-format="%m"
                   data-days-format="%D"
                   data-hours-format="%H"
                   data-minutes-format="%M"
                   data-seconds-format="%S">
                <div class="col-3">
                  <strong class="js-cd-days h3 text-primary font-weight-semi-bold mb-0"></strong>
                  <span class="h5 font-weight-normal mb-0">Days</span>
                </div>
                <div class="col-3">
                  <strong class="js-cd-hours h3 text-primary font-weight-semi-bold mb-0"></strong>
                  <span class="h5 font-weight-normal mb-0">Hours</span>
                </div>
                <div class="col-3">
                  <strong class="js-cd-minutes h3 text-primary font-weight-semi-bold mb-0"></strong>
                  <span class="h5 font-weight-normal mb-0">Mins</span>
                </div>
                <div class="col-3">
                  <strong class="js-cd-seconds h3 text-primary font-weight-semi-bold mb-0"></strong>
                  <span class="h5 font-weight-normal mb-0">Secs</span>
                </div>
              </div>
              <!-- End Countdown -->
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="d-lg-flex">
      <div class="container d-lg-flex align-items-lg-center height-lg-100vh space-bottom-1 space-top-3 space-bottom-lg-3 space-lg-0">
    <div class="row align-items-lg-center w-100 mt-lg-9">
          <!-- SVG Icon -->

          <div class="col-lg-6 mb-7 mb-lg-0 bottom">
          <div class="card mb-0">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
              <h4><b>Details</b></h4>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- User -->
                <a href="replacement.php">
                <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <div class="mb-6">
                  <a href="replacement.php"><button type="submit" class="btn-group-small my-small-btn btn-sm btn-primary transition-3d-hover">Agreements</button></a>
                  </div>
                    
                  </div>
                </a>
                </a>
                <!-- End User -->

                <!-- User -->
                <a href="replacement.php">
                <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <div class="mb-6">
                  <a href="replacement.php"><button type="submit" class="btn-group-small my-small-btn btn-sm btn-primary transition-3d-hover">Payment Details</button></a>
                  </div>
                  </div>
                </a>
                </a>
                <!-- End User -->

                <!-- User -->
                <a href="replacement.php">
              <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <div class="mb-6">
                  <a href="activity.php"> <button type="submit" class="btn-group-small my-small-btn btn-sm btn-primary transition-3d-hover">Journey History</button></a>
                  </div>
                  </div>
                </a>
                </a>
                <!-- End User -->

                <!-- User -->
                
                <a class="d-flex align-items-start mb-4" href="#">

                
                <div class="ml-3">
                <div class="mb-6">
                <a href="replacement.php"> <button type="submit" class="btn-group-small my-small-btn btn-sm btn-primary transition-3d-hover"> Make A Replacement</button></a>
                </div>
                </div>
                </a>
               
                                <!-- End User -->
              </div>
              
            </div>
          </div>
          <!-- End SVG Icon -->

          <div class="col-lg-6 bottom">
  
          <div class="card mb-0">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
              <h4><b>MY JOURNIES</b></h4>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- User -->
             
                
                <!-- End User -->

                <!-- User -->
                <a href="plans.php">
              <a class="d-flex align-items-start mb-4" href="#">
              <a href="plans.php">
                  <div class="ml-3">
                  <a href="plans.php">
                  <h2 class="lead text-center">August : <span class="lead text-center">12</span></h2>
                  
                    <span class="d-block text-dark">place : Kandy</span>
                    
                    <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Details</button>
                  </div>
                  </a>
                  </div>
                  
                </a>
                <!-- End User -->

                <!-- User -->
               
              <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <a href="plans.php">
                  <h2 class="lead text-center">August : <span class="lead text-center">14</span></h2>
                    <span class="d-block text-dark">place : Kurunagala</span>
                   
                    <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Details</button>
                  </div>
                  </a>
                  </div>
                  
                </a>
                <!-- End User -->

                <!-- User -->
                
                <a class="d-flex align-items-start mb-4" href="#">
                
                <a href="plans.php">
                <div class="ml-3">
                
               
                <h2 class="lead text-center">August : <span class="lead text-center">15</span></h2>
                <span class="d-block text-dark">place : Kandy</span>
                
                <div class="mb-2">
                <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Details</button>
                  </div>
               
                </div>
                </a>
                <!-- End User -->
              </div>
              
            </div>
            
        </div>
   
    </a>
      

    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
 
    
    <?php include('../footer.php');?>
 
  <!-- ========== END FOOTER ========== -->

  <!-- JS Global Compulsory -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../assets/vendor/jquery.countdown.min.js"></script>

  <!-- JS Front -->
  <script src="../assets/js/hs.core.js"></script>
  <script src="../assets/js/components/hs.validation.js"></script>
  <script src="../assets/js/components/hs.focus-state.js"></script>
  <script src="../assets/js/components/hs.countdown.js"></script>
  <script src="../assets/js/components/hs.svg-injector.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of countdowns
      var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
        yearsElSelector: '.js-cd-years',
        daysElSelector: '.js-cd-days',
        hoursElSelector: '.js-cd-hours',
        minutesElSelector: '.js-cd-minutes',
        secondsElSelector: '.js-cd-seconds'
      });
    });
  </script>
</body>
</html>