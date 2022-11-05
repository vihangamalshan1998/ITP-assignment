<?php
    

       include '../../config.php';

       
        if (isset($_POST['update'])){
        $sql = mysqli_query($con,"Update reservation SET Status = $_POST[status] ,RentalPeriod = $_POST[RentalPeriod], NoOfPassengers = $_POST[NoOfPassengers] where 	ResId = $_POST[id]");
        if($sql){
          echo"<script> alert('Successful!');
                 window.location='ViewReservation.php';
              </script>";
              /*
              header("location:ViewReservation.php");
              */
        }else{
          echo"weda ne!";
        }
       }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Title -->
    <title>Back End | Edit Reservation</title>

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
    
   
   

    <!-- Breadcrumb Section -->
    <div class="bg-primary">
    <?php
  include 'header.php';
  ?>
      
    <!-- Content Section -->
    
    <div class="bg-light">
    <div class="row">
            <style>
                div.a {
                    text-align: center;
                }
            </style>
            <div class="container">
                <div class="a">
                    <div class="col-sm-11 mb-1"><br>
                        <h2>Edit Reservation Details</h2>
                    </div>
                </div>
            </div>
        </div>
      <div class="container space-2">
        
        <?php
               $sql =mysqli_query($con,"SELECT * FROM reservation r,with_driver_reservation w WHERE r.ResId='$_GET[ResId]' AND r.ResId = w.ResId");

               while($record=mysqli_fetch_array($sql)){
                 $resId = $record['ResId'];
        ?>

        <!-- Update Avatar Form -->
        <form class="media align-items-center mb-7">
         
          <div class="media-body">
                <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                      <label for="cutomer-name" class="lead">Reservation Id :  <?php echo $record['ResId']; ?></label>
                    </div>
                    <div class="col-md-4">
                      <label for="cutomer-name" class="lead">Customer Id :  <?php echo $record['NIC']; ?></label>
                    </div>
                    <div class="col-md-4">
                      <label for="cutomer-name" class="lead">Reserved Date :  <?php echo $record['ReservedDate']; ?></label>
                    </div>
                 </div>
                 </div>
          </div>
        </form>
        <!-- End Update Avatar Form -->

        <!-- Personal Info Form -->
        <form method="POST" action="" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $resId ;?> ">
            <div class="container">
            <div class="row mt-3">
                <!-- Starting Mileage-->
                <div class="col-md-6">
                    <label id="pickuplocation" class="form-label">
                      Reservation Status
                      <span class="text-danger"></span>
                    </label>

                    <div class="form-group">

                    <select name="status" class="form-control custom-select">
                    <option value="1" selected="selected">Approved</option>
                    <option value="2">Rejected</option>
                    <option value="3"> Completed</option>
                    
                  </select>

                    </div> 
                </div>
                <div class="col-md-6">
                    <label id="pickuplocation" class="form-label">
                      Driver ID
                      <span class="text-danger"></span>
                    </label>

                    <div class="form-group">
                    <select name="DriveID" class="form-control custom-select">
                      <option value="1" selected="selected"><?php echo $record['DriverID']; ?></option>
                      <option value="2">Driver_ID : 021</option>
                      <option value="3">Driver_ID : 022</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <!-- Starting Mileage-->
                <div class="col-md-6">
                      <label id="pickuplocation" class="form-label">
                        Reservation Date 
                        <span class="text-danger"></span>
                      </label>

                      <div class="form-group">
                        <input type="text" class="form-control" name="rental-date" value="<?php echo $record['RequiredDate']; ?>" placeholder="" aria-label="Enter your email address" disabled aria-describedby="emailLabel">
                      </div>
                </div>
                <div class="col-md-6">
                      <label id="pickuplocation" class="form-label">
                       Rental Period 
                        <span class="text-danger"></span>
                      </label>

                      <div class="form-group">
                        <input type="text" class="form-control" name="RentalPeriod" value="<?php echo $record['RentalPeriod']; ?>" placeholder="" aria-label="Enter your email address" aria-describedby="emailLabel">
                      </div>
                </div>
            </div>
            <div class="row mt-2">
                <!-- Starting Mileage-->
                <div class="col-md-6">
                      <label id="pickuplocation" class="form-label">
                        No: Of Passengers
                        <span class="text-danger">*</span>
                      </label>

                      <div class="form-group">
                        <input type="text" class="form-control" name="NoOfPassengers" value="<?php echo $record['NoOfPassengers']; ?>" placeholder="" aria-label="Enter your email address" aria-describedby="emailLabel">
                      </div> 
                </div>
                <div class="col-md-6">
                      <label id="pickuplocation" class="form-label">
                         Vehicle No:
                        <span class="text-danger">*</span>
                      </label>

                      <div class="form-group">
                        <input type="text" class="form-control" name="VehicleNo" value="<?php echo $record['VehicleNo']; ?>" placeholder="" aria-label="Enter your email address" disabled aria-describedby="emailLabel">
                      </div>
                </div>
            </div>
            <div class="row mt-2">
                <!-- Starting Mileage-->
                <div class="col-md-6">
                      <label id="pickuplocation" class="form-label">
                        Reservation ID
                        <span class="text-danger">*</span>
                      </label>

                      <div class="form-group">
                        <input type="text" class="form-control" name="Pick-Up" value="" placeholder="" aria-label="Enter your email address" disabled aria-describedby="emailLabel">
                      </div>
                </div>
                <div class="col-md-6">
                      <label id="pickuplocation" class="form-label">
                        Reservation ID
                        <span class="text-danger">*</span>
                      </label>

                      <div class="form-group">
                        <input type="text" class="form-control" name="Pick-Up" value="" placeholder="" aria-label="Enter your email address" disabled aria-describedby="emailLabel">
                      </div> 
                </div>
            </div>
            <?php
               }
            ?>
          <!-- Buttons -->
          <div class="row mt-7">
            <div class="col-md-5">
              
            </div>
            <div class="col-md-7 text-center">
              <input type="submit" name="update" class="btn btn-sm btn-primary transition-3d-hover mt-4 " value="Update Reservation">
              <input type="submit" name="submit" class="btn btn-sm btn-primary transition-3d-hover mt-4 btn-danger" value="delete Reservation">
              <input type="reset" name="submit" class="btn btn-sm btn-secondary transition-3d-hover mt-4" value="cancle">
            </div>

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
<?php 
  if (isset($_POST['update'])){
    $sql = mysqli_query($con,"Update reservation SET NoOfPassengers = $_POST[NoOfPassengers] where 	ResId = $_POST[id]");
    if($sql){
      echo"<script> alert('Successful!');
          </script>";
          header("location:ViewReservation.php");
    }else{
      echo"weda ne!";
    }
  }
?>