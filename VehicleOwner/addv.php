
<?php 
  session_start();
  include '../config.php';
  $id =  $_SESSION['uid'];
  $nic="";
  //echo $id;
  if(isset($_SESSION['mysess'])){
  $sql =  mysqli_query($con,"SELECT * FROM user WHERE user_id = '$id'");
  if($sql){
    while($record=mysqli_fetch_array($sql)){
      $name=$record['Fname'];
      $email=$record['Email'];
      $nic = $record['NIC'];
      echo $nic;
     
    }
}
}else{

  echo "<script>alert('Please Login First');window.location='../login.php';</script>";
}
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Add Vehicle</title>

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
    <link rel="stylesheet" href="../assets/vendor/summernote/dist/summernote-lite.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/flatpickr.min.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/new.css">

</head>

<body>
    <!-- ========== HEADER ========== -->

    <?php 
    

           include ('../header.php');
    
        ?>
    <!-- ========== END HEADER ========== -->
    <?php
    
include ('../config.php');

if(isset($_POST['submit']))
{
  
    $vno = $_POST['vno'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $year = $_POST['year'];
    $mread = $_POST['mread'];
    $date = $_POST['date'];
    $damage = $_POST['damage'];

    $img = $_FILES['image']['name'];
    $img1 = $_FILES['image1']['name'];
    $img2= $_FILES['image2']['name'];
    $img3= $_FILES['image3']['name'];
    $img4 = $_FILES['image4']['name'];
    $img5 = $_FILES['copyof']['name'];

    $sql=mysqli_query($con,"INSERT INTO vehicle (vehicle_No,Model,Brand,Color,Manu_Year,Meter_Readings,Status,Reg_Date,Description,NIC) VALUES ('$vno','$model','$brand','$color','$year',' $mread','Pending', '$date',' $damage','$nic')");
    
    if($sql){
        $sql2 = mysqli_query($con,"INSERT INTO vehicle_images VALUES ('$vno','$img','$img1','$img2','$img3','$img4','$img5')");
        if($sql2){
            $path='img/';
            move_uploaded_file($_FILES["image"]["tmp_name"],$path.$img);
            move_uploaded_file($_FILES["image1"]["tmp_name"],$path.$img1);
            move_uploaded_file($_FILES["image2"]["tmp_name"],$path.$img2);
            move_uploaded_file($_FILES["image3"]["tmp_name"],$path.$img3);
            move_uploaded_file($_FILES["image4"]["tmp_name"],$path.$img4);
            move_uploaded_file($_FILES["copyof"]["tmp_name"],$path.$img5);
        }else{
            //echo "failed!!";
        }
    }
    else{
        //echo "Unsuccess!!";
    }

}
?>
    <!-- ========== MAIN ========== -->

    <div class="bg-light">
        <div class="container space-2">
            <main id="content" role="main">
                <!-- Breadcrumb Section -->
                <div class="bg-primary ">


                    <div class="container space-bottom-1 space-bottom-lg-0">
                        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
                            <!-- Navbar -->

                            <!-- End Navbar -->


                        </div>
                    </div>
                </div>
                <!-- End Breadcrumb Section -->

                <!-- Content Section -->
                <div class="bg-light">
                    <div class="container space-2">
                        <!-- Personal Info Form -->
                        <form class="js-validate" method="POST" action="" enctype="multipart/form-data">

                            <h2><b>Vehicle Details</b></h2><br>
                            <hr class="my-3">
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
                                                placeholder="Enter your vehicle number"
                                                aria-label="Enter your  vehicle number" required
                                                aria-describedby="vnoLabel"
                                                data-msg="Please enter your  vehicle number."
                                                data-error-class="u-has-error" data-success-class="u-has-success">

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
                                                placeholder="Enter your vehicle model"
                                                aria-label="Enter yourvehicle model" required aria-describedby="moLabel"
                                                data-msg="Please enter your vehicle model."
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
                                                placeholder="Enter your vehicle brand"
                                                aria-label="Enter your vehicle brand" aria-describedby="brLabel"
                                                data-msg="Please enter vehicle brand." data-error-class="u-has-error"
                                                data-success-class="u-has-success">

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
                                                placeholder="Enter your vehicle color"
                                                aria-label="Enter your vehicle color" aria-describedby="clLabel"
                                                data-msg="Please enter your vehicle color."
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
                                                placeholder="Enter your vehicle year"
                                                aria-label="Enter your vehicle year" aria-describedby="yrLabel"
                                                data-msg="Please enter your vehicle year."
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
                                                aria-label="Enter your vehicle meter readings "
                                                aria-describedby="mreadLabel"
                                                data-msg="Please enter vehicle meter readings "
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
                                        <label class="form-label">
                                            Licence Insurance Expire Date

                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="date" class="form-control" name="date" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>
                                <!-- Input -->

                            </div>

                            <!-- Input -->
                            <div class="js-form-message mb-6">
                                <label class="form-label">
                                    Damages
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea type="text" class="form-control" rows="4" name="damage"
                                    placeholder="Mession Your vehicle damages " aria-label="Mession Your vehicle dmages"
                                    data-msg="Please menssion your vehicle damages" data-error-class="u-has-error"
                                    data-success-class="u-has-success"></textarea>
                            </div>
                            <!-- End Input -->

                            <h2><b>Vehicle Images</b></h2><br>
                            <hr class="my-3">
                            <div class="row">
                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="js-form-message">
                                        <label id="emailLabel" class="form-label">
                                            Image 1
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>
                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="js-form-message">
                                        <label id="emailLabel" class="form-label">
                                            Image 2
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image1" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>





                            </div>
                            <!-- End Input -->

                            <div class="row">
                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="js-form-message">
                                        <label id="emailLabel" class="form-label">
                                            Image 3
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image2" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>
                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="js-form-message">
                                        <label id="emailLabel" class="form-label">
                                            Image 4
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image3" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Input -->
                            <div class="row">
                                <!-- Input -->
                                <div class="col-sm-6 mb-6">
                                    <div class="js-form-message">
                                        <label id="emailLabel" class="form-label">
                                            Image 5
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image4" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-6">
                                    <div class="js-form-message">
                                        <label id="emailLabel" class="form-label">
                                            Vehicle Book Copy
                                            <span class="text-danger">*</span>
                                        </label>

                                        <div class="form-group">
                                            <input type="file" class="form-control" name="copyof" value=""
                                                placeholder="Select the image">

                                        </div>
                                    </div>
                                </div>


                                <!-- Buttons -->

                                <div class="d-flex">
                                    <input type="submit" name="submit" value="Add"
                                        class="btn btn-sm btn-primary transition-3d-hover mr-1 ">
                                    <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover"
                                        onclick="Custombox.modal.close();">Cancel</button>
                                </div>

                                <!-- End Buttons -->


                            </div>



                    </div>

                </div>



        </div>






        </form>
        <!-- End Personal Info Form -->


    </div>
    </div>
    <!-- End Content Section -->
    </main>
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <?php 

    include '../footer.php';
 
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
                                <img class="u-sidebar--account__holder-img" src="assets/img/100x100/img1.jpg"
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
                <?php include '../footer.php'; ?>
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

    <!-- JS Globa Compulsory -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
    <script src="../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/summernote/dist/summernote-lite.js"></script>
    <script src="../assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <script src="../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>

    <!-- JS Front -->
    <script src="../assets/js/hs.core.js"></script>
    <script src="../assets/js/components/hs.header.js"></script>
    <script src="../assets/js/components/hs.unfold.js"></script>
    <script src="../assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="../assets/js/components/hs.focus-state.js"></script>
    <script src="../assets/js/components/hs.validation.js"></script>
    <script src="../assets/js/components/hs.summernote-editor.js"></script>
    <script src="../assets/js/components/hs.range-datepicker.js"></script>
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

