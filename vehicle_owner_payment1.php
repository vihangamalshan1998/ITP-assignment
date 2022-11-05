<?php
session_start();

include '../../config.php';
if(isset($_SESSION['mysess'])){

  
  if(isset($_POST['btnCreate'])){

    $date = date("Y-m-d");
        
    $sql=mysqli_query($con,"INSERT INTO Payment (Amount,Date,Description,Type) 
    VALUES('$_POST[amount]','$date','$_POST[month]','Pending')");

    $pid=mysqli_insert_id($con);
    
        if($sql){
          $sql=mysqli_query($con,"INSERT INTO user_payment (PId,UID,vehicle_no) VALUES('$pid','$_POST[user_id]','$_POST[vehicle_no]')");
            echo "<script>alert('Invoice Created!');</script>";
            header('Location:vehicle_owner_invoice.php?pid='.$pid);	
        
        }else{
            
            echo "<script>alert('Record Added Failed!');</script>";
        }
  }

  $sqlr = mysqli_query($con,"SELECT * FROM vehicle v,user u WHERE v.NIC=u.NIC AND v.vehicle_No='$_GET[vno]'");



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
        
        <h2 class="h1 mb-6">Vehicle Owner Payment</h2>

        <form class="js-validate" method="POST">

          <?php
            while($record=mysqli_fetch_array($sqlr)){
          ?>

            <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="usernameLabel" class="form-label">
                  Vehicle Number
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                <input type="hidden" class="form-control" name="user_id" value="<?php echo $record['user_id'];?>" readonly aria-describedby="usernameLabel"
                        data-msg="Please enter your username."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="vehicle_no" value="<?php echo $record['vehicle_No'];?>" readonly aria-describedby="usernameLabel"
                        data-msg="Please enter your username."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>
          <div class="row">
            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="usernameLabel" class="form-label">
                  Vehicle Owner
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="owner_name" value="<?php echo $record['Fname'];?> <?php echo $record['Lname'];?>" readonly aria-describedby="usernameLabel"
                        data-msg="Please enter your username."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->

            <!-- Input -->
            <div class="col-sm-6 mb-6">
              <div class="js-form-message">
                <label id="usernameLabel" class="form-label">
                  Owner Address
                  <span class="text-danger">*</span>
                </label>

                <div class="form-group">
                  <input type="text" class="form-control" name="owner_address" value="<?php echo $record['Address'];?>" readonly aria-describedby="usernameLabel"
                        data-msg="Please enter your username."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <div class="row">

            <!-- Input Group -->
            <div class="col-md-6 mb-sm-6">
              <div class="js-focus-state form-group">
                <label id="usernameLabel" class="form-label">
                  Monthly Fee
                  <span class="text-danger">*</span>
                </label>
                <div class="input-group">
                  <div id="dribbleProfileLabel" class="input-group-prepend">
                    <span class="input-group-text">LKR</span>
                  </div>
                  <input type="text" class="form-control" name="amount" value="<?php echo $record['RentalPrice'];?>.00" readonly aria-describedby="dribbleProfileLabel"
                        data-msg="Please enter a valid URL address."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
                </div>
              </div>
            </div>
            <!-- End Input Group -->
          </div>

          <div class="row">

            <!-- Input -->
            <div class="col-md-6 mb-sm-6">
              <div class="js-form-message">
                <label id="usernameLabel" class="form-label">
                  Month
                  <span class="text-danger">*</span>
                </label>
                <div class="form-group">
                  <select class="form-control custom-select" name="month" required
                          data-msg="Please select month."
                          data-error-class="u-has-error"
                          data-success-class="u-has-success">
                    <option value="January" selected="selected">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- End Input -->
          </div>

          <!-- Buttons -->
          <button type="submit" name="btnCreate" class="btn btn-sm btn-primary transition-3d-hover mr-1">Create Invoice</button>
          <!-- End Buttons -->
          <?php
            }
          ?>
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