<?php
session_start();
if(isset($_SESSION['mysess'])){


?>
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
        <!-- Stats -->
        <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
          <!-- Card -->
          <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mr-4">
                  <span class="fas fa-dollar-sign btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$45.99</span>
                  <h2 class="h6 text-secondary font-weight-normal mb-0">Available balance</h2>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-success rounded-circle mr-4">
                  <span class="fas fa-coins btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$1.32</span>
                  <h3 class="h6 text-secondary font-weight-normal mb-0">Reward balance</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-warning rounded-circle mr-4">
                  <span class="fas fa-exchange-alt btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$0.00</span>
                  <h3 class="h6 text-secondary font-weight-normal mb-0">Pending balance</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Stats -->

        <!-- Title -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="h6 mb-0">Your earning sources</h3>
          <a class="link-muted" href="#">View All</a>
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
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img5.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Spotify</span>
                    <small class="d-block text-secondary">Logo redesign</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                      $1,903
                    </span>
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
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Slack</span>
                    <small class="d-block text-secondary">Page redesign</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                      $3,500
                    </span>
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
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img6.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Dropbox</span>
                    <small class="d-block text-secondary">Branding</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                      $7,250
                    </span>
                  </div>
                </div>
              </a>
            </div>
            <!-- End Card -->
          </div>

          <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
            <!-- Card -->
            <div class="card card-frame mb-3">
              <a class="card-body p-4" href="#">
                <div class="media align-items-center">
                  <div class="u-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img8.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">PayPal</span>
                    <small class="d-block text-secondary">Logo redesign</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                      $2,125
                    </span>
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
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Dribbble</span>
                    <small class="d-block text-secondary">UI/UX</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                      $9,000
                    </span>
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
                    <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img4.jpg" alt="Image Description">
                  </div>
                  <div class="media-body">
                    <span class="text-dark">Mapbox</span>
                    <small class="d-block text-secondary">Branding</small>
                  </div>
                  <div class="media-body text-right">
                    <span class="text-primary ml-3">
                      $250
                    </span>
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

          <!-- Indicator -->
          <div class="card">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Activity</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="activitySettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="activitySettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#activitySettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="activitySettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="activitySettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye dropdown-item-icon"></small>
                      Mark as read
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye-slash dropdown-item-icon"></small>
                      Mark as unread
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

              <div class="overflow-hidden">
                <div class="js-scrollbar pr-3" style="max-height: 300px;">
                  <!-- Activity Feed -->
                  <ul class="list-unstyled u-indicator-vertical-dashed">
                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-primary rounded-circle mr-3">
                        <span class="btn-icon__inner">A</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Amanta Owens</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Slack home page redesign</span></p>
                        <small class="d-block text-muted">30 min ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-success rounded-circle mr-3">
                        <span class="btn-icon__inner">S</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Sebastian Diaz</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Mapbox logo redesign</span></p>
                        <small class="d-block text-muted">44 min ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-warning rounded-circle mr-3">
                        <span class="btn-icon__inner text-white">F</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Eliza Donovan</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Spotify branding</span></p>
                        <small class="d-block text-muted">1 hour ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-primary rounded-circle mr-3">
                        <span class="btn-icon__inner">C</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Cler Lockhart</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Dropbox home page redesign</span></p>
                        <small class="d-block text-muted">15 hours ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-danger rounded-circle mr-3">
                        <span class="btn-icon__inner">J</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">James Collins</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">InVison branding</span></p>
                        <small class="d-block text-muted">1 day ago</small>
                      </div>
                    </li>
                  </ul>
                  <!-- End Activity Feed -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Indicator -->
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

              <!-- Add New Payer -->
              <div id="addNewPayer" data-target-group="idAddNewPayer" style="display: none;">
                <!-- Button Group -->
                <div class="btn-group btn-group-toggle d-flex mb-5">
                  <a class="js-animation-link btn btn-sm btn-soft-secondary flex-fill active" href="javascript:;"
                     data-target="#companyType"
                     data-link-group="idPayerType">
                    Company
                  </a>
                  <a class="js-animation-link btn btn-sm btn-soft-secondary flex-fill" href="javascript:;"
                     data-target="#individualType"
                     data-link-group="idPayerType">
                    Individual
                  </a>
                </div>
                <!-- End Button Group -->

                <!-- Company Type Payer -->
                <div id="companyType" data-target-group="idPayerType">
                  <div class="row">
                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="companyNameLabel" class="h6 small d-block text-uppercase">Company name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="companyName" placeholder="Pixeel" aria-label="Pixeel" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="websiteURLLabel" class="h6 small d-block text-uppercase">Website URL</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="URL" class="form-control" name="websiteURL" placeholder="example.com" aria-label="example.com" required
                                 data-msg="Please enter a valid website URL."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="contactFirstNameLabel" class="h6 small d-block text-uppercase">Contact first name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactFirstNameCompany" placeholder="Brian" aria-label="Brian" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="contactLastNameLabel" class="h6 small d-block text-uppercase">Contact last name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactLastNameCompany" placeholder="Williams" aria-label="Williams" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="emailLabel" class="h6 small d-block text-uppercase">Email</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="email" class="form-control" name="emailCompany" required placeholder="example@gmail.com" aria-label="example@gmail.com"
                                 data-msg="Please enter a valid email address."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label class="form-label">Country</label>
                      <div class="js-form-message">
                        <div class="input-group">
                          <select class="form-control custom-select custom-select-sm" required
                                  data-msg="Please select country."
                                  data-error-class="u-has-error"
                                  data-success-class="u-has-success">
                            <option value="">Select country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->
                  </div>
                </div>
                <!-- End Company Type Payer -->

                <!-- Individual Type Payer -->
                <div id="individualType" data-target-group="idPayerType" style="display: none;">
                  <div class="row">
                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="IndivContactFirstNameLabel" class="h6 small d-block text-uppercase">Contact first name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactFirstNameIndividual" placeholder="Brian" aria-label="Brian" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="indivContactLastNameLabel" class="h6 small d-block text-uppercase">Contact last name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactLasttNameIndividual" placeholder="Williams" aria-label="Williams" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="IndivemailLabel" class="h6 small d-block text-uppercase">Email</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="email" class="form-control" name="emailIndividual" placeholder="example@gmail.com" aria-label="example@gmail.com" required
                                 data-msg="Please enter a valid email address."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label class="form-label">Country</label>
                      <div class="js-form-message">
                        <div class="input-group">
                          <select class="form-control custom-select custom-select-sm" required
                                  data-msg="Please select country."
                                  data-error-class="u-has-error"
                                  data-success-class="u-has-success">
                            <option value="">Select country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->
                  </div>
                </div>
                <!-- End Individual Type Payer -->
              </div>
              <!-- End Add New Payer -->

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

   <!-- Add New Vehicle Modal Window -->
   <?php
include '../../config.php';

if(isset($_POST['submit']))
{
    $vno = $_POST['vno'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $year = $_POST['year'];
    $mread = $_POST['mread'];
   
    
    $sql=mysqli_query($con,"INSERT INTO vehicle (vehicle_No,Model,Brand,Color,Manu_Year,Meter_Readings,Status) VALUES ('$vno','$model','$brand','$color','$year',' $mread','Approved')");
    if($sql){
       echo "Success!";
    }
    else{
        echo "Unsuccess!!";
    }
}
?>
    <div id="addProjectModal" class="js-modal-window u-modal-window" style="width: 800px;">
        <form class="card mb-9" action="#" method="POST">
            <!-- Header -->
            <header class="card-header bg-light py-3 px-5">
                <div class="row justify-content-between align-items-center no-gutters">

                    <h1>Add New Vehicle </h>

                </div>
            </header>
            <!-- End Header -->

            <div class="card-body pt-3 pb-5 px-5">


                <!-- Personal Info Form -->
                <form class="js-validate" method="POST" action="#">

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="vnoLabel" class="form-label">
                                    Vehicle Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="vno" value=""
                                        placeholder="Enter your vehicle number" aria-label="Enter your  vehicle number"
                                        required aria-describedby="vnoLabel"
                                        data-msg="Please enter your  vehicle number." data-error-class="u-has-error"
                                        data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="moLabel" class="form-label">
                                    Model
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="model" value=""
                                        placeholder="Enter your vehicle model" aria-label="Enter yourvehicle model"
                                        required aria-describedby="moLabel" data-msg="Please enter your vehicle model."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="brLabel" class="form-label">
                                    Brand
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="brand" value=""
                                        placeholder="Enter your vehicle brand" aria-label="Enter your vehicle brand"
                                        aria-describedby="brLabel" data-msg="Please enter vehicle brand."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="clLabel" class="form-label">
                                    Color
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="color" value=""
                                        placeholder="Enter your vehicle color" aria-label="Enter your vehicle color"
                                        aria-describedby="clLabel" data-msg="Please enter your vehicle color."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="yrLabel" class="form-label">
                                    Year
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="year" value=""
                                        placeholder="Enter your vehicle year" aria-label="Enter your vehicle year"
                                        aria-describedby="yrLabel" data-msg="Please enter your vehicle year."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->


                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="mreadLabel" class="form-label">
                                    Meter Readings
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input class="form-control" type="text" name="mread" value=""
                                        placeholder="Enter your vehicle meter readings "
                                        aria-label="Enter your vehicle meter readings " aria-describedby="mreadLabel"
                                        data-msg="Please enter vehicle meter readings " data-error-class="u-has-error"
                                        data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>


                    <label class="form-label">
                        Licence Insurance Expire Date

                        <span class="text-danger">*</span>
                    </label>
                    <div class="row">

                        <!-- Input -->
                        <div class="col-sm-4  mb-3 ">
                            <div class="js-form-message">



                                <div class="form-group">
                                    <select class="form-control custom-select" data-msg="Please select month."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                        <option value="">Select month</option>
                                        <option value="birthMonthSelect1">January</option>
                                        <option value="birthMonthSelect2">February</option>
                                        <option value="birthMonthSelect3">March</option>
                                        <option value="birthMonthSelect4" selected="selected">April</option>
                                        <option value="birthMonthSelect5">May</option>
                                        <option value="birthMonthSelect6">June</option>
                                        <option value="birthMonthSelect7">July</option>
                                        <option value="birthMonthSelect8">August</option>
                                        <option value="birthMonthSelect9">September</option>
                                        <option value="birthMonthSelect10">October</option>
                                        <option value="birthMonthSelect11">November</option>
                                        <option value="birthMonthSelect12">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-4 col-md-4 mb-3 mb-sm-6">
                            <div class="js-form-message">
                                <div class="form-group">
                                    <select class="form-control custom-select" data-msg="Please select date."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                        <option value="">Select date</option>
                                        <option value="birthDateSelect1">1</option>
                                        <option value="birthDateSelect2">2</option>
                                        <option value="birthDateSelect3">3</option>
                                        <option value="birthDateSelect4">4</option>
                                        <option value="birthDateSelect5">5</option>
                                        <option value="birthDateSelect6">6</option>
                                        <option value="birthDateSelect7">7</option>
                                        <option value="birthDateSelect8">8</option>
                                        <option value="birthDateSelect9">9</option>
                                        <option value="birthDateSelect10">10</option>
                                        <option value="birthDateSelect11">11</option>
                                        <option value="birthDateSelect12" selected="selected">12</option>
                                        <option value="birthDateSelect13">13</option>
                                        <option value="birthDateSelect14">14</option>
                                        <option value="birthDateSelect15">15</option>
                                        <option value="birthDateSelect16">16</option>
                                        <option value="birthDateSelect17">17</option>
                                        <option value="birthDateSelect18">18</option>
                                        <option value="birthDateSelect19">19</option>
                                        <option value="birthDateSelect20">20</option>
                                        <option value="birthDateSelect21">21</option>
                                        <option value="birthDateSelect22">22</option>
                                        <option value="birthDateSelect23">23</option>
                                        <option value="birthDateSelect24">24</option>
                                        <option value="birthDateSelect25">25</option>
                                        <option value="birthDateSelect26">26</option>
                                        <option value="birthDateSelect27">27</option>
                                        <option value="birthDateSelect28">28</option>
                                        <option value="birthDateSelect29">29</option>
                                        <option value="birthDateSelect30">30</option>
                                        <option value="birthDateSelect31">31</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div>
                            <!-- Input -->
                            <div class="col-sm-4 col-md-12 mb-3 mb-sm-6">
                                <div class="js-form-message">
                                    <div class="form-group">
                                        <select class="form-control custom-select" data-msg="Please select year."
                                            data-error-class="u-has-error" data-success-class="u-has-success">
                                            <option value="">Select year</option>
                                            <option value="birthYearSelect1900">1900</option>
                                            <option value="birthYearSelect1901">1901</option>
                                            <option value="birthYearSelect1902">1902</option>
                                            <option value="birthYearSelect1903">1903</option>
                                            <option value="birthYearSelect1904">1904</option>
                                            <option value="birthYearSelect1905">1905</option>
                                            <option value="birthYearSelect1906">1906</option>
                                            <option value="birthYearSelect1907">1907</option>
                                            <option value="birthYearSelect1908">1908</option>
                                            <option value="birthYearSelect1909">1909</option>
                                            <option value="birthYearSelect1910">1910</option>
                                            <option value="birthYearSelect1911">1911</option>
                                            <option value="birthYearSelect1912">1912</option>
                                            <option value="birthYearSelect1913">1913</option>
                                            <option value="birthYearSelect1914">1914</option>
                                            <option value="birthYearSelect1915">1915</option>
                                            <option value="birthYearSelect1916">1916</option>
                                            <option value="birthYearSelect1917">1917</option>
                                            <option value="birthYearSelect1918">1918</option>
                                            <option value="birthYearSelect1919">1919</option>
                                            <option value="birthYearSelect1920">1920</option>
                                            <option value="birthYearSelect1921">1921</option>
                                            <option value="birthYearSelect1922">1922</option>
                                            <option value="birthYearSelect1923">1923</option>
                                            <option value="birthYearSelect1924">1924</option>
                                            <option value="birthYearSelect1925">1925</option>
                                            <option value="birthYearSelect1926">1926</option>
                                            <option value="birthYearSelect1927">1927</option>
                                            <option value="birthYearSelect1928">1928</option>
                                            <option value="birthYearSelect1929">1929</option>
                                            <option value="birthYearSelect1930">1930</option>
                                            <option value="birthYearSelect1931">1931</option>
                                            <option value="birthYearSelect1932">1932</option>
                                            <option value="birthYearSelect1933">1933</option>
                                            <option value="birthYearSelect1934">1934</option>
                                            <option value="birthYearSelect1935">1935</option>
                                            <option value="birthYearSelect1936">1936</option>
                                            <option value="birthYearSelect1937">1937</option>
                                            <option value="birthYearSelect1938">1938</option>
                                            <option value="birthYearSelect1939">1939</option>
                                            <option value="birthYearSelect1940">1940</option>
                                            <option value="birthYearSelect1941">1941</option>
                                            <option value="birthYearSelect1942">1942</option>
                                            <option value="birthYearSelect1943">1943</option>
                                            <option value="birthYearSelect1944">1944</option>
                                            <option value="birthYearSelect1945">1945</option>
                                            <option value="birthYearSelect1946">1946</option>
                                            <option value="birthYearSelect1947">1947</option>
                                            <option value="birthYearSelect1948">1948</option>
                                            <option value="birthYearSelect1949">1949</option>
                                            <option value="birthYearSelect1950">1950</option>
                                            <option value="birthYearSelect1951">1951</option>
                                            <option value="birthYearSelect1952">1952</option>
                                            <option value="birthYearSelect1953">1953</option>
                                            <option value="birthYearSelect1954">1954</option>
                                            <option value="birthYearSelect1955">1955</option>
                                            <option value="birthYearSelect1956">1956</option>
                                            <option value="birthYearSelect1957">1957</option>
                                            <option value="birthYearSelect1958">1958</option>
                                            <option value="birthYearSelect1959">1959</option>
                                            <option value="birthYearSelect1960">1960</option>
                                            <option value="birthYearSelect1961">1961</option>
                                            <option value="birthYearSelect1962">1962</option>
                                            <option value="birthYearSelect1963">1963</option>
                                            <option value="birthYearSelect1964">1964</option>
                                            <option value="birthYearSelect1965">1965</option>
                                            <option value="birthYearSelect1966">1966</option>
                                            <option value="birthYearSelect1967">1967</option>
                                            <option value="birthYearSelect1968">1968</option>
                                            <option value="birthYearSelect1969">1969</option>
                                            <option value="birthYearSelect1970">1970</option>
                                            <option value="birthYearSelect1971">1971</option>
                                            <option value="birthYearSelect1972">1972</option>
                                            <option value="birthYearSelect1973">1973</option>
                                            <option value="birthYearSelect1974">1974</option>
                                            <option value="birthYearSelect1975">1975</option>
                                            <option value="birthYearSelect1976">1976</option>
                                            <option value="birthYearSelect1977">1977</option>
                                            <option value="birthYearSelect1978">1978</option>
                                            <option value="birthYearSelect1979">1979</option>
                                            <option value="birthYearSelect1980">1980</option>
                                            <option value="birthYearSelect1981">1981</option>
                                            <option value="birthYearSelect1982">1982</option>
                                            <option value="birthYearSelect1983">1983</option>
                                            <option value="birthYearSelect1984">1984</option>
                                            <option value="birthYearSelect1985">1985</option>
                                            <option value="birthYearSelect1986" selected="selected">1986</option>
                                            <option value="birthYearSelect1987">1987</option>
                                            <option value="birthYearSelect1988">1988</option>
                                            <option value="birthYearSelect1989">1989</option>
                                            <option value="birthYearSelect1990">1990</option>
                                            <option value="birthYearSelect1991">1991</option>
                                            <option value="birthYearSelect1992">1992</option>
                                            <option value="birthYearSelect1993">1993</option>
                                            <option value="birthYearSelect1994">1994</option>
                                            <option value="birthYearSelect1995">1995</option>
                                            <option value="birthYearSelect1996">1996</option>
                                            <option value="birthYearSelect1997">1997</option>
                                            <option value="birthYearSelect1998">1998</option>
                                            <option value="birthYearSelect1999">1999</option>
                                            <option value="birthYearSelect2000">2000</option>
                                            <option value="birthYearSelect2001">2001</option>
                                            <option value="birthYearSelect2002">2002</option>
                                            <option value="birthYearSelect2003">2003</option>
                                            <option value="birthYearSelect2004">2004</option>
                                            <option value="birthYearSelect2005">2005</option>
                                            <option value="birthYearSelect2006">2006</option>
                                            <option value="birthYearSelect2007">2007</option>
                                            <option value="birthYearSelect2008">2008</option>
                                            <option value="birthYearSelect2009">2009</option>
                                            <option value="birthYearSelect2010">2010</option>
                                            <option value="birthYearSelect2011">2011</option>
                                            <option value="birthYearSelect2012">2012</option>
                                            <option value="birthYearSelect2013">2013</option>
                                            <option value="birthYearSelect2014">2014</option>
                                            <option value="birthYearSelect2015">2015</option>
                                            <option value="birthYearSelect2016">2016</option>
                                            <option value="birthYearSelect2017">2017</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <!-- Input -->
                    <div class="js-form-message mb-6">
                        <label class="form-label">
                            Damages
                            <span class="text-danger">*</span>
                        </label>

                        <textarea class="form-control" rows="4" name="damage"
                            placeholder="Mession Your vehicle damages " aria-label="Mession Your vehicle dmages"
                            data-msg="Please menssion your vehicle damages" data-error-class="u-has-error"
                            data-success-class="u-has-success"></textarea>
                    </div>
                    <!-- End Input -->
                    <!-- Buttons -->

                    <div class="d-flex">
                        <input type="submit" name="submit" value="Add"
                            class="btn btn-sm btn-primary transition-3d-hover mr-1 ">
                        <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                            onclick="Custombox.modal.close();">Cancel</button>
                    </div>

                    <!-- End Buttons -->
                </form>
                <!-- End Personal Info Form -->


                <!-- End Add New Vehicle Modal Window -->
</div>
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
<?php
}else{
	echo "<script>alert('Please Login First');window.location='../index.php';</script>";
}
?>