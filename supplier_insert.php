<?php
include 'config.php';
if(isset($_POST['submit'])){
    $snam = $_POST["sname"];
    $sadd = $_POST["saddress"];
    $phone = $_POST["phonenum"];
    $sema = $_POST["semail"];
    $jdat = $_POST["jdate"];
    $acnum = $_POST["accnum"];
    $acnam = $_POST["accname"];
    $acbr = $_POST["branch"];
    $sstat = 'Pending';

    $sql=mysqli_query($con,"INSERT INTO supplier(S_name,Address,Mobile_Number,Email,Joined_Date,Acc_No,Acc_Name,Branch,S_status) VALUES ('$snam','$sadd','$phone','$sema','$jdat','$acnum','$acnam','$acbr','$sstat')");
    if($sql){
        echo "success!";
    }
    else{
        echo "fail!";
    }
}

?>
