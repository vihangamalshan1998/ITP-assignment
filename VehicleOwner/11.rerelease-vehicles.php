<?php 
  session_start();
  include '../config.php';
  $ss =  $_SESSION['uid'];
  if(isset($_SESSION['mysess'])){
  $sql2 =  mysqli_query($con,"SELECT * FROM user WHERE user_id = '$ss'");
  if($sql2){
    while($record=mysqli_fetch_array($sql2)){
      $name=$record['Fname'];
      $email=$record['Email'];
     
      //echo $name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Request Release Vehicles</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/vendor/custombox/dist/custombox.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="../assets/vendor/hs-megamenu/src/hs.megamenu.css">
    <link rel="stylesheet" href="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/new.css">
</head>

<body class="u-custombox-no-scroll">
    <!-- ========== HEADER ========== -->
    <?php 

include ('../header.php');

?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Breadcrumb Section -->
        <div class="bg-primary  mgtop">
            <div class="container space-top-1 pb-3">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
                        <div
                            class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
                            <!-- Breadcrumb -->
                            <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                                <li class="breadcrumb-item"><a class="breadcrumb-link"
                                        href="../home/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="4.profile.php">Profile</a>
                                </li>
                                <li class="breadcrumb-item"><a class="breadcrumb-link"
                                        href="8.vehicle-details.php">Vehicle Details</a>
                                </li>
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="8.4.requests.php">Requests</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Requests for Releasing Vehicles
                                </li>
                            </ol>
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
                                <h1 class="h3 text-white font-weight-medium mb-1">Welcome,<?php echo $name=$record['Fname'];?>!</h1>
                                <span class="d-block text-white"><?php echo $name=$record['Email'];?>/span>
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

                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->

        <!-- Content Section -->
        <div class="bg-light">
            <div class="container space-2">
                <div class="card">
                    <div class="card-header py-4 px-0 mx-4">
                        <!-- Activity Menu -->
                        <div class="row justify-content-sm-between align-items-sm-center">
                            <div class="col-md-5 col-lg-4 mb-2 mb-md-0">


                            </div>

                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <!-- Select -->
                                        <select id="datatableEntries" class="js-select selectpicker dropdown-select"
                                            data-width="fit" data-style="btn-soft-primary btn-sm">
                                            <option value="6">6 entries</option>
                                            <option value="12" selected>12 entries</option>
                                            <option value="18">18 entries</option>
                                            <option value="24">24 entries</option>
                                        </select>
                                        <!-- End Select -->
                                    </div>

                                    <!-- Search -->
                                    <div class="js-focus-state input-group input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="searchActivities">
                                                <span class="fas fa-search"></span>
                                            </span>
                                        </div>
                                        <input id="datatableSearch" type="email" class="form-control"
                                            placeholder="Search Vehicles" aria-label="Search activities"
                                            aria-describedby="searchActivities">
                                    </div>
                                    <!-- End Search -->
                                </div>
                            </div>
                        </div>
                        <!-- End Activity Menu -->
                    </div>

                    <div class="card-body p-4">
                        <!-- Activity Table -->
                        <div class="table-responsive-md u-datatable">
                        <?php

include ('config.php');


$sql = "SELECT  * FROM vehicle  WHERE Status = 'Pending' ";

$results = $con->query($sql);

if ($results->num_rows > 0  )
{


?>
                            <table
                                class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                                data-dt-info="#datatableInfo" data-dt-search="#datatableSearch"
                                data-dt-entries="#datatableEntries" data-dt-page-length="12"
                                data-dt-is-responsive="false" data-dt-is-show-paging="true"
                                data-dt-details-invoker=".js-datatabale-details"
                                data-dt-select-all-control="#invoiceToggleAllCheckbox"
                                data-dt-pagination="datatablePagination" data-dt-pagination-classes="pagination mb-0"
                                data-dt-pagination-items-classes="page-item"
                                data-dt-pagination-links-classes="page-link" data-dt-pagination-next-classes="page-item"
                                data-dt-pagination-next-link-classes="page-link"
                                data-dt-pagination-next-link-markup='<span aria-hidden="true">&raquo;</span>'
                                data-dt-pagination-prev-classes="page-item"
                                data-dt-pagination-prev-link-classes="page-link"
                                data-dt-pagination-prev-link-markup='<span aria-hidden="true">&laquo;</span>'>
                                <thead>
                                    <tr class="text-uppercase font-size-1">
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Request Id
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Vehicle Number
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Request Date
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Required Date
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Description
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="font-size-1">
                                <?php                             
while($row = $results->fetch_array())
{

    ?>
                                    <tr class="js-datatabale-details" data-details='
                    <div class="border rounded p-5">
                      <h4 class="h3">Request Release Vehicle Details</h4>


                      <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <h5 class="text-dark font-size-1 text-uppercase">Request Info:</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                              <span class="text-secondary">Request Id:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Request Date:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Requried Date:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Description:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            </ul>
                        </div>

                        
                                
                        <div class="col-sm-6">
                          <h5 class="text-dark font-size-1 text-uppercase">Vehicle info:</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                              <span class="text-secondary">Vehicle Number:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Model:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Brand:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Color:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Year:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Exp Date:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Meter Readings:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Damages:</span>
                              <span class="font-weight-medium"><?php echo $row["Brand"]; ?></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- Button -->
                                            <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover"
                                               href = "11.2.delete-release.php">
                                                <span class="fas fa-plus small mr-2"></span>
                                               Delete
                                            </a>
                                            <!-- End Button -->

                                            <!-- Button -->
                                            <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover"
                                                href="11.1.edit-release.php" >
                                                <span class="fas fa-plus small mr-2"></span>
                                                Edit
                                            </a>
                                            <!-- End Button -->
                      <div class="row justify-content-end mb-4">
                        <div class="col-sm-6">
                          <hr class="my-4">

                          <h5 class="text-dark font-size-1 text-uppercase">Rental details:</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between align-items-center mb-2">
                              <span class="text-secondary">Monthly amount</span>
                              <span class="font-weight-medium">Rs.25000</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-2">
                              <span class="text-secondary">Yearly amount</span>
                              <span class="font-weight-medium">Rs.25000 * 12</span>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <ul class="list-inline mb-0">
                        <li class="list-inline-item u-ver-divider pr-3 mr-3">
                          <a href="#">
                            <span class="fas fa-file-word text-secondary mr-1"></span>
                            Download Request Details
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <span class="fas fa-print text-secondary mr-1"></span>
                            Print details
                          </a>
                        </li>
                      </ul>
                    </div>'>
                                        <td
                                            class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">
                                            <?php echo $row["Brand"]; ?></td>
                                        <td
                                            class="align-middle text-secondary font-weight-normal u-datatable__trigger-icon">
                                            <?php echo $row["Brand"]; ?></td>
                                        <td class="align-middle">
                                            <div class="media align-items-center">
                                               
                                                <span><?php echo $row["Brand"]; ?></span>
                                            </div>
                                        </td>
                                        <td class="align-middle text-primary"><?php echo $row["Brand"]; ?></td>
                                        <td class="align-middle text-secondary"><?php echo $row["Brand"]; ?></td>

                                    </tr>
                                    <?php
                   
                }
               
                }else{
                
                    echo"0 results";
                
                }
                
                $con->close();
                
                ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- End Activity Table -->

                        <!-- Pagination -->
                        <div class="d-flex align-items-center">
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>

                            <small id="datatableInfo" class="text-secondary ml-auto"></small>
                        </div>
                        <!-- End Pagination -->
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

                        <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true"
                            aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                            data-unfold-target="#sidebarContent" data-unfold-type="css-animation"
                            data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
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
                                <img class="u-sidebar--account__holder-img" src="../../assets/img/100x100/img1.jpg"
                                    alt="Image Description">
                                <span class="badge badge-xs badge-outline-success badge-pos rounded-circle"></span>
                            </div>
                            <div class="ml-3">
                                <span class="font-weight-semi-bold">Natalie Curtis <span
                                        class="badge badge-success ml-1">Pro</span></span>
                                <span class="u-sidebar--account__holder-text">Lead Support Adviser</span>
                            </div>

                            <!-- Settings -->
                            <div class="btn-group position-relative ml-auto mb-auto">
                                <a id="sidebar-account-settings-invoker"
                                    class="btn btn-xs btn-icon btn-text-secondary rounded" href="javascript:;"
                                    role="button" aria-controls="sidebar-account-settings" aria-haspopup="true"
                                    aria-expanded="false" data-toggle="dropdown" data-unfold-event="click"
                                    data-unfold-target="#sidebar-account-settings" data-unfold-type="css-animation"
                                    data-unfold-duration="300" data-unfold-delay="300"
                                    data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    <span class="fas fa-ellipsis-v btn-icon__inner"></span>
                                </a>

                                <div id="sidebar-account-settings"
                                    class="dropdown-menu dropdown-unfold dropdown-menu-right"
                                    aria-labelledby="sidebar-account-settings-invoker">
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
                        <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg"
                            alt="Image Description" data-parent="#SVGwaveWithDots">
                    </div>
                    <!-- End SVG Background Shape -->
                </footer>
                <!-- End Footer -->
            </div>
        </div>
    </aside>
    <!-- End Account Sidebar Navigation -->

    <!-- Add New Vehicle Modal Window -->
    <div id="addProjectModal" class="js-modal-window u-modal-window" style="width: 800px;">
        <form class="card mb-9">
            <!-- Header -->
            <header class="card-header bg-light py-3 px-5">
                <div class="row justify-content-between align-items-center no-gutters">

                    <h1>Request to Release Vehicle </h>

                </div>
            </header>
            <!-- End Header -->

            <div class="card-body pt-3 pb-5 px-5">

                <!-- Vehicle Info Form -->
                <form class="js-validate">
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="fnameLabel" class="form-label">
                                    Vehicle Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" value=""
                                        placeholder="Enter your first name" aria-label="Enter your first name" required
                                        aria-describedby="fnameLabel" data-msg="Please enter your first name."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->


                    </div>

                    <label class="form-label">
                        Request Date

                        <span class="text-danger">*</span>
                    </label>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-4 col-md-4 mb-3 mb-sm-6">
                            <div class="js-form-message">
                                <div class="form-group">
                                    <select class="form-control custom-select" required data-msg="Please select month."
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
                                    <select class="form-control custom-select" required data-msg="Please select date."
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
                                        <select class="form-control custom-select" required
                                            data-msg="Please select year." data-error-class="u-has-error"
                                            data-success-class="u-has-success">
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

                    <label class="form-label">
                        Required Date
                        <span class="text-danger">*</span>
                    </label>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-4 col-md-4 mb-3 mb-sm-6">
                            <div class="js-form-message">
                                <div class="form-group">
                                    <select class="form-control custom-select" required data-msg="Please select month."
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
                                    <select class="form-control custom-select" required data-msg="Please select date."
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
                                        <select class="form-control custom-select" required
                                            data-msg="Please select year." data-error-class="u-has-error"
                                            data-success-class="u-has-success">
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
                </form>
                <!-- End Personal Info Form -->


                <!-- Buttons -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Save</button>
                    <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                        onclick="Custombox.modal.close();">Cancel</button>
                </div>
                <!-- End Buttons -->
            </div>
        </form>
    </div>
    <!-- End Add New Vehicle Modal Window -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
        data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
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
    <script src="../../assets/vendor/custombox/dist/custombox.min.js"></script>
    <script src="../../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>
    <script src="../../assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="../../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
    <script src="../../assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="../../assets/vendor/datatables/media/js/jquery.dataTables.min.js"></script>
    <!-- JS Front -->
    <script src="../../assets/js/hs.core.js"></script>
    <script src="../../assets/js/components/hs.header.js"></script>
    <script src="../../assets/js/components/hs.unfold.js"></script>
    <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="../../assets/js/components/hs.focus-state.js"></script>
    <script src="../../assets/js/components/hs.modal-window.js"></script>
    <script src="../../assets/js/components/hs.selectpicker.js"></script>
    <script src="../../assets/js/components/hs.range-datepicker.js"></script>
    <script src="../../assets/js/components/hs.svg-injector.js"></script>
    <script src="../../assets/js/components/hs.go-to.js"></script>
    <script src="../../assets/js/components/hs.datatables.js"></script>

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

        // initialization of datatables
        $.HSCore.components.HSDatatables.init('.js-datatable');

        // initialization of autonomous popups
        $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
            autonomous: true
        });

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');

        // initialization of range datepicker
        $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

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