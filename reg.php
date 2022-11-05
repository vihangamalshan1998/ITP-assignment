<?php
    session_start();
    include '../config.php';
    if(isset($_POST['submit'])){
        $img = $_FILES['image']['name'];
        $img2 = $_FILES['image2']['name'];
        $pPic = $_FILES['propic']['name'];
        $limg= $_FILES['limage']['name'];
        $limg2= $_FILES['limage2']['name'];
        $wimg= $_FILES['wimage']['name'];
        
        $fn= $_POST['fname'];
        $nc = $_POST['nic'];
        $ln = $_POST['lname'];
        $ad = $_POST['address'];
        $em = $_POST['email'];
        $un = $_POST['uname'];
        $pw = $_POST['pwd'];
        $mb1 = $_POST['phone1'];
        $mb2 = $_POST['phone2'];
        /*echo $fn;
        echo $nc;
        echo $ln;
        echo $ad;
        echo $em;
        echo $un;
        echo $pw;*/
        
        $sql = mysqli_query($con,"INSERT INTO user (NIC,Fname,Lname,Address,Email,UserName,Password,Status,NIC_Copy	,NIC_copy2,Profile_Pic )VALUES ('$nc','$fn','$ln','$ad','$em','$un','$pw','pending','$img','$img2','$pPic')");
        $uid=mysqli_insert_id($con);
        if($sql){
            $path='img/';
            move_uploaded_file($_FILES["image"]["tmp_name"],$path.$img);
            move_uploaded_file($_FILES["image2"]["tmp_name"],$path.$img2);
            move_uploaded_file($_FILES["propic"]["tmp_name"],$path.$pPic);
            $sql2 = mysqli_query($con,"INSERT INTO customer VALUES ('$nc','$limg','$limg2','$wimg')");
            if($sql2){
                $pathLi='li_imgs/';
                $pathWat = 'waterImg/';
                move_uploaded_file($_FILES["limage"]["tmp_name"],$pathLi.$limg);
                move_uploaded_file($_FILES["limage2"]["tmp_name"],$pathLi.$limg2);
                move_uploaded_file($_FILES["wimage"]["tmp_name"],$pathWat.$wimg);
                
                $sql3 =mysqli_query($con,"INSERT INTO contact_details VALUES ('$nc','$mb1','$mb2')");
                
                header('Location:customer_profile.php?uid='.$uid);
                $_SESSION['mysess']=mt_rand();
                $_SESSION['uid']=$uid;
            }
            

        }else{
            echo"Unsuccessful";
        }
    }

?>