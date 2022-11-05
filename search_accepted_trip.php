<?php
session_start();

include '../../config.php';
if(isset($_SESSION['mysess'])){

  
  if(isset($_POST['btnSearch'])){
    $nic=$_POST['NIC'];
    
    $sqlq =mysqli_query($con,"SELECT * FROM reservation WHERE NIC = '$nic'");
    if($sqlq){
        while($record=mysqli_fetch_array($sqlq)){
            $ResId = $record['ResId'];
        }
    }

    header('Location:AddTrip.php?ResId='.$ResId);
  }

  $sqlr = mysqli_query($con,"SELECT * FROM reservation r, user u WHERE r.Status='Pending' AND r.NIC = u.user_id");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Administration | Kumara Rent A Car</title>

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

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">

    <?php 
      include 'header.php';
    ?>
    <!-- End Breadcrumb Section -->

    <!-- Content Section -->
    <div class="bg-light">
      <div class="container space-2">
        
        <h2 class="h1 mb-6">Search Accepetd Reservation   (<i class="fa fa-bell" aria-hidden="true" id="noty_num">5</i>)</h2>

        <!-- Personal Info Form -->
        <form class="js-validate" method="POST">
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-2">
              <div class="js-form-message">
                <label id="nameLabel" class="form-label">
                  Customer NIC
                  <span class="text-danger">*</span>
                </label>
                <div class="form-group">
                  <select class="form-control custom-select" name="NIC" required
                          data-msg="Please select month."
                          data-error-class="u-has-error"
                          data-success-class="u-has-success">
                    <option value="Choose" selected="selected">Choose</option>
                    <?php
                      while($record=mysqli_fetch_array($sqlr)){
                    ?>
                    <option value="<?php echo $record['NIC'];?>"><?php echo $record['NIC'];?></option>
                    
                    <?php
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>
          
          <!-- Buttons -->
          <button type="submit" name="btnSearch" class="btn btn-sm btn-primary transition-3d-hover mr-1 mb-6">Search</button>
          <!-- End Buttons -->
        </form>
        <!-- End Personal Info Form -->
      </div>
    </div>
    <!-- End Content Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php 
    include 'footer.php'
  ?>
  <!-- ========== END FOOTER ========== -->
  <script type="text/javascript">
              function loadDoc() {
                setInterval(function() {
                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("noty_num").innerHTML = this.responseText;
                    }
                  };
                  xhttp.open("GET","get_pending_list.php",true);
                  xhttp.send(); 
                }, 1000);
                
              }
              loadDoc();
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
}else{
	echo "<script>alert('Please Login First');window.location='../index.php';</script>";
}
?>