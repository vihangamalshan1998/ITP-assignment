<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Administration | Kumara Rent A Car</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/custombox/dist/custombox.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../../assets/vendor/flatpickr/dist/flatpickr.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
</head>
<body class="u-custombox-no-scroll">

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">

<?php 
  include 'header.php';
?>

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">

        <!-- Title -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="h1 bold mb-0">Payments</h3>
        </div>
        <!-- End Title -->

        <!-- Earning Sources -->
        <div class="mb-7">
          <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
            <!-- Card -->
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="#">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/trip.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Trip Payments</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="vehicle_payment_table.php">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/vehicle.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Vehicle Payments</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="#">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/driver.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Driver Payments</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Earning Sources -->

        <!-- Title -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="h1 bold mb-0">Make a Payment</h3>
        </div>
        <!-- End Title -->

        <!-- Earning Sources -->
        <div class="mb-7">
          <div class="card-deck d-block d-lg-flex card-lg-gutters-3">

            <!-- Card -->
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="vehicle_owner_payment.php">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/vehicle.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Vehicle Owner</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="#">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/driver.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Driver</span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Earning Sources -->

        <!-- Card -->
        <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
          <!-- Stats -->
          <div class="card mb-7 mb-lg-0">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Deposits</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="depositSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="depositSettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#depositSettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="depositSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="depositSettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cogs dropdown-item-icon"></small>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cloud-download-alt dropdown-item-icon"></small>
                      Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <!-- Deposit Info -->
              <div class="row mb-5">
                <div class="col-sm-6 mb-4 mb-sm-0">
                  <span class="align-top">$</span>
                  <span class="font-size-3 font-weight-medium text-lh-sm">50,102</span>
                  <div class="mb-1">
                    <span class="text-secondary font-size-1">Deposit:</span>
                    <span class="font-weight-medium font-size-1">$1,050</span>
                  </div>
                  <div>
                    <span class="text-primary font-weight-medium text-lh-sm">
                      <span class="fas fa-arrow-up text-success small"></span>
                      +2.1% ($122)
                    </span>
                  </div>
                </div>

                <div class="col-sm-6 align-self-end">
                  <!-- Pie Circle -->
                  <div class="js-pie text-center"
                     data-circles-text-class="content-centered-y"
                     data-circles-value="54"
                     data-circles-max-value="100"
                     data-circles-bg-color="rgba(0, 201, 167, 0.1)"
                     data-circles-fg-color="#00c9a7"
                     data-circles-radius="50"
                     data-circles-stroke-width="4"
                     data-circles-additional-text="%"
                     data-circles-duration="2000"
                     data-circles-scroll-animate="true"
                     data-circles-color="#00c9a7"
                     data-circles-font-size="24"></div>
                  <!-- End Pie Circle -->
                </div>
              </div>

              <button type="button" class="btn btn-block btn-sm btn-primary transition-3d-hover">Add Funds</button>
              <!-- End Deposit Info -->
            </div>

            <div class="card-footer p-5">
              <!-- Progress Info -->
              <div class="row align-items-center">
                <div class="col-6 u-ver-divider">
                  <label class="small text-muted">Goal:</label>
                  <small class="font-weight-medium">$100k</small>
                  <div class="js-hr-progress progress" style="height: 4px;">
                    <div class="js-hr-progress-bar progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="col-6">
                  <label class="small text-muted">Duration:</label>
                  <small class="font-weight-medium">6 months</small>
                  <div class="js-hr-progress progress" style="height: 4px;">
                    <div class="js-hr-progress-bar progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <!-- End Progress Info -->
            </div>
          </div>
          <!-- End Stats -->

          <!-- Stats -->
          <div class="card mb-7 mb-lg-0">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Balance</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="balanceSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="balanceSettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#balanceSettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="balanceSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="balanceSettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cogs dropdown-item-icon"></small>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cloud-download-alt dropdown-item-icon"></small>
                      Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <!-- Balance Info -->
              <div class="row align-items-center mb-4">
                <div class="col-6 u-ver-divider">
                  <label class="d-block small text-muted mb-0">Available:</label>
                  <span class="font-weight-medium">$45.99</span>
                </div>

                <div class="col-6">
                  <label class="d-block small text-muted mb-0">Pending:</label>
                  <span class="font-weight-medium">$0.00</span>
                </div>
              </div>

              <div class="row">
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">May</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Jun</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Jul</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Aug</h4>
                  </div>
                </div>
              </div>
              <!-- End Balance Info -->
            </div>
          </div>
          <!-- End Stats -->
        </div>
        <!-- End Card -->
      </div>
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php 
    include 'footer.php'
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

  <!-- Request Payment Modal Window -->
  <div id="requestPaymentModal" class="js-modal-window u-modal-window" style="width: 600px;">
    <div class="card mb-9">
      <!-- Header -->
      <header class="card-header bg-light py-3 px-5">
        <div class="d-flex justify-content-between align-items-center">
          <h3 class="h6 mb-0">Request a payment</h3>

          <button type="button" class="close" aria-label="Close" onclick="Custombox.modal.close();">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </header>
      <!-- End Header -->

      <div class="card-body bg-white">
        <!-- Request Payment Form -->
        <form class="js-validate js-step-form"
              data-progress-id="#progressStepForm"
              data-steps-id="#contentStepForm"
              novalidate="novalidate">
          <!-- Progress Step Form -->
          <nav id="progressStepForm" class="js-step-progress nav nav-icon nav-justified text-center p-5">
            <a class="nav-item" href="javascript:;">
              <span class="nav-icon-action">
                <span class="fas fa-user-circle nav-icon-action-inner"></span>
              </span>
              <span class="d-none d-sm-block">Select payer</span>
            </a>
            <a class="nav-item" href="javascript:;">
              <span class="nav-icon-action">
                <span class="fas fa-file-invoice-dollar nav-icon-action-inner"></span>
              </span>
              <span class="d-none d-sm-block">Payment details</span>
            </a>
            <a class="nav-item" href="javascript:;">
              <span class="nav-icon-action">
                <span class="fas fa-paperclip nav-icon-action-inner"></span>
              </span>
              <span class="d-none d-sm-block">Attachment</span>
            </a>
          </nav>
          <!-- End Progress Step Form -->

          <hr class="my-0">

          <!-- Content Step Form -->
          <div id="contentStepForm" class="p-5">
            <div id="selectPlayerStep" class="active">
              <!-- Recent Payers List -->
              <div id="recentPayersList" data-target-group="idAddNewPayer">
                <!-- Link -->
                <div class="d-flex justify-content-end mb-3">
                  <a class="js-animation-link d-inline-block small link-muted" href="javascript:;"
                     data-target="#addNewPayer"
                     data-link-group="idAddNewPayer">
                    <span class="fas fa-plus mr-1"></span>
                    Add new payer
                  </a>
                </div>
                <!-- End Link -->

                <!-- Add Members -->
                <div class="mb-4">
                  <input class="form-control" type="email" placeholder="Enter email, name, or company" aria-label="Enter email, name, or company">
                </div>
                <!-- End Add Members -->

                <!-- Most Recent Payers List -->
                <div class="mb-4">
                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                          <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img8.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Sebastian Diaz</h4>
                          <small class="d-block text-secondary">sebastiandiaz@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->

                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <span class="btn btn-icon btn-soft-success rounded-circle mr-3">
                          <span class="btn-icon__inner">CL</span>
                        </span>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Cler Lockhart</h4>
                          <small class="d-block text-secondary">clerlockhart@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->

                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                          <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img12.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Joseph Mack</h4>
                          <small class="d-block text-secondary">josephmack@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->

                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                          <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img10.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Eliza Donovan</h4>
                          <small class="d-block text-secondary">eliz@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->
                </div>
                <!-- End Most Recent Payers List -->
              </div>
              <!-- End Recent Payers List -->

              <!-- Buttons -->
              <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1" data-next-step="#paymentDetailsStep">Next</button>
                <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover" onclick="Custombox.modal.close();">Cancel</button>
              </div>
              <!-- End Buttons -->
            </div>

            <div id="paymentDetailsStep" style="display: none;">
              <div class="row">
                <!-- Input Group -->
                <div class="col-sm-6 mb-4">
                  <label id="amountLabel" class="h6 small d-block text-uppercase">Amount</label>
                  <div class="js-form-message">
                    <div class="input-group input-group-sm">
                      <input type="number" class="form-control" name="amount" placeholder="Pixeel" aria-label="Pixeel" aria-describedby="amountLabel" required
                             data-msg="Please enter a valid name."
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
                <!-- End Input Group -->

                <!-- Select -->
                <div class="col-sm-6 mb-4">
                  <label class="form-label">Currency</label>

                  <div class="input-group">
                    <select class="custom-select custom-select-sm">
                      <option value="usd">USD</option>
                      <option value="euro">Euro</option>
                      <option value="gbp">GBP</option>
                    </select>
                  </div>
                </div>
                <!-- End Select -->
              </div>

              <!-- Input -->
              <div class="mb-4">
                <label id="descriptionLabel" class="h6 small d-block text-uppercase">Description</label>
                <div class="js-form-message">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control" rows="2" name="description" placeholder="Your payer will see this description on the payment request" aria-label="Your payer will see this description on the payment request" aria-describedby="descriptionLabel" required
                              data-msg="Please enter a valid reason."
                              data-error-class="u-has-error"
                              data-success-class="u-has-success"></textarea>
                  </div>
                </div>
              </div>
              <!-- End Input -->

              <!-- Datepicker -->
              <div class="mb-4">
                <label id="paymentDueByLabel" class="form-label">Payment due by</label>
                <div id="datepickerWrapper" class="u-datepicker u-datepicker--top input-group input-group-sm">
                  <input class="js-range-datepicker form-control bg-transparent" type="text" placeholder="Due date" aria-label="Due date" aria-describedby="paymentDueByLabel" required
                         data-rp-wrapper="#datepickerWrapper"
                         data-rp-date-format="d/m/Y">
                  <div class="input-group-append">
                    <span class="input-group-text rounded-right">
                      <span class="far fa-calendar-alt"></span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Datepicker -->

              <!-- Buttons -->
              <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1" data-next-step="#attachDocumentsStep">Next</button>
                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;" data-previous-step="#selectPlayerStep">Back</a>
              </div>
              <!-- End Buttons -->
            </div>

            <div id="attachDocumentsStep" style="display: none;">
              <div class="mb-4">
                <p>Attach up to 3 documents (like your invoice or work contact) to your payment request.</p>
                <p>Do not have an invoice? <a href="#">Create a professional invoice for free and upload below.</a></p>
              </div>

              <!-- File Attachment Input -->
              <label class="file-attachment-input mb-4" for="fileAttachmentInput">
                Browse your device and upload documents
                <small class="d-block text-muted">Maximum file size 10MB</small>
                <input id="fileAttachmentInput" name="file-attachment" type="file" class="file-attachment-input__label">
              </label>
              <!-- End File Attachment Input -->

              <!-- Buttons -->
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Request Payment</button>
                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;" data-previous-step="#paymentDetailsStep">Back</a>
              </div>
              <!-- End Buttons -->
            </div>
          </div>
          <!-- End Content Step Form -->
        </form>
        <!-- End Request Payment Form -->
      </div>
    </div>
  </div>
  <!-- End Request Payment Modal Window -->
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
  <script src="../../assets/vendor/custombox/dist/custombox.min.js"></script>
  <script src="../../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
  <script src="../../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <script src="../../assets/vendor/appear.js"></script>
  <script src="../../assets/vendor/circles/circles.min.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/components/hs.modal-window.js"></script>
  <script src="../../assets/js/components/hs.step-form.js"></script>
  <script src="../../assets/js/components/hs.show-animation.js"></script>
  <script src="../../assets/js/components/hs.range-datepicker.js"></script>
  <script src="../../assets/js/components/hs.chart-pie.js"></script>
  <script src="../../assets/js/components/hs.progress-bar.js"></script>
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
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
        autonomous: true
      });

      // initialization of step form
      $.HSCore.components.HSStepForm.init('.js-step-form');

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

      // initialization of chart pies
      var items = $.HSCore.components.HSChartPie.init('.js-pie');

      // initialization of horizontal progress bars
      var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress', {
        direction: 'horizontal',
        indicatorSelector: '.js-hr-progress-bar'
      });

      var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress', {
        direction: 'vertical',
        indicatorSelector: '.js-vr-progress-bar'
      });

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>