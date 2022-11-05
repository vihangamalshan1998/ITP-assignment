<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Add Service Details</title>

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

if(isset($_POST['Insert'])){

   

    $sql=mysqli_query($config,"INSERT INTO Service (name,email,phone,image) 
    VALUES ('$_POST[cus_name]','$_POST[email]','$_POST[phone]','$cus_image')");


    if($sql){

        $path='pro/';

        move_uploaded_file($_FILES["image"]["tmp_name"],$path.$cus_image);

        echo "<script>alert('Sucess!');window.location='index.php';</script>";

    }else{
        echo "fail!";
    }
}
?>


    <!-- ========== MAIN ========== -->
    <?php
    
        include 'header.php';

    ?>

    
    <main id="content" role="main">
        
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
                    <div class="col-sm-12 mb-1">
                        <h2>Add Service Details</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--Start Form-->
    <!-- Content Section -->
       
        <div class="bg-light">
            <div class="container space-2">


                <!-- Personal Info Form -->
                <form class="js-validate">
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
                  Service name
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Sname" placeholder="ex-Dilshan Auto" aria-label="Sname" required aria-describedby="usernameLabel" data-msg="Please enter Service name." data-error-class="u-has-error" data-success-class="u-has-success">
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
                                    Service Date
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="date" class="form-control" name="Sdate" placeholder="Enter Service Date" aria-label="Enter Service date" required aria-describedby="SdateLabel" data-msg="Please enter Service date." data-error-class="u-has-error" data-success-class="u-has-success">
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
                  Service Address
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Saddress" placeholder="Enter Service Address" aria-label="Enter Garage address" required aria-describedby="emailLabel" data-msg="Please enter address." data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="phoneNo" class="form-label">
                                    Service Phone Number
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Sphone" placeholder="Enter Service Phone Number" aria-label="Enter Service phone" required aria-describedby="locationLabel" data-msg="Please Enter phone No." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <div class="mb-3">
                        <h2 class="h5 mb-0">Replacements</h2>
                    </div>


                    <div class="row">

                        <!-- Input -->
                        <div class="col-sm-2 mb-2">
                            <div class="js-form-message">
                                <style>
                                    /* The container */
                                    
                                    .containr {
                                        display: block;
                                        position: relative;
                                        padding-left: 35px;
                                        margin-bottom: 12px;
                                        cursor: pointer;
                                        font-size: 20px;
                                        -webkit-user-select: none;
                                        -moz-user-select: none;
                                        -ms-user-select: none;
                                        user-select: none;
                                    }
                                    /* Hide the browser's default checkbox */
                                    
                                    .containr input {
                                        position: absolute;
                                        opacity: 0;
                                        cursor: pointer;
                                        height: 0;
                                        width: 0;
                                    }
                                    /* Create a custom checkbox */
                                    
                                    .checkmrk {
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        height: 20px;
                                        width: 20px;
                                        background-color: #eee;
                                    }
                                    /* On mouse-over, add a grey background color */
                                    
                                    .containr:hover input~.checkmrk {
                                        background-color: #ccc;
                                    }
                                    /* When the checkbox is checked, add a blue background */
                                    
                                    .containr input:checked~.checkmrk {
                                        background-color: #2196F3;
                                    }
                                    /* Create the checkmark/indicator (hidden when not checked) */
                                    
                                    .checkmrk:after {
                                        content: "";
                                        position: absolute;
                                        display: none;
                                    }
                                    /* Show the checkmark when checked */
                                    
                                    .containr input:checked~.checkmrk:after {
                                        display: block;
                                    }
                                    /* Style the checkmark/indicator */
                                    
                                    .containr .checkmrk:after {
                                        left: 9px;
                                        top: 5px;
                                        width: 5px;
                                        height: 10px;
                                        border: solid white;
                                        border-width: 0 3px 3px 0;
                                        -webkit-transform: rotate(45deg);
                                        -ms-transform: rotate(45deg);
                                        transform: rotate(45deg);
                                    }
                                </style>
                                <label class="containr">E/Oil
                            <input type="checkbox" id="E/oil" value="yes">
                                <span class="checkmrk"></span>
                              </label>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-2 mb-2">
                            <div class="js-form-message">
                                <label class="containr">G/Oil
                                    <input type="checkbox" id="G/oil" value="yes">
                                        <span class="checkmrk"></span>

                            </div>
                        </div>
                        
                        <div class="col-sm-2 mb-2">
                            <div class="js-form-message">
                                <label class="containr">Oil Filter
                                    <input type="checkbox" id="O/Filter" value="yes">
                                        <span class="checkmrk"></span>

                            </div>
                        </div>
                        
                        <div class="col-sm-2 mb-2">
                            <div class="js-form-message">
                                <label class="containr">Fuel Filter
                                    <input type="checkbox" id="F/Filter" value="yes">
                                        <span class="checkmrk"></span>

                            </div>
                        </div>

                        <div class="col-sm-2 mb-2">
                            <div class="js-form-message">
                                <label class="containr">Air Filter
                                    <input type="checkbox" id="A/Filter" value="yes">
                                        <span class="checkmrk"></span>

                            </div>
                        </div>
                    </div>



                    <hr class="mt-1 mb-7">

                   

                    <div class="mb-6">


                        


                    <div class="row">
                        <div class="col-sm-6 mb-6">
                            <label id="companyLabel" class="form-label">Next Service</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Next Service Mileage" aria-label="nxtService" required aria-describedby="amountLabel" data-msg="Please Enter next service" data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
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

                        <div class="row">
                            <div class="col-sm-6 mb-6 mt-5">
                                <label id="companyLabel" class="form-label">Total Amount</label>

                                <!-- Input -->
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Total Amount of service" aria-label="Amount" required aria-describedby="amountLabel" data-msg="Please enter Total Amount" data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                                <!-- End Input -->
                            </div>

                            <div class="col-sm-6 mb-6">


                                <!-- Input -->

                                <!-- End Input -->
                            </div>
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1"name="Insert">Add Details</button>
                        <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover">Cancel</button>
                        <!-- End Buttons -->
                </form>
                <!-- End Personal Info Form -->


                <!-- Go to Top -->
                <a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
                    <span class="fas fa-arrow-up u-go-to__inner"></span>
                    
                    <div class="position-absolute right-0 bottom-1 left-0 mt-5">

<?php 
include 'footer.php';
?>
</div>
                
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