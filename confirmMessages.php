<?php 
    include 'config.php';
    $sql = mysqli_query($con,"UPDATE reminder SET Status = 'Seen' WHERE RId = '$_GET[id]'");
    if($sql){
        echo "<script>alert('Successfully Updated!');</script>";
        echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =AddAndViewReminders.php'>";
    }else{
        echo "<script>alert('Unsuccessfully!');</script>";
        echo "<META HTTP-EQUIV ='Refresh' Content ='0; URL =AddAndViewReminders.php'>";
    }

?>