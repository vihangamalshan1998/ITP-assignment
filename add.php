<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Add New Vehicle</title>

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
    <link rel="stylesheet" href="../../assets/css/new.css">

</head>

<body>
    <!-- ========== HEADER ========== -->
    <?php 

    include ('header.php');
 
?>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Breadcrumb Section -->
        <div class="bg-primary mgtop">
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
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="8.vehicle-details.php">Vehicle Details</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add New Vehicle</li>
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
                                <img class="img-fluid rounded-circle" src="../../assets/img/160x160/img2.jpg"
                                    alt="Image Description">
                                <span
                                    class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h1 class="h3 text-white font-weight-medium mb-1">Welcome,Username</h1>
                                <span class="d-block text-white">natalie.curtis@gmail.com</span>
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
                                                        href="4.profile.php">Profile</a></li>

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
                                                        href="4.1.edit-profile.php">Edit profile</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="4.2.change-password.php">Change password</a></li>

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
                                                Payments
                                            </a>

                                            <ul id="billingDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="billingDropdown">

                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="payments.php">Payment History</a></li>
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
                                                        href="">Details</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="">Available Vehicles</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="">Unavailable Vehicles</a></li>
                                            </ul>
                                        </li>
                                        <!-- Vehicle Details  -->

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
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href=".php">Payment
                                                        History </a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link" href=".php">Vehicle
                                                        Details </a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href=".php">Availability List</a></li>
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
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->
        <?php
include ('config.php');

if(isset($_POST['submit']))
{
    $vno = $_POST['vno'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $year = $_POST['year'];
    $mread = $_POST['mread'];
   
    
    $sql=mysqli_query($con,"INSERT INTO vehicle (vehicle_No,Model,Brand,Color,Manu_Year,Meter_Readings,Status) VALUES ('$vno','$model','$brand','$color','$year',' $mread','Pending')");
    if($sql){
       echo "Success!";
    }
    else{
        echo "Unsuccess!!";
    }
}
?>
        <!-- Content Section -->
        <div class="bg-light">
            <div class="container space-2">
       

                <!-- Personal Info Form -->
                <form class="js-validate" method = "POST" action = "#">
                <h2>Add New Vehicle</h2>
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
                                        placeholder="Enter your vehicle number" aria-label="Enter your  vehicle number"required
                                         aria-describedby="vnoLabel"
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
                                        placeholder="Enter your vehicle meter readings " aria-label="Enter your vehicle meter readings "
                                         aria-describedby="mreadLabel" 
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
                                    <select class="form-control custom-select"  data-msg="Please select month."
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
                                    <select class="form-control custom-select"  data-msg="Please select date."
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
                                        <select class="form-control custom-select" 
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
                    <input type="submit" name="submit" value="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1 ">
                    <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                        onclick="Custombox.modal.close();">Cancel</button>
                </div>

                <!-- End Buttons -->
                </form>
                <!-- End Personal Info Form -->

               

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