<?php 
    include '../../config.php';
    $sql=mysqli_query($con,"DELETE FROM trip WHERE TId = '$_GET[id]'");
    if($sql){
        header('Location:AllTripTable.php');
    }else{
        echo '<script>alert("Sorry,Can Not Delete This Trip, Try Again!!");</script>';
    }

?>