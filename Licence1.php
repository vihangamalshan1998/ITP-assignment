<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Add Insuarance & Licence Details</title>

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

    ?>



    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Breadcrumb Section -->

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
                        <h2>Add Licence Details</h2>
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
                  Insuarance Company name
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="iname" placeholder="ex-Srilanka Insuarance" aria-label="Iname" required aria-describedby="InName" data-msg="Please enter Insuarance Company name." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="inameLabel" class="form-label">
                  Insuarance Policy Number
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Pnumber" placeholder="xxxxxxxxxxxx" aria-label="Pno" required aria-describedby="pno" data-msg="Please enter Insuarance Policy Number" data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="Sdate" class="form-label">
                                Insuarance Expiry Date
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="date" class="form-control" name="exdate" placeholder="Enter Expiry Date" aria-label="Enter Expiry date" required aria-describedby="SdateLabel" data-msg="Please enter Expiry date." data-error-class="u-has-error" data-success-class="u-has-success">
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
                  Registered Province
                  <span class="text-danger">*</span>
                </label>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="Rprovince" placeholder="ex- Western Province" aria-label="Enter Registered Province" required aria-describedby="rpLabel" data-msg="Please enter Registerd Province" data-error-class="u-has-error" data-success-class="u-has-success">

                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-6">
                            <div class="js-form-message">
                                <label id="Sdate" class="form-label">
                                Licence Expiry Date
                                    <span class="text-danger">*</span>
                                </label>

                                <div class="form-group">
                                    <input type="date" class="form-control" name="exdate" placeholder="Enter Expiry Date" aria-label="Enter Expiry date" required aria-describedby="SdateLabel" data-msg="Please enter Expiry date." data-error-class="u-has-error" data-success-class="u-has-success">
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>








                    <hr class="mt-1 mb-7">

                    


                    <!-- Buttons -->
                    <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1  name="Insert">Add Details</button>
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