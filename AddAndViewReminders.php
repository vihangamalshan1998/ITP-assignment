<html>

<head>
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
    <link rel="stylesheet" href="../../assets/css/myStyle.css">

    <link rel="stylesheet" href="../../assets/vendor/custombox/dist/custombox.min.css">
    <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
</head>
<?php include'header.php'; ?>

<body>
    <!-- Contact Form -->
    <div class="row p-5">
        <div class="col-sm-3 mb-3 mt-2">
            <div class="card shadow-sm p-4">
                <!-- Header -->
                <div class="media align-items-center mb-4">
                    <div class="u-avatar mr-3">
                        <img class="img-fluid rounded-circle" src="../../assets/img/100x100/img8.jpg"
                            alt="Image Description">
                    </div>
                    <div class="media-body">
                        <h4 class="h6 mb-0">Add Reminders Here</h4>
                    </div>
                </div>
                <?php 
                    include  'config.php';
                    if(isset($_POST['submit'])){
                        $sql = mysqli_query($con,"INSERT INTO reminder (Date,Description,Status) VALUES ('$_POST[date]','$_POST[des]','Pending')");
                        if($sql){
                            echo "<script>alert('Successfully Inserted!');</script>";
                            echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =AddAndViewReminders.php'>";
                        }else{
                            echo "<script>alert('Unsuccessfully!');</script>";
                            echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =AddAndViewReminders.php'>";
                        }
                    }
                ?>
                <form method="POST">
                    <div class="form-group">
                        <p></p>
                        <input type="date" class="form-control" name="date" value="London, England"
                            placeholder="Enter Date of Birth" aria-label="Enter Date of Birth" required
                            aria-describedby="locationLabel" data-msg="Please enter date of birth."
                            data-error-class="u-has-error" data-success-class="u-has-success" id="dob">

                    </div>

                    <div class="mb-2">
                        <label class="sr-only" for="propertyQuestionSr">Property question</label>
                        <textarea class="form-control form-control-sm" name="des" rows="4" name="answer"
                            id="propertyQuestionSr" placeholder="put your reminders here ..."
                            aria-label="I would like more information about ..."></textarea>
                    </div>

                    <input type="submit" name="submit"
                        class="btn btn-block btn-sm btn-primary btn-wide transition-3d-hover" value="submit">
                </form>
                <!-- End Form -->
            </div>
        </div>
        <div class="col-sm-7 mb-3 mt-2 ml-2">
            <div class="card-body p-4">
                <!-- Activity Table -->
                <div class="table-responsive-md u-datatable">
                    <table
                        class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                        data-dt-info="#datatableInfo" data-dt-search="#datatableSearch"
                        data-dt-entries="#datatableEntries" data-dt-page-length="12" data-dt-is-responsive="false"
                        data-dt-is-show-paging="true" data-dt-details-invoker=".js-datatabale-details"
                        data-dt-select-all-control="#invoiceToggleAllCheckbox" data-dt-pagination="datatablePagination"
                        data-dt-pagination-classes="pagination mb-0" data-dt-pagination-items-classes="page-item"
                        data-dt-pagination-links-classes="page-link" data-dt-pagination-next-classes="page-item"
                        data-dt-pagination-next-link-classes="page-link"
                        data-dt-pagination-next-link-markup='<span aria-hidden="true">&raquo;</span>'
                        data-dt-pagination-prev-classes="page-item" data-dt-pagination-prev-link-classes="page-link"
                        data-dt-pagination-prev-link-markup='<span aria-hidden="true">&laquo;</span>'>
                        <thead>
                            <tr class="text-uppercase font-size-1">
                                <th scope="col" class="font-weight-medium">
                                    <div class="d-flex justify-content-between align-items-center">
                                        Reminder Id
                                        <div class="ml-2">
                                            <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                            <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="font-weight-medium">
                                    <div class="d-flex justify-content-between align-items-center">
                                        Date
                                        <div class="ml-2">
                                            <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                            <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col" class="font-weight-medium">
                                    <div class="d-flex justify-content-between align-items-center">
                                        Message
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

                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = mysqli_query($con,"SELECT * FROM reminder");
                                if($sql){
                                    while($record = mysqli_fetch_array($sql)){?>
                            <tr>
                                <td><?php echo $record['RId'];?></td>
                                <td><?php echo $record['Date'];?></td>
                                <td><?php echo $record['Description'];?></td>
                                <td><?php if($record['Status'] == 'Pending'){
                                               echo '<a href="confirmMessages.php?id='.$record['RId'].'"><button class ="btn btn-sm btn-primary transition-3d-hover">pending</button></a>';
                                          }else{
                                              echo $record['Status'];
                                          }
                                
                                ?></td>
                            </tr>
                            <?php    }
                                }else{
                                    echo "<script>alert('Try Again!');</script>";
                                }
                            ?>
                        </tbody>
                </div>
            </div>
            <div class="fix-button" style="bottom:10%; right:3%; position:fixed;">

                <!-- Modal Window Trigger -->
                <a class="btn btn-sm btn-primary transition-3d-hover" href="#subscribeModal"
                    data-modal-target="#subscribeModal">
                    Today Alerts <?php 
                    $date = date("Y-m-d");
                    $sql = mysqli_query($con,"SELECT * FROM reminder where Status != 'Seen'");
                    if($sql){
                        while($record = mysqli_fetch_array($sql)){
                            if($record['Date'] == $date){
                                echo '<i class="fa fa-bell" aria-hidden="true"></i>';
                            }
                        }
                    }
                    ?>
                </a>
                <!-- End Modal Window Trigger -->

                <!-- Subscribe Modal Window -->
                <div id="subscribeModal" class="js-modal-window svg-preloader u-modal-window position-relative"
                    style="width: 600px;">
                    <!-- Modal Close Button -->
                    <button type="button" class="close close-light position-absolute top-0 right-0 z-index-2 p-2"
                        aria-label="Close" onclick="Custombox.modal.close();">
                        <span aria-hidden="true">×</span>
                    </button>
                    <!-- End Modal Close Button -->

                    <div class="card border-0 bg-primary text-white text-center py-5 px-md-5">
                        <div class="card-body">
                            <!-- Title -->
                            <div class="mb-4">
                                <h4 class="h1 font-weight-semi-bold mb-1">Reminders</h4>
                                <p class="text-white-70 mb-0"><?php 
                    $date = date("Y-m-d");
                    $sql = mysqli_query($con,"SELECT * FROM reminder where Status != 'Seen' AND Date = '$date'");
                    if($sql){
                        while($record = mysqli_fetch_array($sql)){
                            echo'<p>'.$record['Description'].'</p>';
                        }
                    }
                    ?></p>
                            </div>
                            <!-- End Title -->

                            <!-- SVG Icon -->
                            <figure class="w-80 mx-auto mb-1 ie-subscribe-2-flat-icons">
                                <img class="js-svg-injector" src="../../assets/svg/flat-icons/subscribe-2.svg"
                                    alt="Image Description" data-parent="#subscribeModal">
                            </figure>
                            <!-- End SVG Icon -->

                            <!-- Subscribe Form -->

                            <!-- End Subscribe Form -->
                        </div>

                        <!-- SVG Background Shape -->
                        <div class="w-100 content-centered-y z-index-n1">
                            <figure class="ie-bg-elements-1">
                                <img class="js-svg-injector" src="../../assets/svg/components/bg-elements-1.svg"
                                    alt="Image Description" data-parent="#subscribeModal">
                            </figure>
                        </div>
                        <!-- End SVG Background Shape -->
                    </div>
                </div>
                <!-- End Subscribe Modal Window -->
            </div>

            <!-- JS Global Compulsory -->
            <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
            <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
            <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
            <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

            <!-- JS Implementing Plugins -->
            <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
            <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
            <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js">
            </script>
            <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
            <script src="../../assets/vendor/summernote/dist/summernote-lite.js"></script>
            <script src="../../assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
            <script src="../../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
            <script src="../../assets/vendor/custombox/dist/custombox.min.js"></script>
            <script src="../../assets/vendor/custombox/dist/custombox.legacy.min.js"></script>


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
            <script src="../../assets/js/components/hs.modal-window.js"></script>
            <script src="../../assets/js/components/hs.svg-injector.js"></script>

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
            <!-- JS Plugins Init. -->
            <script>
            $(window).on('load', function() {
                // initialization of svg injector module
                $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
            });

            $(window).on('load', function() {
                // initialization of autonomous popups
                $.HSCore.components.HSModalWindow.init('[data-modal-target]', ' .js-modal-window', {
                    autonomous: true
                });
            });
            </script>
            <!-- End Contact Form -->
</body>

</html>