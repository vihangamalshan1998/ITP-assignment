<?php

session_start();

 $todaydate = date('m/d/y');
  $id = $_SESSION['uid'];

if(isset($_POST['insert'])){
    include '../config.php';

    

    if(isset($_POST['insert'])){
    
        $rentalDate= $_POST['rentalDate'];
        $nofp = $_POST['noofp'];
        $rentaP =  $_POST['rental_period'];
        $desti = $_POST['destination'];
        $pickupt =  $_POST['picktime'];
        $pickup = $_POST['PickUp'];

        $sql2=mysqli_query($con,"SELECT * FROM user where user_id = '$id' ");
        if($sql2){
          while($record=mysqli_fetch_array($sql2)){
            $nic = $record['NIC'];
      
          }
        }

        $sql1 = mysqli_query($con,"INSERT INTO reservation (NIC, RequiredDate, RentalPeriod, NoOfPassengers,ReservedDate)
        VALUES ('$nic','$rentalDate','$rentaP','$nofp','$todaydate')");

        $git=mysqli_insert_id($con);


         if ($sql1) {

          $sql = mysqli_query($con,"INSERT INTO with_driver_reservation (ResId,PickUpPoint,Destination,PickUpTime,DriverID)
          VALUES ('$git','$pickup','$desti','$pickupt','')");
          
        $ResId=mysqli_insert_id($con);

          header('Location:viewreservation.php?ResId='.$git);
        
        

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

          $sql2=mysqli_query($con,"SELECT S_ID FROM Support_service");

                $con->close();
      
            }
          }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Reservation</title>

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

  <?php
    include '../header.php';
    include ('../account-sidebar.php');
  ?>
        


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
                <li class="breadcrumb-item active" aria-current="page">Reservation</li>
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
    <!-- End Breadcrumb Section -->
    <div class="text-center  mt-1">
        <h3>Make A Reservation</h3>
    </div>

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
      
        <!-- Personal Info Form -->
        <form  method="POST" class="js-validate">
        
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="nameLabel" class="form-label">
                  RENTAL DATE
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="date" class="form-control" name="rentalDate">
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
                    <select name="rental_period" class="form-control custom-select" required>
                      <option value="1">1 Day</option>
                      <option value="2">2 Days</option>
                      <option value="3">3 Days</option>
                      <option value="4">4 Days</option>
                      <option value="5">5 Days</option>
                      <option value="6">6 Days</option>
                      <option value="7">7 days</option>
                      <option value="8">8 Days</option>
                      <option value="9">9 Days</option>
                      <option value="10">10 Days</option>
                      <option value="11">11 Days</option>
                      <option value="12">12 Days</option>
                      <option value="13">13 days</option>
                      <option value="14">14 Days</option>
                      <option value="15">15 Days</option>
                      <option value="16">16 Days</option>
                      <option value="17">17 Days</option>
                      <option value="18">18 days</option>
                      <option value="19">19 Days</option>
                      <option value="20">20 Days</option>
                      <option value="21">21 Days</option>
                      <option value="22">22 Days</option>
                      <option value="23">23 days</option>
                      <option value="24">24 Days</option>
                      <option value="25">25 Days</option>
                      <option value="26">26 Days</option>
                      <option value="27">27 Days</option>
                      <option value="28">28 days</option>
                      <option value="29">29 days</option>
                      <option value="30">30 days</option>
                      <option value="31">31 days</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <label class="form-label">
            No: Of Passengers
            <span class="text-danger">*</span>
          </label>

          <div class="row">
            <!-- Input -->
            <div class="col-md-6 mb-3 mb-sm-6">
              <div class="js-form-message">
                <div class="form-group">
                  <select name="noofp" class="form-control custom-select" required>
                    <option value="1" selected="selected">1 Passenger</option>
                    <option value="2">2 Passengers</option>
                    <option value="3">3 Passengers</option>
                    <option value="4">4 Passengers</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- End Input --> 
          </div>

          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6" id="withD">
              <div class="js-form-message">
                <label id="pickuplocation" class="form-label">
                  Pick-Up Location
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="PickUp" value="" placeholder="Enter your Pick-Up place" aria-label="Enter your pick up place" required aria-describedby="emailLabel">
                </div>
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6" id="withD">
              <div class="js-form-message">
                <label id="locationLabel" class="form-label">
                  Destination
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="destination" value="" placeholder="Enter your destination" aria-label="Enter your location" required aria-describedby="locationLabel">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6" id="WithD">
              <div class="js-form-message">
                <label id="organizationLabel" class="form-label">
                  Pick-Up Time
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="time" class="form-control" name="picktime" value="" placeholder="" aria-label="" required aria-describedby="organizationLabel">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>


            

            
        

          
        




          

          <div class="row">

              <div class="col-md-6 mt-5 text-center">
              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ModalScrollBody">
		             	Reservation terms and conditions
		          </button>
               </div>


              <div class="col-md-6 mt-5  text-center">
                <!-- Buttons -->
                  <button type="submit" name="insert" class="btn btn-sm btn-primary transition-3d-hover mr-1">Make a Reservation</button>
                   <button type="reset" class="btn btn-sm btn-soft-secondary transition-3d-hover">Cancel</button>
                 <!-- End Buttons -->
              </div>

          </div>
          </form>

         <!-- Modal scroll content-->
	<div class="modal  fade" tabindex="-1" id="ModalScrollBody" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>
          ####################################### <br>
           උබ ට වාහන දෙන්නෙ නෑ කට වහන් පලයන් <br>
           පො####යා <br>
           කැ#*#යා <br>
           ####################################### <br>
					</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- // Modal scroll contet -->

          

          
  </main>
  <!-- ========== END MAIN ========== -->

  <?php include '../footer.php';?>

  <script>
    var x;
    function ShowHide(){
      if(x==0){
      document.getElementById("bt1").style.display='';
      return x=0;
      }
      else{
      document.getElementById("bt1").style.display='none';
      return x=1; 
      }
    }
  </script>
  <style>
    .withD{
    
    }
  </style>

 
 
  

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