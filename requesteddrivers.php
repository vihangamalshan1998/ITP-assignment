<DOCTYPE html>
<html>
<head>
        <!-- Title -->
        <title>Driver Registation</title>

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" href="../favicon.ico">

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
<link rel="stylesheet" href="../../assets/css/new.css">
<link rel="stylesheet" href="../../assets/css/new1.css">
</head>

<body>

<?php 

include ('header.php');

?>
<div class="container">
<main id="content" role="main">

<div class="table-responsive-sm">

<table class="table table-striped ravini">
  <thead>
    <tr>
      <th scope="col">Reservation Id</th>
      <th scope="col">NIC</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Status</th>
      <th scope="col">Discription</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>972345678v</td>
      <td>10.05.2020</td>
      <td>10.00</td>
      <td>Assigned</td>
      <td>Assigned finished</td>
      <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></td>
      <td><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
      
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>926789021v</td>
      <td>19.08.2020</td>
      <td>11.00</td>
      <td>Not assigned</td>
      <td>Assign more</td>
      <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></td>
      <td><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
      
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>938904627v</td>
      <td>20.10.2020</td>
      <td>1.00</td>
      <td>Assigned</td>
      <td>null</td>
      <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></td>
      <td><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
      
    </tr>
    <tr>
    <th scope="row">4</th>
      <td>912456389v</td>
      <td>02.11.2019</td>
      <td>9.00</td>
      <td>Not assigned</td>
      <td>dont assign</td>
      <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></td>
      <td><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
      
    </tr>
    <tr>
    <th scope="row">5</th>
      <td>923456789v</td>
      <td>15.10.2020</td>
      <td>2.00</td>
      <td>pending</td>
      <td>assign more</td>
      <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></td>
      <td><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
      
    </tr>
  </tbody>
</table>

</main>
<?php 

include ('footer.php');

?>
</body>


</html>