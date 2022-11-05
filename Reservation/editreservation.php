<?php
    session_start();

        
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Edit Reservation</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico">

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
</head>
<body>

<?php include ('../header.php');?>
<?php include ('../account-sidebar.php');?>


<br>
 
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Breadcrumb Section -->
    <div class="bg-primary mt-11">
      <div class="container space-top-1 pb-3">
        <div class="row">
          <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
            <div class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
              <!-- Breadcrumb -->
              <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                <li class="breadcrumb-item active" aria-current="page">Edit Reservation</li>
              </ol>
              <!-- End Breadcrumb -->

             
            </div>
          </div>

          <div class="col-lg-7 order-lg-1">
            <!-- User Info -->
            <div class="media d-block d-sm-flex align-items-sm-center">
              <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                <img class="img-fluid rounded-circle" src="../assets/img/160x160/img2.jpg" alt="Image Description">
                <span class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                  <span class="fas fa-check"></span>
                </span>
              </div>
              <div class="media-body">
                <h1 class="h3 text-white font-weight-medium mb-1">Howdy, Natalie!</h1>
                <span class="d-block text-white">natalie.curtis@gmail.com</span>
              </div>
            </div>
            <!-- End User Info -->
          </div>
        </div>
      </div>

      <div class="container space-bottom-1 space-bottom-lg-0">
        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
        
         
        </div>
      </div>
    </div>

       <?php

       include '../config.php';


        $sql =mysqli_query($con,"SELECT * FROM reservation r,with_driver_reservation w WHERE r.ResId='$_GET[ResId]' AND r.ResId = w.ResId");

            while($record=mysqli_fetch_array($sql)){
              


        ?>
    <!-- End Breadcrumb Section -->
    <div class="text-center  mt-1">
        <h3>Edit Reservation</h3>
    </div>

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
        
        <!-- Personal Info Form -->
        <form class="js-validate">

            <div class="row">
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="pickuplocation" class="form-label">
                  Reservation ID
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="Pick-Up" value="<?php echo $record['ResId']; ?>" placeholder="" aria-label="Enter your email address" disabled aria-describedby="emailLabel">
                </div>
              </div>
            </div>
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="pickuplocation" class="form-label">
                  Reservation Status
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="Pick-Up" value="<?php echo $record['Status']; ?>" placeholder="" aria-label="Enter your email address" disabled aria-describedby="emailLabel">
                </div>
              </div>
            </div>
            
            </div>

          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="nameLabel" class="form-label">
                  RENTAL DATE
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="date" class="form-control" name="rentalDate" value="<?php echo $record['RequiredDate']; ?>" disabled>
                </div>
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="usernameLabel" class="form-label">
                  Rental Period
                  <span class="text-danger">*</span>
                </label>
                <div class="js-form-message">
                  <div class="form-group">
                  <input type="text" class="form-control" name="rentalDate" value="<?php echo $record['RentalPeriod']; ?>" disabled>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <label class="form-label">
            No: Of Passengers
            <span class="text-danger"></span>
          </label>

          <div class="row">
            <!-- Input -->
            <div class="col-md-6 mb-3 mb-sm-6">
              <div class="js-form-message">
                <div class="form-group">
                <input type="text" class="form-control" name="rentalDate" value="<?php echo $record['NoOfPassengers']; ?>" disabled>
                </div>
              </div>
            </div>
            <!-- End Input --> 
          </div>

          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="pickuplocation" class="form-label">
                  Pick-Up Location
                  <span class="text-danger"></span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="Pick_Up" value="<?php echo $record['PickUpPoint']; ?>" aria-label="Enter your email address" required aria-describedby="emailLabel">
                </div>
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="locationLabel" class="form-label">
                  Destination
                  <span class="text-danger"></span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="destination" value="<?php echo $record['Destination']; ?>"  aria-label="Enter your location" required aria-describedby="locationLabel">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="organizationLabel" class="form-label">
                  Pick-Up Time
                  <span class="text-danger"></span>
                </label>

                <div class="form-group">
                  <input type="time" class="form-control" name="time" value="<?php echo $record['PickUpTime']; ?>" placeholder="" aria-label=""  aria-describedby="organizationLabel">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>


            

            
        
        <div class="row">
              
              <div class="col-md-7 text-center">
              
                  <div class="numbertext"></div>
                    <img src="images/car-1.jpg" style="width:100%">

              </div> 

              <div class="col-md-5 text-center ">

                <div class="row">
                <div class="js-form-message">
                    <label id="organizationLabel" class="form-label">
                     <h3> Vehicle Number :  <?php echo $record['VehicleNo']; ?> </h3>
                      <span class="text-danger"></span>
                    </label>
                 </div>
                  </div>

                  <div class="row mt-5">
                <div class="js-form-message">
                    <label id="organizationLabel" class="form-label">
                     Sorry! We can't let you to change the vehicle.
                     if you wan't to change the vehicle,
                     Please remove this reservation, and request new reservation.
                      <span class="text-danger">*</span>
                    </label>
                 </div>
                  </div>

              </div>    
        
        </div>

          

          <div class="row mt-6">

              <div class="col-md-4 mt-5 text-center mt-7">
              <label id="usernameLabel" class="form-label">
                  Sorry! we can't let you edit some specific fields
                  <span class="text-danger">*</span>
                </label>
               </div>


              <div class="col-md-8 mt-5  text-center">
                <!-- Buttons -->
                    <button type="submit" name="update" class="btn btn-sm btn-primary transition-3d-hover mr-1" >Edit Reservation</button>
                    <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1" data-toggle="modal" data-target="#delete">Delete Reservation</button>
                    <button type="reset" class="btn btn-sm btn-soft-secondary transition-3d-hover">Cancel</button>
                 <!-- End Buttons -->
              </div>

          </div>
</form>

        
         <?php
              }
        ?>
          

          
  </main>
  <!-- ========== END MAIN ========== -->

  <?php include '../footer.php';?>

      <?php
             if (isset($_POST['update'])){
          $sql1 = mysqli_query($con,"Update with_driver_reservation SET PickUpPoint = $_POST[Pick_Up] ,Destination = $_POST[destination], PickUpTime = $_POST[time] where 	ResId = $_POST[id]");
          if($sql1){
            echo"<script> alert('Successful!');
                  
                </script>";
                /*
                header("location:ViewReservation.php");
                */
          }else{
            echo"weda ne!";
          }
         }
      ?>
 
  

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