<?php
    include ('config.php');

    session_start();

        if(isset($_POST['submit'])){
            $nic = $_POST['nic'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email= $_POST['email'];
            $user = $_POST['uname'];
            $pass = $_POST['pwd'];
            $add = $_POST['add1'];
            $liNo = $_POST['lno'];
            $exdate = $_POST['exdate'];
            $dob = $_POST['dob'];
            $ph1 = $_POST['phone1'];
            $ph2 = $_POST['phone2'];
            
            $img1 = $_FILES['nic1']['name'];
            $img2 = $_FILES['nic2']['name'];
            
            $image_3 = $_FILES['license_front']['name'];
            $image_4 = $_FILES['license_back']['name'];

            $image_5 = $_FILES['pro']['name'];
            

            echo $email;
            
            /*echo $fname;
            echo $lname;
            echo $add;
            echo $email;
            echo $user;
            echo $pass;*/


        $sql=mysqli_query($con,"INSERT INTO user VALUES ('','$nic','$fname','$lname','$add','$email','$user','$pass','Pending','Dis','$img1','$img2','$image_5')");
        if($sql){
            $path='driverimages/';

                move_uploaded_file($_FILES["nic1"]["tmp_name"],$path.$img1);
                move_uploaded_file($_FILES["nic2"]["tmp_name"],$path.$img2);
                move_uploaded_file($_FILES["pro"]["tmp_name"],$path.$img5);
                $sql2=mysqli_query($con,"INSERT INTO driver VALUES ('$nic','$liNo','$exdate',' $image_3','$image_4','$dob')");
                if($sql2){
                    move_uploaded_file($_FILES["license_front"]["tmp_name"],$path.$image_3);
                    move_uploaded_file($_FILES["license_back"]["tmp_name"],$path.$image_4);
                    $sql3 = mysqli_query($con,"INSERT INTO contact_details VALUES ('$nic','$ph1','$ph2')");
                
    
                    echo"<script>alert('Sucess!');
                         </script>";
                         header('location:login.php');
    
                }else{
                    echo "Unsuccefull";
                }
        }else{
            echo "Unsuccefull";
        }

    }
?>


        

