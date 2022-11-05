<?php
 session_start();
    include '../config.php';
    if(isset($_POST['submit'])){
        $img = $_FILES['image']['name'];
        $img2 = $_FILES['image2']['name'];
        $pPic = $_FILES['propic']['name'];
        
        
        $fn= $_POST['fname'];
        $nc = $_POST['nic'];
        $ln = $_POST['lname'];
        $ad = $_POST['address'];
        $em = $_POST['email'];
        $un = $_POST['uname'];
        $pw = $_POST['pwd'];

        $phone2  = $_POST['phone1'];
         $phone1 = $_POST['phone2'];
        /*echo $fn;
        echo $nc;
        echo $ln;
        echo $ad;
        echo $em;
        echo $un;
        echo $pw;*/
        
        $sql = mysqli_query($con,"INSERT INTO user VALUES ('','$nc','$fn','$ln','$ad','$em','$un','$pw','pending','ane manda','$img','$img2','$pPic')");
        $uid=mysqli_insert_id($con);
        if($sql){
            $path='img/';
            move_uploaded_file($_FILES["image"]["tmp_name"],$path.$img);
            move_uploaded_file($_FILES["image2"]["tmp_name"],$path.$img2);
            move_uploaded_file($_FILES["propic"]["tmp_name"],$path.$pPic);
             
            header('Location:4.profile.php?uid='.$uid);
            $_SESSION['mysess']=mt_rand();
            $_SESSION['uid']=$uid;

            $sql2 = mysqli_query($con,"INSERT INTO contact_details VALUES ( '$nc','$phone1',' $phone2')");
            if($sql2)
            {
                //echo 'Success!';
            }

        }else{
           // echo"weda nethoo";
        }
    }

?>