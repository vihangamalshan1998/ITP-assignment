<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>User Pending List </title>

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
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/vendor/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <link rel="stylesheet" href="../../assets/css/new.css">
</head>

<body class="u-custombox-no-scroll">
    <!-- ========== HEADER ========== -->

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
         <!-- Breadcrumb Section -->
         <div class="bg-dark">
            <div class="container space-top-1 pb-3">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
                        <div
                            class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
                               <!-- Breadcrumb -->
                        <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                                <li class="breadcrumb-item"><a class="breadcrumb-link"
                                        href="admin-dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a class="breadcrumb-link"
                                        href="pending-list.php">Pending Lists</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Pending List</li>
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
                            <div class="media-body">
                                <h1 class="h3 text-white font-weight-medium mb-1">Kumara Rent A Car</h1>
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
                                                Customer
                                            </a>

                                            <ul id="generalDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="generalDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">View
                                                        Customers</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Replacement</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Agreements</a></li>
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
                                                Driver
                                            </a>

                                            <ul id="accountSettingsDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">View
                                                        Drivers</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Replacement</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Requested
                                                        Drivers</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Agreements</a></li>
                                            </ul>
                                        </li>
                                        <!-- Account Settings -->

                                        <!-- Billing -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="billingDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="billingDropdownMenu">
                                                Vehicle Owner
                                            </a>

                                            <ul id="billingDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="billingDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Add Vehicle
                                                        Owner</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Add
                                                        Vehicle</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Agreements</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">View</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Billing -->

                                        <!-- Accessibility -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accessibilityDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accessibilityDropdownMenu">
                                                Inventory
                                            </a>

                                            <ul id="accessibilityDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Items</a>
                                                </li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Orders</a>
                                                </li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="#">Supplier</a></li>
                                            </ul>
                                        </li>
                                        <!-- Accessibility -->

                                        <!-- Accessibility -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accessibilityDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accessibilityDropdownMenu">
                                                Supportive Services
                                            </a>

                                            <ul id="accessibilityDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Service
                                                        Details</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Garage
                                                        Details</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Licence &
                                                        Insurance</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">Fuel</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- Accessibility -->

                                        <!-- Accessibility -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accessibilityDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accessibilityDropdownMenu">
                                                Reservation
                                            </a>

                                            <ul id="accessibilityDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href="#">View
                                                        Reservation</a></li>
                                            </ul>
                                        </li>
                                        <!-- Accessibility -->

                                        <!-- Others -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="payment.php">Payments</a>
                                        </li>

                                        <!-- Others -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- End Navbar -->

                    <div class="ml-lg-auto">
                        <!-- Button -->
                        <a class="btn btn-sm btn-soft-white text-nowrap transition-3d-hover"
                            style="background-color:red;" href="../index.php?logout=true">Logout</a>
                        <!-- End Button -->
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


$sql = "SELECT UserName,NIC,Password,Email,Address,Status,Fname,Lname FROM user WHERE Status = 'Pending'";

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
                                                NIC
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Username
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Password
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Status
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
                                        <th scope="col" class="font-weight-medium">
                                            <div class="d-flex justify-content-between align-items-center">
                                                Approve
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
                      <h4 class="h3">User Details</h4>


                      <div class="row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <h5 class="text-dark font-size-1 text-uppercase">Images:</h5>
                          
                        </div>

                        
                                
                        <div class="col-sm-6">
                          <h5 class="text-dark font-size-1 text-uppercase">User info:</h5>
                          <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                              <span class="text-secondary">NIC:</span>
                              <span class="font-weight-medium"><?php echo $row["NIC"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">First Name:</span>
                              <span class="font-weight-medium"><?php echo $row["Fname"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Last Name:</span>
                              <span class="font-weight-medium"><?php echo $row["Lname"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Username:</span>
                              <span class="font-weight-medium"><?php echo $row["UserName"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Password:</span>
                              <span class="font-weight-medium"><?php echo $row["Password"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Email:</span>
                              <span class="font-weight-medium"><?php echo $row["Email"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Address:</span>
                              <span class="font-weight-medium"><?php echo $row["Address"] ?></span>
                            </li>
                            <li class="mb-2">
                              <span class="text-secondary">Phone Number:</span>
                              <span class="font-weight-medium"><?php echo $row["UserName"] ?></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                     
                      <div class="row justify-content-end mb-4">
                        <div class="col-sm-6">
                          <hr class="my-4">
                  
                     

                                            <!-- Button -->
                                            <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover"
                                                href="10.1.edit-vehicle.php" >
                                                <span class="fas fa-plus small mr-2"></span>
                                                Add Black List
                                            </a>
                                            <!-- End Button -->
                        </div>
                      </div>

                      <ul class="list-inline mb-0">
                        <li class="list-inline-item u-ver-divider pr-3 mr-3">
                          <a href="#">
                            <span class="fas fa-file-word text-secondary mr-1"></span>
                            Download User Details
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
                                            <?php echo $row["NIC"];?></td>
                                        <td class="align-middle">
                                            <div class="media align-items-center">

                                                <span> <?php echo $row["UserName"] ?></span>
                                            </div>
                                        </td>
                                        <td class="  text-primary"> <?php echo $row["Password"]; ?></td>
                                        <td class="align-middle text-secondary"><?php echo $row["Status"]; ?>
                                        </td>
                                        <td class="align-middle text-danger"> <?php echo $row["UserName"] ;?></td>
                                        <td class="align-middle text-danger">
                                             <!-- Button -->
                            <a class="btn btn-sm btn-primary text-nowrap transition-3d-hover" href="#addProjectModal"
                                data-modal-target="#addProjectModal">
                               
                               Approve
                            </a>
                            <!-- End Button -->


                                        </td>
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

include ('footer.php');

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

    <!-- Add New User Modal Window -->
    <div id="addProjectModal" class="js-modal-window u-modal-window" style="width: 800px;">
        <form class="card mb-9">
            <!-- Header -->
            <header class="card-header bg-light py-3 px-5">
                <div class="row justify-content-between align-items-center no-gutters">

                    <h1>Add New User </h>

                </div>
            </header>
            <!-- End Header -->

            <div class="card-body pt-3 pb-5 px-5">

                <!-- Personal Info Form -->
                <form class="js-validate" method="POST" action="#">
                    <h3>Personal Details</h3>
                    <hr class="my-3">
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="fnameLabel" class="form-label">
                                    First Name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your first name" aria-label="Enter your first name" required
                                        aria-describedby="fnameLabel" data-msg="Please enter your first name."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="lnameLabel" class="form-label">
                                    Last Name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your last name" aria-label="Enter your last name" required
                                        aria-describedby="lnameLabel" data-msg="Please enter your last name."
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
                                <label id="unameLabel" class="form-label">
                                    User Name
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="uname" value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your username" aria-label="Enter your username" required
                                        aria-describedby="unameLabel" data-msg="Please enter your username."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="pwdLabel" class="form-label">
                                    Password
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="pwd" value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your password" aria-label="Enter your password" required
                                        aria-describedby="lnameLabel" data-msg="Please enter your password."
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
                                <label id="nicLabel" class="form-label">
                                    NIC Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="nic" value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your NIC Number" aria-label="Enter your NIC Number" required
                                        aria-describedby="nicLabel" data-msg="Please enter your NIC Number."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

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
                                    <input class="form-control" type="tel" name="phoneNumber"value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your phone number" aria-label="Enter your phone number"
                                        aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number"
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
                                <label id="emailLabel" class="form-label">
                                    Email address
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" value="<?php echo $row["Fname"]; ?>"
                                        placeholder="Enter your email address" aria-label="Enter your email address" required
                                        aria-describedby="emailLabel" data-msg="Please enter a valid email address."
                                        data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="locationLabel" class="form-label">
                                    Address
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="location" value="<?php echo $row["Lname"]; ?>"
                                        placeholder="Enter your address" aria-label="Enter your address" required
                                        aria-describedby="locationLabel" data-msg="Please enter your address."
                                        data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <h3>Documents</h3>
                    <hr class="my-5">
                    
                    <label class="btn btn-sm btn-primary transition-3d-hover file-attachment-btn mb-1 mb-sm-0 mr-1"
                        for="fileAttachmentBtn">
                        Upload NIC Copy
                        <input id="fileAttachmentBtn" name="file-attachment" type="file"
                            class="file-attachment-btn__label">
                    </label>

                    <button type="submit"
                        class="btn btn-sm btn-soft-secondary transition-3d-hover mb-1 mb-sm-0">Delete</button>

                    <hr class="my-5">

                       <!-- Buttons -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Save</button>
                    <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                        onclick="Custombox.modal.close();">Cancel</button>
                </div>
                <!-- End Buttons -->
                
                </form>
                <!-- End Personal Info Form -->

               
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