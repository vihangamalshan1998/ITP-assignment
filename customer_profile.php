<?php 
  session_start();
  include '../config.php';
  if(isset($_SESSION['mysess'])){
  $sql =  mysqli_query($con,"SELECT * FROM user WHERE user_id = '$_GET[uid]'");
  if($sql){
    while($record=mysqli_fetch_array($sql)){
      $name=$record['Fname'];
      $email=$record['Email'];
     
      //echo $name;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Profile</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/new1.css">
</head>
<body>
<!-- ========== Header ========== -->
<?php include('../header.php'); ?>
<?php include('../account-sidebar.php'); ?>

<!-- ========== End Header ========== -->
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Breadcrumb Section -->
    <div class="bg-primary ravini">
    <div class="container space-top-1 pb-3">
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
                                <img class="img-fluid rounded-circle" src="img/<?php echo $name=$record['Profile_Pic'];?>"
                                    alt="Image Description">
                                <span
                                    class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h1 class="h3 text-white font-weight-medium mb-1">Welcome,<?php echo $name=$record['Fname'];?></h1>
                                <span class="d-block text-white"><?php echo $name=$record['Email'];?></span>
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
                                                General
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
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accountSettingsDropdownMenu">
                                                Account settings
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
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accountSettingsDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accountSettingsDropdownMenu">
                                                Reservation 
                                            </a>

                                            <ul id="accountSettingsDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="../Reservation/reservation.php?uid=<?php echo $record['user_id'];?>">Make Reservation</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="">View Reservation</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Edit Reservation</a></li>
                                            </ul>
                                        </li>

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
                                        <a id="accessibilityDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="accessibilityDropdownMenu">
                                            Accessibility
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

                   
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Section -->

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
        <div class="row">
          <div class="col-lg-3 mb-7 mb-lg-0">
            <!-- Profile Card -->
            <div class="card p-1 mb-4">
              <div class="card-body text-center">
                <div class="mb-3">
                  <img class="u-lg-avatar rounded-circle" src="img/<?php echo $name=$record['Profile_Pic'];?>" alt="Image Description">
                </div>

                <div class="mb-3">
                  <h1 class="h6 font-weight-medium mb-0"><?php echo $record['Fname'];?> <?php echo $record['Lname'];?></h1>
                  <small class="d-block text-muted"><?php echo $record['UserName'];?></small>
                </div>


                
              </div>
            </div>
            <!-- End Profile Card -->

            <!-- Rentals  -->
            <div class="card mb-4">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
                <h2 class="h6 mb-0">Current Rental</h2>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- Current Rentals -->
                <a class="d-flex align-items-start mb-4" href="#">
                  <div class="position-relative u-avatar">
                    <img class="img-fluid rounded-circle" src="images/car.jpg" alt="Image Description">
                    <span class="badge badge-xs badge-outline-success badge-pos badge-pos--bottom-right rounded-circle"></span>
                  </div>

                  <div class="ml-3">
                    <span class="d-block text-dark">Honda Vezzle</span>
                    <small class="d-block text-secondary">CAB-5623</small>
                  </div>
                </a>
                <!-- End User -->
              </div>
            </div>
            <!-- End Current Rentals  -->

            <!-- Previous Rentals -->
            <div class="card mb-4">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
                <h3 class="h6 mb-0">Previous Rentals</h3>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- pre1 -->
                <a class="media mb-4" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="images/car.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Prius</span>
                    <small class="d-block text-secondary">CBD-8563</small>
                  </div>
                </a>
                <!-- End pre1 -->

                <!-- pre2 -->
                <a class="media mb-4" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="images/car.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Aqua</span>
                    <small class="d-block text-secondary">ABX-6325</small>
                  </div>
                </a>
                <!-- End Spre2 -->

                <!-- pre3 -->
                <a class="media mb-4" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="images/car.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Vitz</span>
                    <small class="d-block text-secondary">CBM-5396</small>
                  </div>
                </a>
                <!-- End pre3 -->

                <!-- pre4 -->
                <a class="media" href="#">
                  <div class="u-sm-avatar mr-3">
                    <img class="img-fluid" src="images/car.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="d-block text-dark">Allion</span>
                    <small class="d-block text-secondary">CBA-7514</small>
                  </div>
                </a>
                <!-- End pre4 -->
              </div>
            </div>
            <!-- End previous rental -->
          </div>

          <div class="col-lg-9">
            <!-- User Details -->
            <div class="mb-4">
              <h2 class="h4"><?php echo $record['Fname'];?> <?php echo $record['Lname'];?><span class="badge badge-success ml-1">Customer</span></h2>
              <h4 class="h6 text-secondary mb-0">Colombo, Sri Lanka <small>- Joined in January 2019</small></h4>
            </div>
            <!-- End User Details -->

            <!-- Collections -->
            <ul class="list-inline d-flex align-items-center">
              <li class="list-inline-item mb-3 mb-sm-0">
                <div class="d-flex align-items-center">
                  <img class="mr-2" src="../assets/svg/illustrations/verified-user.svg" alt="Image Description" style="width: 40px;">
                  <div class="text-secondary">
                    Verified
                  </div>
                </div>
              </li>
            </ul>
            <!-- End Collections -->

            <hr class="my-7">

            <!-- Icon Blocks -->
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-6">
                    <div class="media">
                      <span class="fas fa-envelope list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Email:</span>
                        <a href="#"><?php echo $record['Email'];?></a>
                      </div>
                    </div>
                  </li>
    </ul>
    </div>
    <div class="col-md-6 col-lg-6">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-6">
                    <div class="media">
                      <span class="fas fa-map-marker-alt list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Address:</span>
                        <a href="#"><?php echo $record['Address'];?></a>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List Group -->
              </div>

              
            </div>
            <!-- End Icon Blocks -->

            <hr class="my-7">

            
            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="edit_profile.php?uid=<?php echo $record['user_id'];?>">Edit Profile</a><br>
            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="3.FeedBack.php?uid=<?php echo $record['user_id'];?>">Customer FeedBack</a><br>
            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="7.Replacement.php?uid=<?php echo $record['user_id'];?>">Vehicle Replacement</a><br>
            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="4.PaymentHistory.php?uid=<?php echo $record['user_id'];?>">Payment History</a><br>
            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="8.JourneyHistory.php">Journey History</a><br>
            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="images/Aggreement.pdf"download>User Aggreement</a><br>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <footer>
  <?php include('../footer.php');?>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--account__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex justify-content-between align-items-center pt-4 px-7">
            <h3 class="h6 mb-0">My Account</h3>

            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <!-- Holder Info -->
            <header class="d-flex align-items-center u-sidebar--account__holder mt-3">
              <div class="position-relative">
                <img class="u-sidebar--account__holder-img" src="../assets/img/100x100/img1.jpg" alt="Image Description">
                <span class="badge badge-xs badge-outline-success badge-pos rounded-circle"></span>
              </div>
              <div class="ml-3">
                <span class="font-weight-semi-bold">Natalie Curtis <span class="badge badge-success ml-1">Pro</span></span>
                <span class="u-sidebar--account__holder-text">Lead Support Adviser</span>
              </div>

              <!-- Settings -->
              <div class="btn-group position-relative ml-auto mb-auto">
                <a id="sidebar-account-settings-invoker" class="btn btn-xs btn-icon btn-text-secondary rounded" href="javascript:;" role="button"
                        aria-controls="sidebar-account-settings"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-toggle="dropdown"
                        data-unfold-event="click"
                        data-unfold-target="#sidebar-account-settings"
                        data-unfold-type="css-animation"
                        data-unfold-duration="300"
                        data-unfold-delay="300"
                        data-unfold-animation-in="slideInUp"
                        data-unfold-animation-out="fadeOut">
                  <span class="fas fa-ellipsis-v btn-icon__inner"></span>
                </a>

                <div id="sidebar-account-settings" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="sidebar-account-settings-invoker">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">History</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Sign Out</a>
                </div>
              </div>
              <!-- End Settings -->
            </header>
            <!-- End Holder Info -->

            
        </div>

        <!-- Footer -->
 
      <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

  <!-- JS Front -->
  <script src="../assets/js/hs.core.js"></script>
  <script src="../assets/js/components/hs.header.js"></script>
  <script src="../assets/js/components/hs.unfold.js"></script>
  <script src="../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../assets/js/components/hs.focus-state.js"></script>
  <script src="../assets/js/components/hs.svg-injector.js"></script>
  <script src="../assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of HSMegaMenu component
      $('.js-breadcrumb-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
<?php

    }
  }
}else{

	echo "<script>alert('Please Login First');window.location='../login.php';</script>";
}
?>