<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Edit supplier Details</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../../assets/vendor/summernote/dist/summernote-lite.css">
  <link rel="stylesheet" href="../../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="../../assets/vendor/flatpickr/dist/flatpickr.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
  <link rel="stylesheet" href="../../assets/css/project.css">
</head>
<body>
<?php include ('header.php');?>
  <!-- ========== MAIN ========== -->

  <main id="content" role="main">
   

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-0">

        <h2>EDIT SUPPLIER FORM</h2><hr>
       
        <!-- Personal Info Form -->
        <form class="js-validate"  action ="supplier_insert.php" method ="POST">
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="nameLabel" class="form-label">
                  Name
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="sname" placeholder="Enter supplier's name" aria-label="Enter your name" required aria-describedby="nameLabel"
                         
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                  
                </div>
              </div>
            </div>
            <!-- End Input -->
           </div>

           <div class="row">

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="nameLabel" class="form-label">
                  Address
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="saddress" placeholder="Enter supplier's address" aria-label="Enter your name" required aria-describedby="nameLabel"
                         
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                  
                </div>
              </div>
            </div>
            <!-- End Input -->

  
           <!-- Input -->
           <div class="col-sm-6 mb-6">
            <div class="js-form-message">
              <label id="locationLabel" class="form-label">
                Joined date
                <span class="text-danger">*</span>
              </label>

              <div class="form-group">
                <input type="date" class="form-control" name="jdate" value="London, England" placeholder="Enter your location" aria-label="Enter your location" required aria-describedby="locationLabel"
                       
                       data-error-class="u-has-error"
                       data-success-class="u-has-success">
              </div>
            </div>
          </div>
          <!-- End Input -->
        </div>
           
            <div class="row">
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                  <div class="js-form-message">
                    <label id="emailLabel" class="form-label">
                      Email address
                      <span class="text-danger">*</span>
                    </label>
    
                    <div class="form-group">
                      <input type="email" class="form-control" name="semail" placeholder="Enter supplier's email address" aria-label="Enter your email address" required aria-describedby="emailLabel"
                             
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                      
                    </div>
                  </div>
                </div>
                <!-- End Input -->
    
                <!-- Input -->
                <div class="col-sm-6 mb-6">
                  <div class="js-form-message">
                    <label id="phoneNumberLabel" class="form-label">
                      Phone number
                      <span class="text-danger">*</span>
                    </label>
    
                    <div class="form-group">
                      <input class="form-control" type="tel" name="phonenum" placeholder="Enter supplier's phone number" aria-label="Enter your phone number" required aria-describedby="phoneNumberLabel"
                             
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
                <!-- End Input -->
              </div>

               <!-- Title -->
          <div class="mb-3">
            <h3 class="h5 mb-0">Bank account details</h3>
          </div>
          <!-- End Title -->

          <div class="row">

           <!-- Input -->
           <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="nameLabel" class="form-label">
                  Account ID
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="accnum" placeholder="Enter bank account number" aria-label="Enter your name" required aria-describedby="nameLabel"
                         
                         data-error-class="u-has-error"
                         data-success-class="u-has-success">
                  
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>
          <div class="row">


            <!-- Input -->
                <div class="col-md-6 mb-3 mb-sm-6">
                  <div class="js-form-message">
                    <label id="locationLabel" class="form-label">
                      Account name
                      <span class="text-danger">*</span>
                    </label>
    
                    <div class="form-group">
                      <input type="text" class="form-control" name="accname" placeholder="Enter account name" aria-label="Enter your location" required aria-describedby="locationLabel"
                             
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
                <!-- End Input -->
</div>

                <div class="row">

                <!-- Input -->
                <div class="col-md-6 mb-3 mb-sm-6">
                  <div class="js-form-message">
                    <label id="locationLabel" class="form-label">
                      branch
                      <span class="text-danger">*</span>
                    </label>
    
                    <div class="form-group">
                      <input type="text" class="form-control" name="branch" placeholder="Enter branch" aria-label="Enter your location" required aria-describedby="locationLabel"
                             
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
                <!-- End Input -->
              </div>

          <!-- Buttons -->
          <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1" name="submit">Save changes</button>
          <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover" name="cancel">Cancel</button>
          <!-- End Buttons -->

</form>    
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <?php include ('footer.php');?>

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

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
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
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/summernote/dist/summernote-lite.js"></script>
  <script src="../../assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
  <script src="../../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/components/hs.summernote-editor.js"></script>
  <script src="../../assets/js/components/hs.range-datepicker.js"></script>
  <script src="../../assets/js/components/hs.svg-injector.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>

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

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of text editors
      $.HSCore.components.HSSummernoteEditor.init('.js-summernote-editor');

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>