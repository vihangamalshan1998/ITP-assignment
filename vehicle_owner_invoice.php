<?php
session_start();

include '../../config.php';
if(isset($_SESSION['mysess'])){

  $sql =  mysqli_query($con,"SELECT * FROM payment p,user_payment u,user a WHERE p.PId=u.PId AND u.UID=a.user_id AND p.PId = '$_GET[pid]'");
  if($sql){
    while($record=mysqli_fetch_array($sql)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Invoice | Kumara Rent A Car</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
</head>
<body>
  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Invoice Section -->
    <div class="container space-2 px-md-7 px-lg-11">
      <div class="card bg-img-hero" style="background-image: url(../../assets/svg/components/bg-elements-6.svg);">
        <div class="card-body p-5 p-md-7 p-lg-11">
          <div class="row justify-content-lg-between align-items-sm-center mb-11">
            <div class="col-sm-6 col-lg-4 order-sm-2 text-sm-right mb-5 mb-sm-0">
              <h1 class="h2 font-weight-medium mb-0">
                Invoice #
                <small class="d-block">000000<?php echo $record['PId'];?></small>
              </h1>
            </div>

            <div class="col-sm-6 col-lg-4 order-sm-1">
              <!-- Logo -->
              <img class="mb-2" src="images/logo2.png" alt="Logo">
              <h2 class="h4 text-primary font-weight-semi-bold">Kumara Rent-A-Car</h2>
              <!-- End Logo -->

              <!-- Address -->
              <address>
                43 School Lane, Waragoda Road, Kelaniya
              </address>
              <small class="d-block text-muted">tel: 0777631543/0718019197</small>
              <!-- End Address -->
            </div>
          </div>

          <!-- Bill To -->
          <div class="row justify-content-md-between mb-7">
            <div class="col-md-5 col-lg-4">
              <h3 class="h5">Bill to:</h3>
              <span class="d-block"><?php echo $record['Fname'];?> <?php echo $record['Lname'];?></span>
              <address class="text-secondary mb-0">
                <?php echo $record['Address'];?>
              </address>
            </div>

            <div class="col-md-5 col-lg-4 mt-6">
              <dl class="row mb-0">
                <dt class="col-5 col-md-6 font-weight-normal text-secondary">Invoice date:</dt>
                <dd class="col-7 col-md-6 font-weight-medium"><?php echo $record['Date'];?></dd>
              </dl>
              
            </div>
          </div>
          <!-- End Bill To -->

          <!-- Table -->
          <table class="table table-heighlighted font-size-1 mb-9">
            <thead>
              <tr class="text-uppercase text-secondary">
                <th scope="col" class="font-weight-medium">Vehicle No</th>
                <th scope="col" class="font-weight-medium">Month</th>
                <th scope="col" class="font-weight-medium text-right">Price</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="font-weight-normal"><?php echo $record['vehicle_no'];?></th>
                <td><?php echo $record['Description'];?></td>
                <td class="text-right">LKR <?php echo $record['Amount'];?>.00</td>
              </tr>
            </tbody>
            <tfoot>
              <tr class="h6">
                <td scope="row">Total</td>
                <td colspan="3" class="text-right">LKR <?php echo $record['Amount'];?>.00</td>
              </tr>
            </tfoot>
          </table>
          <!-- End Table -->

          <!-- Contacts -->
          <div class="row justify-content-lg-between">
            <div class="col-md-8 col-lg-7 order-md-2 mb-5 mb-md-0">
              <h4 class="h6">Thank you!</h4>
              <p class="font-size-1">If you have any questions concerning this invoice, use the following contact information:</p>

              <span class="d-block">
                <small class="font-weight-medium">email:</small>
                <small class="text-muted">rathne.rk@gmail.com</small>
              </span>
              <small class="font-weight-medium">telephone:</small>
              <small class="text-muted">0777631543/0718019197</small>
            </div>

            <div class="col-md-4 col-lg-3 order-md-1 align-self-end">
              <p class="small text-muted mb-0">&copy; 2019 Htmlstream.</p>
            </div>
          </div>
          <!-- End Contacts -->
        </div>
      </div>

      <div class="text-right mt-5">
        <button type="button" class="btn btn-primary btn-sm-wide transition-3d-hover" onclick="window.print();return false;">
          <span class="fas fa-print mr-2"></span>
          Print
        </button>
      </div>
    </div>
    <!-- End Invoice Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>
</body>
</html>
<?php
    
  }
}
}else{
	echo "<script>alert('Please Login First');window.location='../index.php';</script>";
}
?>