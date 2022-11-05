<html>

<head>
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
    <link rel="stylesheet" href="../../assets/vendor/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="../../assets/css/theme.css">
</head>

<body>
    <div class="border rounded p-5">
        <?php 
        include '../../config.php';
        $sql = mysqli_query($con,"SELECT * FROM trip t, reservation r,user u WHERE t.ResId = r.ResId AND r.NIC = u.NIC AND t.TId = '$_GET[id]'");
            if($sql){
                while($result = mysqli_fetch_array($sql)){
    ?>
        <h4 class="h3">Invoice</h4>

        <div class="row mb-6">
            <div class="col-3">
                <span class="text-secondary">Reserved Date:</span>
                <span class="font-weight-medium"><?php echo $result['RequiredDate'];?></span>
            </div>
            <div class="col-3">
                <span class="text-secondary">Start Date:</span>
                <span class="font-weight-medium"><?php echo $result['s_date'];?></span>
            </div>
            <div class="col-6">
                <span class="text-secondary">End Date:</span>
                <span class="font-weight-medium"><?php echo $result['e_date'];?></span>
            </div>
        </div>

        <div class="row mb-6">
            <div class="col-3">
                <span class="text-secondary">Reservation Id:</span>
                <span class="font-weight-medium"><?php echo $result['ResId'];?></span>
            </div>
            <div class="col-3">
                <span class="text-secondary">Trip Id:</span>
                <span class="font-weight-medium"><?php echo $result['TId'];?></span>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <h5 class="text-dark font-size-1 text-uppercase">Billing address:</h5>
                <address class="text-secondary">
                    <h6 class="h5 text-dark"><?php echo $result['Address'];?></h6>
                    <?php echo $result['Email'];?>
                </address>
            </div>

            <div class="col-sm-6">
                <h5 class="text-dark font-size-1 text-uppercase">CUSTOMER info:</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <span class="text-secondary">First name:</span>
                        <span class="font-weight-medium"><?php echo $result['Fname'];?></span>
                    </li>
                    <li class="mb-2">
                        <span class="text-secondary">Last name:</span>
                        <span class="font-weight-medium"><?php echo $result['Lname'];?></span>
                    </li>
                    <li class="mb-2">
                        <span class="text-secondary">NIC:</span>
                        <span class="font-weight-medium"><?php echo $result['NIC'];?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-end mb-4">
            <div class="col-sm-6">
                <hr class="my-4">

                <h5 class="text-dark font-size-1 text-uppercase">Transaction details:</h5>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-secondary">Transaction amount</span>
                        <span class="font-weight-medium">LKR <?php echo $result['Deposit'];?></span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-secondary">Discount</span>
                        <span class="font-weight-medium">LKR 0.00</span>
                    </li>
                    <li class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-secondary">Total amount</span>
                        <span class="text-primary font-weight-medium">LKR <?php echo $result['Deposit'];?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-right mt-5">
            <button type="button" class="btn btn-primary btn-sm-wide transition-3d-hover"
                onclick="window.print();return false;">
                <span class="fas fa-print mr-2"></span>
                Print
            </button>
        </div>
    </div>

    <?php         
                }
            }
        ?>
</body>

</html>