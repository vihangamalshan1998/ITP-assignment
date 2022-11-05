<?php 
  session_start();
  include ('config.php');
  $nic = $_SESSION['nic'];
 echo $nic;
  $sql =  mysqli_query($con,"SELECT u.Fname,u.Email,u.Address,d.DOB,c.PhoneNumber1,u.Profile_Pic FROM user u, driver d,contact_details c WHERE u.NIC = '$nic' AND d.NIC = u.NIC AND c.NIC=u.NIC");
  
  if($sql){
    while($record=mysqli_fetch_array($sql)){
      $name=$record['Fname'];
      $email=$record['Email'];
      $address=$record['Address'];
      $dob=$record['DOB'];
      $ph1=$record['PhoneNumber1'];
      $pro=$record['Profile_Pic'];   
    }
  }else{
    echo "Unsuccessfull";
  }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Profile | Front - Responsive Website Template</title>

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
    
<?php 

include ('../header.php');
include ('../account-sidebar.php');

?>
  <!-- ========== HEADER ========== -->

    <!-- Search -->
 
    
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Breadcrumb Section -->
    <div class="bg-primary ravini">
      <div class="container space-1">
        <div class="d-sm-flex justify-content-sm-between align-items-sm-center ">
          <div class="mb-3 mb-sm-0 top">
            <!-- Breadcrumb -->
          
            <!-- End Breadcrumb -->
          </div>

          <!-- Edit Profile -->
        
          <!-- End Edit Profile -->
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
                  <img class="u-lg-avatar rounded-circle" src="driverimages/<?php echo $pro; ?>" alt="Image Description">
                </div>

                <div class="mb-3">
                  <h1 class="h6 font-weight-medium mb-0"><?php echo $name; ?></h1>
                  <small class="d-block text-muted"></small>
                </div>

                <div class="mb-2">
                 
                </div>

              
              </div>
            </div>
            <!-- End Profile Card -->

            <!-- Contacts  -->
            <div class="card mb-4">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
              <h4><b>Upcoming Journeys</b></h4>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- User -->
                <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                    <span class="d-block text-dark">place : colombo</span>
                    <small class="d-block text-secondary">View Details</small>
                  </div>
                </a>
                <!-- End User -->

                <!-- User -->
                <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                    <span class="d-block text-dark">place : colombo</span>
                    <small class="d-block text-secondary">View Details</small>
                  </div>
                </a>
                <!-- End User -->

                <!-- User -->
              <a class="d-flex align-items-start mb-4" href="#">

                  <div class="ml-3">
                  <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                    <span class="d-block text-dark">place : colombo</span>
                    <small class="d-block text-secondary">View Details</small>
                  </div>
                </a>
                <!-- End User -->

                <!-- User -->
                <a class="d-flex align-items-start mb-4" href="#">

                <div class="ml-3">
                <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                <span class="d-block text-dark">place : colombo</span>
                <small class="d-block text-secondary">View Details</small>
                </div>
                </a>
                <!-- End User -->
              </div>
            </div>
            <!-- End Contacts  -->

            <!-- Social Profiles -->
            <div class="card mb-4">
              <div class="card-header pt-4 pb-3 px-0 mx-4">
              <h4><b>My Journeys</b></h4>
              </div>

              <div class="card-body pt-3 pb-4 px-4">
                <!-- Social Profiles -->
                <a class="d-flex align-items-start mb-4" href="#">

                    <div class="ml-3">
                    <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                    <span class="d-block text-dark">place : colombo</span>
                    <small class="d-block text-secondary">View Details</small>
                    </div>
                    </a>
                <!-- End Social Profiles -->

                <!-- Social Profiles -->
                <a class="d-flex align-items-start mb-4" href="#">

                <div class="ml-3">
                <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                <span class="d-block text-dark">place : colombo</span>
                <small class="d-block text-secondary">View Details</small>
                </div>
                </a>
                                <!-- End Social Profiles -->

                <!-- Social Profiles -->
                <a class="d-flex align-items-start mb-4" href="#">

                <div class="ml-3">
                <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
                <span class="d-block text-dark">place : colombo</span>
                <small class="d-block text-secondary">View Details</small>
                </div>
                </a>
                <!-- End Social Profiles -->

                <!-- Social Profiles -->
                <a class="d-flex align-items-start mb-4" href="#">

            <div class="ml-3">
            <h2 class="lead text-center">August : <span class="lead text-center">13</span></h2>
            <span class="d-block text-dark">place : colombo</span>
            <small class="d-block text-secondary">View Details</small>
            </div>
            </a>
                            <!-- End Social Profiles -->
              </div>
            </div>
            <!-- End Social Profiles -->
          </div>

          <div class="col-lg-9">
         


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
            
            
            <hr class="my-7">

            <!-- Icon Blocks -->
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-envelope list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Email:</span>
                        <a href="#"><?php echo $email; ?></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                  
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-map-marker-alt list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Location:</span>
                        <a href="#"><?php echo $address; ?></a>
                      </div>
                    </div>
                  </li>
                </ul>

                <a href= "edit-profile1.php"><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top"><i > EDIT PROFILE</i></button></a>
                <!-- End List Group -->
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-birthday-cake list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">Birthday:</span>
                        <span class="d-block text-muted"><?php echo $dob; ?></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                  
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                    <div class="media">
                      <span class="fas fa-mobile-alt list-group-icon mr-3"></span>
                      <div class="media-body text-lh-sm">
                      <span class="d-block mb-1">Phone Number</span>
                        <span class="d-block text-muted"><?php echo $ph1; ?></span>
                        <a href="#"></a>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- End List Group -->
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- List Group -->
                <ul class="list-group list-group-transparent list-group-flush list-group-borderless mb-0">
                  <li class="list-group-item pt-0 pb-4">
                  <div class="media">
                      
                      <div class="media-body text-lh-sm">
                        <span class="d-block mb-1">NIC:</span>
                        <a href="#"><?php echo $nic; ?></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item pt-0 pb-4">
                  
                  </li>
                </ul>
                <!-- End List Group -->

                
              </div>
            </div>
            <!-- End Icon Blocks -->

            <hr class="my-7">

            <!-- Info -->
            <div class="row mb-7">
              <div class="col-md-6 mb-7 mb-md-0">
              </div>

              <div class="col-md-6 mb-3 mb-md-0">

              </div>
            </div>
            <!-- End Info -->

            <!-- Title -->
            <div id="reviews" class="mb-3">
              <h3 class="h4 mb-0">Journey History</h3>
            </div>
            <!-- End Title -->

            <!-- Reviews -->
            <div>
              <!-- Author -->
              <div class="media mb-3">


                <div class="media-body align-self-center">
                  <h4 class="d-inline-block mb-1">
                    <a class="d-block h6 mb-0" href="#">Date :- 2020/08/20</a>
                  </h4>
                </div>

                
              </div>
              <!-- End Author -->
            <div class="para">
              <p>Rental Period : 2 Days</p>
              <p>Number of Passerngers : 4</p>
              <p>Vehicle Number : CD1234</p>
              <p>Pick up point : Malabe</p>
            </div>  

              <!-- Likes/Reply -->
              <ul class="list-inline d-flex">
                <li class="list-inline-item ml-3">
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="text-secondary" href="#">
                   
                    More Detalis
                  </a>
                </li>
              </ul>
              <!-- End Likes/Reply -->
            </div>
            <!-- End Reviews -->

            <hr class="my-7">

            <!-- Reviews -->
            <div class="mb-7">
              <!-- Author -->
              <div class="media mb-3">
             

                <div class="media-body align-self-center">
                  <h4 class="d-inline-block mb-1">
                    <a class="d-block h6 mb-0" href="#">Date :- 2020/08/20</a>
                  </h4>
                </div>

                <div class="media-body text-right">
                  
                </div>
              </div>
              <!-- End Author -->

              <div class="para">
              <p>Rental Period : 2 Days</p>
              <p>Number of Passerngers : 4</p>
              <p>Vehicle Number : CD1234</p>
              <p>Pick up point : Malabe</p>
            </div> 
              <!-- Likes/Reply -->
              <ul class="list-inline d-flex">
                <li class="list-inline-item ml-auto">
                  <a class="text-secondary" href="#">
                    
                    More Details
                  </a>
                </li>
              </ul>
              <!-- End Likes/Reply -->
            </div>
            <!-- End Reviews -->

            <a class="btn btn-block btn-soft-primary transition-3d-hover" href="#">See More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php 

include ('../footer.php');

?>
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
                <img class="u-sidebar--account__holder-img" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                <span class="badge badge-xs badge-outline-success badge-pos rounded-circle"></span>
              </div>
              <div class="ml-3">

                    <span class="font-weight-semi-bold"> Natalie <span class="badge badge-success ml-1">Pro</span></span>
                
                
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

            <div class="u-sidebar__content--account">
              <!-- List Links -->
              <ul class="list-unstyled u-sidebar--account__list">
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="dashboard.html">
                    <span class="fas fa-home u-sidebar--account__list-icon mr-2"></span>
                    Dashboard
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="profile.html">
                    <span class="fas fa-user-circle u-sidebar--account__list-icon mr-2"></span>
                    Profile
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="my-tasks.html">
                    <span class="fas fa-tasks u-sidebar--account__list-icon mr-2"></span>
                    My tasks
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="projects.html">
                    <span class="fas fa-layer-group u-sidebar--account__list-icon mr-2"></span>
                    Projects <span class="badge badge-danger float-right mt-1">3</span>
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="members.html">
                    <span class="fas fa-users u-sidebar--account__list-icon mr-2"></span>
                    Members
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="activity.html">
                    <span class="fas fa-exchange-alt u-sidebar--account__list-icon mr-2"></span>
                    Activity
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="payment-methods.html">
                    <span class="fas fa-wallet u-sidebar--account__list-icon mr-2"></span>
                    Payment methods
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="plans.html">
                    <span class="fas fa-cubes u-sidebar--account__list-icon mr-2"></span>
                    Plans
                  </a>
                </li>
              </ul>
              <!-- End List Links -->

              <div class="u-sidebar--account__list-divider"></div>

              <!-- List Links -->
              <ul class="list-unstyled u-sidebar--account__list">
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="invite-friends.html">
                    <span class="fas fa-user-plus u-sidebar--account__list-icon mr-2"></span>
                    Invite friends
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="api-token.html">
                    <span class="fas fa-key u-sidebar--account__list-icon mr-2"></span>
                    API Token
                  </a>
                </li>
              </ul>
              <!-- End List Links -->
            </div>
          </div>
        </div>
        
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
  <script src="../assets/vendor/jquery.countdown.min.js"></script>

  <!-- JS Front -->
  <script src="../assets/js/hs.core.js"></script>
  <script src="../assets/js/components/hs.header.js"></script>
  <script src="../assets/js/components/hs.unfold.js"></script>
  <script src="../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../assets/js/components/hs.focus-state.js"></script>
  <script src="../assets/js/components/hs.svg-injector.js"></script>
  <script src="../assets/js/components/hs.go-to.js"></script>
  <script src="../assets/js/hs.core.js"></script>
  <script src="../assets/js/components/hs.validation.js"></script>
  <script src="../assets/js/components/hs.focus-state.js"></script>
  <script src="../assets/js/components/hs.countdown.js"></script>
  <script src="../assets/js/components/hs.svg-injector.js"></script>

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