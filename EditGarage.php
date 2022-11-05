<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Title -->
    <title>Edit Garage Details</title>

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
  include 'config.php';
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
                        <h2>Edit Garage Details</h2>
                    </div>
                </div>
            </div>
        </div>
      <div class="container space-2">

      <?php

                $sql=mysqli_query($con,"SELECT * FROM garage g,support_service s WHERE g.G_ID='$_GET[G_ID]'AND  g.G_ID=s.S_ID");

                while($record=mysqli_fetch_array($sql)){

                
      ?>
        
        <!-- Update Avatar Form -->
        <form class="media align-items-center mb-7">
         
          <div class="media-body">
            <div class="container">
          <div class="row text- center">
            <div class="col-md-4">
            <label for="cutomer-name" class="lead">Garage ID : <?php echo $record['G_ID']; ?></label>
            </div>
            <div class="col-md-4">
            <label for="cutomer-name" class="lead ">Vehicle No. -  <?php echo $record['Vehicle_No']; ?></label>
            </div>
            <div class="col-md-4">
            <label for="cutomer-name" class="lead">Date - <?php echo $record['Repaired_Date']; ?></label>
            </div>
          </div>
          </div>
        </form>
          <?php
                }
          ?>
        <!-- End Update Avatar Form -->

        <!-- Personal Info Form -->
        <form method="post"  enctype="multipart/form-data">

            <div class="row">
              
                <!-- Starting Mileage-->
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 mt-5">
                    <label for ="Gname" class="lead">Garage Name </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="Gname">
                              
                    </div> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6 mt-5">
                    <label for ="Gphone" class="lead">Garage Phone No</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="Gphone">
                    </div> 
                </div>
            </div>
            <div class="row">
                <!-- Starting Mileage-->
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <label for ="Status" class="lead">Garage Address</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="status">     
                    </div> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                    <label for ="Tamount" class="lead">Total Amount</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  name="Tamount">
                    </div> 
                </div>
            </div>
          <!-- Buttons -->
          <div class="row">
          
            <div class="col-md-8">

            </div>
            <div class="col-md-4">
              <input type="submit" name="submit"  class="btn btn-sm btn-primary transition-3d-hover" value="Update">
              <a href="GView.php" class="btn btn-sm btn-primary transition-3d-hover btn-warning">Cancel</a>
              
              <input type="submit" name="submit"  class="btn btn-sm btn-primary transition-3d-hover btn-danger" value="Delete">
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