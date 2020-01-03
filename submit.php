<?php
include("connection.php");
session_start();

$name=$_POST['name'];
$type=$_POST['type'];
$age=$_POST['age'];
$email=$_POST['email'];
$phn=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$ID=$_POST['id_proof'];
$IDN=$_POST['id_no'];
$uname=$_POST['username'];
$pswd1=$_POST['password'];
$pswd2=$_POST['conform'];	
	
if(isset($_POST['submit']))
{
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['name']))and (isset($_POST['age']))and (isset($_POST['gender']))and (isset($_POST['address']))and (isset($_POST['mobile'])) and (isset($_POST['email']))and (isset($_POST['username'])) and (isset($_POST['password']))) 
	{
		$sql1="select * from users where email='$email'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "Email or Username already exist, try something else.";
        }
		else{
	
	 
			
 $sql="insert into patient(name,type,age,email,mobile,gender,address,id_proof,id_no,username,password)values('$name','$type','$age','$email','$phn','$gender','$address','$ID','$IDN','$uname','$pswd1')";

		}
	}
 if($conn->query($sql)==TRUE){
	 echo " <script>alert('registration success');
	 window.location='login1.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='patient_registration.php';
		 </script>";
	 }

	}
	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>