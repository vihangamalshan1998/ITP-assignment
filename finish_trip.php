
<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Title -->
    <title>Administration | Trip Finish</title>

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
      include 'header.php';
      include '../../config.php';
      $id = $_GET['id'];
      $sql=mysqli_query($con,"SELECT * from reservation R,user U, trip t   WHERE  TID = '$id' AND t.ResID = R.ResID AND R.NIC = U.NIC ");
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
            <img class="img-fluid rounded-circle" src="../../Customer/img/<?php echo $img; ?>" alt="Image Description">
          </div>

          <div class="media-body">
            <label for="cutomer-name" class="lead"> <?php echo $fname;?> </label>
            <button type="button" class="btn btn-sm btn-soft-secondary transition-3d-hover mb-1 mb-sm-0 ml-5" >Show quick history</button>
               <small><span class="d-block text-dark">Trip ID: <?php echo $id; ?></span></small>
            
            
          </div>
        </form>
        <!-- End Update Avatar Form -->

        <!-- Personal Info Form -->
        <form method="post" action="" class="was-validated" enctype="multipart/form-data">

          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <label for ="inputStartingMileage" class="lead">Ending Mileage : </label>
            </div> 
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <label for ="inputDeposit" class="lead">Return Equipments : </label>
            </div>
          </div>

          <input type = "hidden" name="id" value= '<?php echo $id?>'>

          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-12 input-group mb-3">
                  <input type="number" class="form-control" placeholder="Please input mileage " name="e_mileage">
                  <div class="input-group-prepend">
                      <span class="input-group-text">km</span>
                  </div>         
                </div>           
              </div>
            </div>
            
            <!-- input deposit-->
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <select class="form-control custom-select" name="r_equ" required>
                      <option value="received">Received</option>
                      <option value="not_received">Not Received</option>
                    </select>
                    </label>
                  </div>
                </diV>
              </div>
            </div>
          </div>             
          <label for="Description" class="lead">  Description :  </label>
          <div class="row">
            <div class="form-group col-12">
              <textarea class="form-control"  name ="des" id="exampleFormControlTextarea1" rows="3" class="form-control-lg"></textarea>
            </div>
          </div>
          <!-- Buttons -->
          <div class="row">
            <div class="col-12">
              <input type="submit" name="submit" class="btn btn-sm btn-primary transition-3d-hover" value="Finish">
            </div>
          </div>
          
          
          <!-- End Buttons -->
        </form>
      </div>
    </div>     
    <?php 
        include('footer.php'); 
        $date = date("Y/m/d");
        $time = date("h:i:sa");
        if(isset($_POST['submit'])){
            $sql = mysqli_query($con,"UPDATE trip SET e_mileage='$_POST[e_mileage]', e_date ='$date',e_time='$time',returnEquipment='$_POST[r_equ]',Description='$_POST[des]',Status='Finished' WHERE TId = '$_POST[id]'");
            if($sql){
                header('Location:dash.php');
            }
        }      
          
    
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
