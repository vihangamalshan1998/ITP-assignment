<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Title -->
    <title>Administration | Trip More Details</title>

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
    session_start();
    include '../../config.php';
    include 'header.php';
      $id = $_GET['id'];
     $sql="SELECT * from trip t, reservation r , user u  WHERE TId = '$id' AND t.ResId = r.ResId AND r.NIC = u.NIC";
      $results=$con->query($sql);
			if ($results -> num_rows >0)
			{
				while($row = $results->fetch_assoc())
				{
          

      
    ?>
    <div class="bg-light">
      <div class="container space-2">
        <!-- Update Avatar Form -->
        <h2><p class="lead text-primary mt-0" style="font-size:48px;">Trip Details</p></h2>
        <form class="media align-items-center mb-7">
          <div class="u-lg-avatar mr-3">
            <img class="img-fluid rounded-circle" src="../../Customer/img/<?php echo $row['Profile_Pic'];?>" alt="Image Description">
          </div>
          
          <div class="media-body">
            <label for="cutomer-name" class="lead"> <?php echo $row['Fname'];?> </label>
            
            <span class="d-block text-dark">Trip ID: <?php echo $id; ?></span>
                <span class="d-block text-dark">Reservation ID: <?php echo $row['ResId']; ?></span>
          </div>
        </form>
        <!-- End Update Avatar Form -->

        <!-- Personal Info Form -->
        <form method="post"  enctype="multipart/form-data">
            <div class="row">
                <!-- Starting Mileage-->
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <label for ="inputStartingMileage" class="lead">Starting Mileage : </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="mileage" value = "<?php echo $row['s_mileage']?>" readonly>
                        <div class="input-group-prepend">
                            <span class="input-group-text">km</span>
                        </div>         
                    </div> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                    <label for ="deposit" class="lead">Deposit: </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">LKR</span>
                        </div> 
                        <input type="text" class="form-control" name="deposit"  value = "<?php echo $row['Deposit']?>" readonly>
                    </div> 
                </div>
            </div>
            <div class="row">
                <!-- Starting Mileage-->
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <label for ="equipment" class="lead">Equipment : </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="equipment"  value = "<?php echo $row['equipments']?>" readonly>
                              
                    </div> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                    <label for ="Start_date" class="lead">Start Date: </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="Start_date"  value = "<?php echo $row['s_date']?>" readonly>
                    </div> 
                </div>
            </div>
            <div class="row">
                <!-- Starting Mileage-->
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <label for ="Status" class="lead">Status </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="status"  value = "<?php echo $row['Status']?>" readonly>     
                    </div> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                    <label for ="Description" class="lead">Description: </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="description"  value = "<?php echo $row['Description']?>" readonly>
                    </div> 
                </div>
            </div>
            
          <!-- Buttons -->
          <div class="row">
            <div class="col-12">
            <a href="editTrip.php?id=<?php echo $id;?>"><button type="button"class="btn btn-sm btn-primary transition-3d-hover" >Goto Edit>></button></a>
              <a href="trip_delete.php?id=<?php echo $id;?>"><input type="button" name="delete" class="btn btn-sm btn-primary transition-3d-hover" value="Goto Delete>>"></a>
            </div>
          </div>
          
          </form>
          <!-- End Buttons -->
        
        <?php
          }
        }else{
          echo "Error";
        }
        ?>
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