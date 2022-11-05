<?php
    session_start();
    $uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>View reservation</title>

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
  <link rel="stylesheet" href="css/jontystyle.css">
</head>
<body>

<?php include ('../header.php');?>
<?php include ('../account-sidebar.php');?>

<?php
    
    include '../config.php';
    $sql1 = mysqli_query($con,"SELECT * FROM user where user_id = '$uid'");
    if($sql1){
      while($record=mysqli_fetch_array($sql1)){
        $name = $record['Fname'];
        $email = $record['Email'];
        $img =  $record['Profile_Pic'];
      }
    }
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
                <li class="breadcrumb-item active" aria-current="page">View Reservation</li>
              </ol>
              <!-- End Breadcrumb -->

             
            </div>
          </div>


          <div class="col-lg-7 order-lg-1">
            <!-- User Info -->
            <div class="media d-block d-sm-flex align-items-sm-center">
              <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                <img class="img-fluid rounded-circle" src="../Customer/img/<?php echo $img;?>" alt="Image Description">
                <span class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                  <span class="fas fa-check"></span>
                </span>
              </div>
              <div class="media-body">
                <h1 class="h3 text-white font-weight-medium mb-1"><?php echo $name; ?></h1>
                <span class="d-block text-white"><?php echo $email ?></span>
              </div>
            </div>
            <!-- End User Info -->
          </div>
        </div>
      </div>

<?php 
   
  
  
?>
      <div class="container space-bottom-1 space-bottom-lg-0">
        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
        
         
        </div>
      </div>
    </div>
    <!-- End Breadcrumb Section -->
    <div class="text-center  mt-1">
        <h3>View Reservation</h3>
    </div>

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container mt-6">
        <div class="row">
        <div class="col-md-6 ">

            <!-- Container for the image gallery -->
            <div class="container">

    <?php


      $sql =mysqli_query($con,"SELECT * FROM reservation r,with_driver_reservation w WHERE r.ResId='$_GET[ResId]' AND r.ResId = w.ResId");
      
          while($record=mysqli_fetch_array($sql)){
      
    ?>

            <!-- Full-width images with number text -->
            <div class="mySlides">
              <div class="numbertext">1 / 6</div>
                <img src="images/car-1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 6</div>
                <img src="images/car-4.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 6</div>
                <img src="images/car-1.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 6</div>
                <img src="images/car-4.jpg" style="width:100%">
            </div>

            <div class="mySlides">
              <div class="numbertext">5 / 6</div>
                <img src="images/car-1.jpg" style="width:100%">
            </div>

            
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
              <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row">
              <div class="column">
                <img class="demo cursor" src="images/car-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="<?php //echo $record['VehicleNo']; ?>">
              </div>
              <div class="column">
                <img class="demo cursor" src="images/car-4.jpg" style="width:100%" onclick="currentSlide(2)" alt="<?php //echo $record['VehicleNo']; ?>">
              </div>
              <div class="column">
                <img class="demo cursor" src="images/car-1.jpg" style="width:100%" onclick="currentSlide(3)" alt="<?php //echo $record['VehicleNo']; ?>">
              </div>
              <div class="column">
                <img class="demo cursor" src="images/car-4.jpg" style="width:100%" onclick="currentSlide(4)" alt="<?php //echo $record['VehicleNo']; ?>">
              </div>
              <div class="column">
                <img class="demo cursor" src="images/car-1.jpg" style="width:100%" onclick="currentSlide(5)" alt="<?php //echo $record['VehicleNo']; ?>">
              </div>
              <div class="column">
                <img class="demo cursor" src="images/car-4.jpg" style="width:100%" onclick="currentSlide(6)" alt="<?php //echo $record['VehicleNo']; ?>">
              </div>
            </div>
            </div>

        </div>
        <div class="col-md-3 text-center" style="font-size=10px;">

              <label id="nameLabel" class="form-label mt-9">
                 Reservation ID : <?php echo $record['ResId']; ?>
               <span class="text-danger"></span>
              </label>
              <label id="nameLabel" class="form-label mt-9">
                 Customer ID : <?php echo $record['NIC']; ?>
               <span class="text-danger"></span>
              </label>
              <label id="nameLabel" class="form-label mt-9">
                 Reservation Date : <?php echo $record['RequiredDate']; ?>
               <span class="text-danger"></span>
              </label>
        </div>
        <div class="col-md-3  text-center">
              <label id="nameLabel" class="form-label mt-9">
                 No: Of Passengers : <?php echo $record['NoOfPassengers']; ?>
               <span class="text-danger"></span>
              </label>
              <label id="nameLabel" class="form-label mt-9">
                 Pick-up Location : <?php echo $record['PickUpPoint']; ?>
               <span class="text-danger"></span>
              </label>
              <label id="nameLabel" class="form-label mt-9">
                 Reservation Status : <?php echo $record['Status']; ?>
               <span class="text-danger"></span>
              </label>
              <button type="button" class=" mt-11 mb-8 btn btn-sm btn-primary transition-3d-hover mr-1" data-toggle="modal" data-target="#ModalScrollBody">
		             	See more...
		          </button>
        </div>
      </div>
    </div>
   </div>
  


</main>
<div class="modal  fade" tabindex="-1" id="ModalScrollBody" role="dialog">
	  <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Reservation ID: <?php echo $record['ResId']; ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
         
          <div class="container">
             <div class="row">
                  <div class="col-md-6 text-center">
                      <h3>Reservation ID : <?php echo $record['ResId']; ?></h3>
                  </div>
                  <div class="col-md-6 text-center">
                      <h3>Customer ID : <?php echo $record['NIC']; ?></h3>
                  </div> 
              </div>
          

              <div class="row mt-3">
                <div class="col-md-6 text-center">

                    <div class="numbertext"></div>
                    <img src="images/car-1.jpg" style="width:100%">

                  </div>
                 
                <div class="col-md-6 text-center">
                      <div class="row">
                        <div class="col-md-4">
                                <label id="nameLabel" class="form-label mt-9">
                                Reservation Date : <?php echo $record['RequiredDate']; ?>
                                <span class="text-danger"></span>
                                </label>
                                <label id="nameLabel" class="form-label mt-9">
                                Rental Period : <?php echo $record['RentalPeriod']; ?>
                                <span class="text-danger"></span>
                                </label>
                                <label id="nameLabel" class="form-label mt-9">
                                Driver ID : <?php echo $record['DriverID']; ?>
                                <span class="text-danger"></span>
                                </label>
                        </div>
                        <div class="col-md-4">
                              <label id="nameLabel" class="form-label mt-9">
                              Reservation Status : <?php echo $record['Status']; ?>
                              <span class="text-danger"></span>
                              </label>
                              <label id="nameLabel" class="form-label mt-9">
                                Pick-up Location : <?php echo $record['PickUpPoint']; ?>
                              <span class="text-danger"></span>
                              </label>
                              <label id="nameLabel" class="form-label mt-9">
                                Destination : <?php echo $record['Destination']; ?>
                              <span class="text-danger"></span>
                              </label>
                        </div> 
                        <div class="col-md-4">
                              <label id="nameLabel" class="form-label mt-9">
                                Vehicle Number : <?php echo $record['VehicleNo']; ?>
                              <span class="text-danger"></span>
                              </label>
                              <label id="nameLabel" class="form-label mt-9">
                                Pick-up Time : <?php echo $record['PickUpTime']; ?>
                              <span class="text-danger"></span>
                              </label>
                              <label id="nameLabel" class="form-label mt-9">
                                Reserved Date : <?php echo $record['ReservedDate']; ?>
                              <span class="text-danger"></span>
                              </label>
                        </div> 
                      </div>

                 </div>
                
              </div>
          
          </div>       
	      </div>

	      <div class="modal-footer">
        <a href="editreservation.php?ResId=<?php echo $record['ResId']; ?>" class="btn btn-sm btn-primary transition-3d-hover mr-1">Edit Reservation</a>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
  <?php
        }
  ?>
  <!-- ========== END MAIN ========== -->

  <?php include '../footer.php';?>

  <script>
  var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
  </script>
 
 
  

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