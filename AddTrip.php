<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Administration | Trip Creator</title>

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
</head>

<body>

    <!-- ========== MAIN ========== -->
    <?php 
      include 'header.php';
      include '../../config.php';
      $id = $_GET['ResId'];
      $sql=mysqli_query($con,"SELECT * from reservation R,user U  WHERE R.NIC = U.NIC AND R.ResId = '$id'");
      if($sql){
        while($record=mysqli_fetch_array($sql)){
          $fname = $record['Fname'];
        $img =  $record['Profile_Pic'];
        }
      }
    
    ?>



    <!-- End Breadcrumb Section -->

    <!-- Content Section -->
    <div class="bg-light">
        <div class="container space-2">
            <!-- Update Avatar Form -->
            <form class="media align-items-center mb-7">
                <div class="u-lg-avatar mr-3">
                    <img class="img-fluid rounded-circle" src="../../Customer/img/<?php echo $img; ?>"
                        alt="Image Description">
                </div>

                <div class="media-body">
                    <label for="cutomer-name" class="lead"> <?php echo $fname;?> </label>
                    <button type="button"
                        class="btn btn-sm btn-soft-secondary transition-3d-hover mb-1 mb-sm-0 ml-5">Show quick
                        history</button>
                    <small><span class="d-block text-dark">Reservation ID: <?php echo $id; ?></span></small>


                </div>
            </form>
            <!-- End Update Avatar Form -->

            <!-- Personal Info Form -->
            <form method="post" action="" class="was-validated" enctype="multipart/form-data">

                <div class="row">

                    <!-- Starting Mileage-->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="inputStartingMileage" class="lead">Starting Mileage : </label>
                    </div>

                    <!-- Deposit-->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="inputDeposit" class="lead">Deposit : </label>
                    </div>
                </div>
                <input type="hidden" name="ResId" value='<?php echo $id?>'>
                <div class="row">
                    <!--input Starting Mileage-->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-12 input-group mb-3">
                                <input type="number" class="form-control" placeholder="Please input mileage "
                                    name="mileage">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">km</span>
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- input deposit-->
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-12  input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">LKR</span>
                                </div>
                                <input type="number" class="form-control" placeholder="Please input deposit "
                                    name="deposit">

                            </div>
                        </div>
                    </div>

                </div>



                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="Fual Range" class="lead"> Fuel Range : </label>
                            <select class="form-control custom-select" name="fuel" required>
                                <option value="full">Full</option>
                                <option value="meduam">Medium</option>
                                <option value="low">Low</option>
                            </select>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label for="Images" class="lead"> Images : </label>
                            <div class="media-body ">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                        <input type="file" name="vehicle_image_1" /> <br />
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input type="file" name="vehicle_image_2" /> <br />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <input type="file" name="vehicle_image_3" /> <br />
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <input type="file" name="vehicle_image_4" /> <br />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                                        <input type="file" name="vehicle_image_5" /> <br />
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2 mf-5">
                        <label for="Equipments" class="lead"> Equipments : </label>
                        <fieldset>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="check_list[]"
                                        value="Spare Wheel"> Spare Wheel
                                </label>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="check_list[]" value="Jack">
                                    Jack
                                </label>
                            </div>

                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="check_list[]"
                                        value="Tool Kit"> Tool Kit
                                </label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <label for="Description" class="lead"> Description : </label>
                <div class="row">

                    <div class="form-group col-12">
                        <textarea class="form-control" name="des" id="exampleFormControlTextarea1" rows="3"
                            class="form-control-lg"></textarea>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="row">
                    <div class="col-12">
                        <input type="submit" name="submit" class="btn btn-sm btn-primary transition-3d-hover"
                            value="Create">
                    </div>
                </div>


                <!-- End Buttons -->
            </form>
        </div>
    </div>
    <?php 
          include('footer.php');  ?>
    <?php 
     
    ?>

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
<?php
    include ('../../config.php');

     if (isset($_POST['submit'])){
        $sMileage = $_POST['mileage'];
        $deposit = $_POST['deposit'];
        $fuel = $_POST['fuel'];
        $resId = $_POST['ResId'];
        $date = date("Y/m/d");
        $time = date("h:i:sa");
        $vimg="";
            $image_1  = $_FILES['vehicle_image_1']['name'];
            $image_2 = $_FILES['vehicle_image_2']['name'];
            $image_3 = $_FILES['vehicle_image_3']['name'];
            $image_4 = $_FILES['vehicle_image_4']['name'];
            $image_5 = $_FILES['vehicle_image_5']['name'];
       
        $check1="";
         if(!empty($_POST['check_list'])) {
            foreach($_POST['check_list'] as $check) {
               $check1 .=$check .","; 
            }
        }else{
            $check1 = "no items";
        }
        
        $sql = mysqli_query($con,"SELECT * FROM trip WHERE ResId = '$resId'");
       /* if($sql){
          echo"<script>alert('Request is already processing!');
          window.location='dash.php';

                         </script>";
            
        }else{*/
          $sql=mysqli_query($con,"INSERT INTO trip (ResId,Deposit,equipments,Status,s_date,s_time,s_mileage,Description)  VALUES 
          ('$resId','$deposit','$check1','Processing','$date','$time','$sMileage','$_POST[des]')");
          if($sql){
              $sql1 = "SELECT TId FROM trip WHERE ResId = $resId";
              $results=$con->query($sql1);

          if ($results -> num_rows >0){
            while($row = $results->fetch_assoc()){
              $tid = $row["TId"];
            }
          }else{
            echo "Error";
          }

          $sql3 =mysqli_query($con,"INSERT INTO trip_images VALUES ('$tid','$image_1','$image_2','$image_3','$image_4','$image_5')");
          if($sql3){
            $path='tripImages/'; 
            move_uploaded_file($_FILES["vehicle_image_1"]["tmp_name"],$path.$image_1);
            move_uploaded_file($_FILES["vehicle_image_2"]["tmp_name"],$path.$image_2);
            move_uploaded_file($_FILES["vehicle_image_3"]["tmp_name"],$path.$image_3);
            move_uploaded_file($_FILES["vehicle_image_4"]["tmp_name"],$path.$image_4);
            move_uploaded_file($_FILES["vehicle_image_5"]["tmp_name"],$path.$image_5);
  
            $sql=mysqli_query($con,"UPDATE reservation SET Status='Proceed' WHERE ResId ='$resId'");
            if($sql){
              echo "<script>window.Location:='dash.php';</script>";
            }else{
              echo"<script>alert('Unable to Update Reservation!');</script>";
            }
          }else{
            echo"<script>alert('Sorry,unable to upload images!');</script>";
          }
        }else{
          echo"<script>alert('Sorry,Try Again!');</script>";
        }
  
      }
   // }       
?>