<?php
	session_start();
	include ('config.php');
	//print_r($_POST);
	if(isset($_POST['login']))
	{
		$nic = $_POST['nic'];
		$password =$_POST['password'];
		//echo $password;
		//echo $nic;
		$sql = mysqli_query($con,"SELECT * FROM user WHERE NIC = '$nic' AND Password ='$password'");
		
		if($sql)
		{
				$_SESSION['nic'] = 	 $nic;
				echo"<script>alert('Welcome');</script>";
				header('location:driver-dashboard.php');
				
        }	
		else
			{
			
				header("Location:homepage.php");
			}
	}
	
?>