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

<table class="table table-striped top">
  <thead>
    <tr>
      <th scope="col">NIC</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">User Name</th>
      <th scope="col">Status</th>
      <th scope="col">Discription</th>
      <th scope="col">Documents</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
<?php


include ('config.php');
$sql =  mysqli_query($con,"SELECT * FROM user");
  

if($sql){
  while($record=mysqli_fetch_array($sql)){
    $nic=$record['NIC'];
    $fname=$record['Fname'];
    $lname=$record['Lname'];
    $address=$record['Address'];
    $email=$record['Email'];
    $user=$record['UserName'];
    $stat=$record['Status'];
    $dis=$record['Discription'];
    

  

?>


  <tbody>

    <tr>
      <th scope="row"><?php echo $nic; ?></th>
      <td><?php echo $fname; ?></td>
      <td><?php echo $lname; ?></td>
      <td><?php echo $address;?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $user; ?></td>
      <td><?php echo $stat; ?></td>
      <td><?php echo $dis; ?></td>
      <a href="document.php"><td><button class="btn btn-primary btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Add"><i class="fa fa-table"></i></button></td></a>
      <td><button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></td>
      <td><button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button></td>
    </tr>
      <?php
    
  }
}else{
  echo "Unsuccessfull";
}?>
  </tbody>
</table>
</div>
<a href="Adddrivers.php"><button class="btn btn-warning btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-plus" aria-hidden="true">Add Drivers</i></button></a>
</div>
</main>

</body>
<?php 

include ('footer.php');

?>
</html>