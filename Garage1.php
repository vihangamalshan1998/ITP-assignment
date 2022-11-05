<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Add Garage Details</title>

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
</head>

<body>

    <?php
    include 'config.php';
    
    include 'header.php';

    $sql2=mysqli_query($con,"SELECT * FROM ");

    
    if(isset($_POST['Insert'])){

        $Garage_Name= $_POST['Gname'];
        $Repaired_Date= $_POST['Gdate'];
        $Vehicle_No=$_POST['Vehicle_num'];
        $Garage_Address=$_POST['Gaddress'];
        $Garage_phone_no=$_POST['Gphone'];
        $Description=$_POST['gdescription'];
        $Total_Amount=$_POST['tAmount'];
        $Bill=$_FILES['Gbill']['name'];



        $sql1 = mysqli_query($con,"INSERT INTO Support_service (Vehicle_No,Total_Amount, Description, Scanned_copy_of_Bill)
        VALUES ('$Vehicle_No','$Total_Amount','$Description','$Bill')");

        $gid = mysqli_insert_id($con);

    if ($sql1){
        $path='images/';
        move_uploaded_file($_FILES["Gbill"]["tmp_name"],$path.$Bill);
              
        $sql1 = mysqli_query($con,"INSERT INTO Garage (G_ID,Garage_Name,Repaired_Date,Garage_phone_no,Garage_Address)
        VALUES ('$gid','$Garage_Name','$Repaired_Date','$Garage_phone_no','$Garage_Address')");
        //echo"Successful";

    }else{
        echo"Error: " .$sql . "<br>" . $conn->error;
    }

    $sql2=mysqli_query($con,"SELECT S_ID FROM Support_service");


}


    ?>

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Breadcrumb Section -->
        <div class="bg-primary">
            

            <div class="container space-bottom-1 space-bottom-lg-0">
                <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
                    

                    <div class="ml-lg-auto">

                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->
        <div class="row">
            <style>
                div.a {
                    text-align: center;
                }
            </style>
            <div class="container">
                <div class="a">
                    <div class="col-sm-12 mb-1"><br>
                        <h2>Add Garage Details</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--Start Form-->
        <!-- Content Section -->
        <div class="bg-light">
            <div class="container space-2">


                <!-- Personal Info Form -->
                <form method="POST" class="js-validate" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="nameLabel" class="form-label">
                  Vehicle Number
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Vehicle_num" placeholder="SP BAC-xxxx" aria-label="Enter Vehicle No" required aria-describedby="numLabel" data-msg="Please enter Vehicle number" data-error-class="u-has-error" data-success-class="u-has-success">
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="SnameLabel" class="form-label">
                  Garage name
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Gname" placeholder="ex-Saman Motors" aria-label="Gname" required aria-describedby="usernameLabel" data-msg="Please enter Garage name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="Sdate" class="form-label">
                                    Garage Date
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="date" class="form-control" name="Gdate" placeholder="Enter Service Date" aria-label="Enter Repaired date" required aria-describedby="SdateLabel" data-msg="Please enter Repaired date." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->


                    </div>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="SdateLabel" class="form-label">
                  Garage Address
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Gaddress" placeholder="Enter Garage Address" aria-label="Enter Garage address" required aria-describedby="emailLabel" data-msg="Please enter address." data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="phoneNo" class="form-label">
                                    Garage Phone Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Gphone" placeholder="Enter Garage Phone Number" aria-label=" Enter Service phone" required aria-describedby="Garage" data-msg="Please Enter phone No." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>
                    <div class="row mt-1">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-1">
                            <div class="js-form-message">
                            <label id="bill" class="form-label">
                                    Scanned copy of bill<br>
                                    <span class="text-danger">*</span>
                            <input type="file" name="Gbill"  /> 
                        </div>             
                        </div>
                    </div>




                    

                    

                    <style> 
textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>

                    <div class="row mt-5">
                        <div class="col-sm-12 mb-12">
                            <div class="textarea">
                        <div class="js-form-message">
                                <label id="phoneNo" class="form-label">
                                    Description
                                    <span class="text-danger"></span>
                                </label>
                                <div class="input-group">
                                    <input type="textarea" name="gdescription" class="form-control" placeholder="Tell about yourself in two sentences"><br><br>
                                </div>
                        </div>
                        </div>
                    </div>
                    </div>


                    <div class="row mt-5">
                        <div class="col-sm-6 mb-6">
                            <label id="companyLabel" class="form-label">Total Amount</label>

                            <!-- Input -->
                            <div class="input-group">
                                <input type="text" name="tAmount"class="form-control" placeholder="Enter Total Amount of Garage" aria-label="Amount" required aria-describedby="amountLabel" data-msg="Please enter Total Amount" data-error-class="u-has-error" data-success-class="u-has-success">
                            </div>
                            <!-- End Input -->
                        </div>

                        <div class="col-sm-6 mb-6">


                            <!-- Input -->

                            <!-- End Input -->
                        </div>
                    </div>

                    <!-- Buttons -->
                    <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1" name="Insert">Add Details</button>
                    <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover">Cancel</button>
                    <!-- End Buttons -->
                </form>
                <!-- End Personal Info Form -->
                

                <!-- Go to Top -->
                <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
                    <span class="fas fa-arrow-up u-go-to__inner"></span>
                </a>
                <!-- End Go to Top -->
                
                <div class="position-absolute right-0 bottom-1 left-0 mt-5">

                <?php 
                include 'footer.php';
                ?>
                </div>
                

                

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