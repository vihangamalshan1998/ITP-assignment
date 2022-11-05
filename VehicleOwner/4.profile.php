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
    <title>Profile </title>

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
    <link rel="stylesheet" href="../assets/css/new.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <?php include('../header.php'); ?>
<?php include('../account-sidebar.php'); ?>
    <!-- ========== END HEADER ========== -->
 
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Breadcrumb Section -->
        <div class="bg-primary mgtop">
            <div class="container space-1">
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
                                <h1 class="h3 text-white font-weight-medium mb-1">Welcome,<?php echo $name=$record['Fname'];?>
                                    !</h1>
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
                                                href="4.profile.php?uid=<?php echo $record['user_id'];?>">Profile</a></li>

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
                                                href="4.1.edit-profile.php?uid=<?php echo $record['user_id'];?>">Edit profile</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="4.2.change-password.php?uid=<?php echo $record['user_id'];?>">Change password</a></li>

                                            </ul>
                                        </li>
                                        <!-- Account Settings -->

                                        <!-- Payments -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="billingDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="billingDropdownMenu">
                                                Payements
                                            </a>

                                            <ul id="billingDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="billingDropdown">

                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="4.2.change-password.php?uid=<?php echo $record['user_id'];?>">Payment History</a></li>
                                            </ul>
                                        </li>
                                        <!-- Payments -->

                                        <!-- Vehicle Details -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accessibilityDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accessibilityDropdownMenu">
                                                Vehicles
                                            </a>

                                            <ul id="accessibilityDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="8.vehicle-details.php?uid=<?php echo $record['user_id'];?>">Details</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="8.2.owned-vehicles.php?uid=<?php echo $record['user_id'];?>">Current Vehicles</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="8.3.release-vehicles.php?uid=<?php echo $record['user_id'];?>">Released Vehicles</a></li>

                                            </ul>
                                        </li>
                                        <!--  Vehicle Details-->

                                        <!-- Reports -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link"  href="7.user-reports.php?uid=<?php echo $record['user_id'];?>">Reports</a>
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
                        <a class="btn btn-sm btn-soft-white text-nowrap transition-3d-hover" href="4.1.edit-profile.php"
                            >

                            Edit Profile
                        </a>
                        <!-- End Button -->
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
                                    <img class="u-lg-avatar rounded-circle" src="img/<?php echo $name=$record['Profile_Pic'];?>" 
                                        alt="Image Description">
                                </div>



                                <div class='mb-3'>

                                    <h1 class='h6 font-weight-medium mb-0'><?php echo $record['Fname'];?> <?php echo $record['Lname'];?></h1>
                                    <small class='d-block text-muted'><?php echo $record['UserName'];?></small>

                                </div>
                                <div class='mb-2'>

                                    <h1 class='h6 font-weight-medium mb-0'>Password</h1>
                                    <small class='d-block text-muted'><?php echo  $record["Password"]?></small>

                                </div>
                            </div>
                        </div>
                        <!-- End Profile Card -->


                        <!-- Availabele Vehicles  -->
                        <div class="card mb-4">
                            <div class="card-header pt-4 pb-3 px-0 mx-4">
                                <h2 class="h6 mb-0">Available Vehicles</h2>
                            </div>

                            <div class="card-body pt-3 pb-4 px-4">
                                <!-- Vehicle -->
                                <a class="d-flex align-items-start mb-4" href="#">



                                </a>
                                <!-- End Vehicle -->

                                <!-- Vehicle -->
                                <a class="d-flex align-items-start mb-4" href="#">



                                </a>
                                <!-- End Vehicle -->

                                <!-- Vehicle -->
                                <a class="d-flex align-items-start mb-4" href="#">



                                </a>
                                <!-- End Vehicle -->

                                <!-- Vehicle -->
                                <a class="d-flex align-items-start" href="#">

                                </a>
                                <!-- End Vehicle -->
                            </div>
                        </div>
                        <!-- End Avaliable Vehicle  -->

                        <!-- Unavailable Vehicles -->
                        <div class="card mb-4">
                            <div class="card-header pt-4 pb-3 px-0 mx-4">
                                <h3 class="h6 mb-0">Unavailable Vehicles</h3>
                            </div>

                            <div class="card-body pt-3 pb-4 px-4">
                                <a class="media mb-4" href="#">

                                </a>

                                <a class="media mb-4" href="#">


                                    <a class="media mb-4" href="#">

                                    </a>

                                    <a class="media mb-4" href="#">

                                    </a>
                            </div>
                        </div>
                        <!-- End Unavailable Vehicles -->
                    </div>

                    <div class="col-lg-9">

                        <div class="mb-4">

                            <h2 class="h4"><?php echo $record['Fname'];?> <?php echo $record['Lname'];?><span class="badge badge-success ml-1">Vehicle
                                    Owner</span>
                            </h2>

                            <h4 class="h6 text-secondary mb-0"><?php echo $record["Address"] ?><small>-Joined in January
                                    2019</small></h4>

                        </div>
                        <!-- End User Details -->

                        <!-- Collections -->
                        <ul class="list-inline d-flex align-items-center">
                            <li class="list-inline-item mb-3 mb-sm-0">
                                <div class="d-flex align-items-center">
                                    <img class="mr-2" src="../assets/svg/illustrations/verified-user.svg"
                                        alt="Image Description" style="width: 40px;">
                                    <div class="text-secondary">
                                        Verified
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- User Details -->
                        <div class="mb-4">

                        </div>
                        <!-- End User Details -->
                        <hr class="my-7">
                        <!-- Info -->

                        <!-- Icon Blocks -->
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <!-- List Group -->
                                <ul
                                    class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">

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
                                <!-- End List Group -->
                            </div>
                            <div class="col-md-6 col-lg-6">
                            <ul
                                    class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">

                                    <li class="list-group-item pt-0 pb-6">
                                        <div class="media">
                                            <span class="fas fa-map-marker-alt list-group-icon mr-3"></span>
                                            <div class="media-body text-lh-sm">
                                                <span class="d-block mb-1">Location:</span>
                                                <a href="#"><?php echo $record["Address"] ?></a>
                                            </div>
                                        </div>
                                    </li>

                                    </ul>

                            </div>

                        </div>
                        <!-- End Icon Blocks -->
                    
                        <!-- End Info -->

                        <hr class="my-7">

                        <!--Main functions-->

                        <div class="row">
                            <div class="col-md-6 col-lg-6">

                                <img src="images/agreement.jpg">
                            </div>
                            <div class="col-md-6 col-lg-6 ">
                                <h3>Agreement</h3>
                                <p class="fas  small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas  small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas  small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>


                                <!-- Button -->
                                <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover mb-6"
                                    href="5.Agreement.php">
                                  
                                    Agreement
                                </a>
                                <!-- End Button -->
                            </div>

                        </div>

                        <hr class="my-7">

                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="images/pay.jpg">
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <h3>Payment Details</h3>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>

                                <!-- Button -->
                                <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover" href="6.payments.php"
                                    data-modal-target="#addProjectModal">
                                    
                                    Payment Details
                                </a>
                                <!-- End Button -->
                            </div>
                        </div>

                        <hr class="my-7">

                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="images/reports.jpg">
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <h3>Reports</h3>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>

                                <!-- Button -->
                                <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover"
                                    href="7.user-reports.php">
                                   
                                    Reports
                                </a>
                                <!-- End Button -->
                            </div>
                        </div>

                        <hr class="my-7">

                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="images/details.jpg">
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <h3>Vehicle Details</h3>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <p class="fas fa-plus small mr-2">
                                    qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>
                                <!-- Button -->
                                <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover"
                                    href="8.vehicle-details.php" data-modal-target="#addProjectModal">
                                    
                                    Vehicle Details
                                </a>
                                <!-- End Button -->
                            </div>
                        </div>

                        <hr class="my-7">
                        <!--End main functions-->
                    </div>





                    <hr class="my-7">




                </div>
            </div>
        </div>
        </div>
        <!-- End Content Section -->
    </main>
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <?php include('../footer.php');?>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Account Sidebar Navigation -->

    <!-- End Account Sidebar Navigation -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
        data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
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
    $(window).on('load', function() {
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

    $(document).on('ready', function() {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function() {
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