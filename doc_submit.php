<?php
/* DOCTOR DATABASE CONNECTION
*Author:
*/



include("connection.php");
session_start();

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$type=$_POST['type'];
$qualification=$_POST['qualification'];
$specilization=$_POST['specilization'];
$experience=$_POST['experience'];
$cladd=$_POST['cladd'];
$id_proof=$_POST['id_proof'];
$id_no=$_POST['id_no'];
$username=$_POST['username'];
$pswd1=$_POST['password'];
$pswd2=$_POST['conform'];
	
	
if(isset($_POST['submit']))
{
	
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['name']))and (isset($_POST['mobile']))and (isset($_POST['email']))and (isset($_POST['type'])) and (isset($_POST['qualification'])) and (isset($_POST['specilization']))and (isset($_POST['experience'])) and (isset($_POST['cladd']))and(isset($_POST['id_proof']))and (isset($_POST['id_no'])) and (isset($_POST['username'])) and (isset($_POST['password']))) 
	{
		$sql1="select * from users where email='$email'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "Email or Username already exist, try something else.";
        }
		else{
			
 $sql="insert into users(name,email,mobile,type,qualification,specialization,experience,cladd,id_proof,id_no,username,password)values('$name','$email','$mobile','$type','$qualification','$specilization','$experience','$cladd','$id_proof','$id_no','$username','$pswd1')";

		}
		}
 if($conn->query($sql)==TRUE){
	 echo " <script>
	 window.location='login1.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='doctor_registration.php';
		 </script>";
	 }


}	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>