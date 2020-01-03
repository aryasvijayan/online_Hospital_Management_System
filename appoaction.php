<?php
include("connection.php");
session_start();
//$id=$_POST['id'];
$docname=$_POST['doc_name'];
$pat_name=$_POST['patient_name'];
$phn=$_POST['phone_no'];
$symptoms=$_POST['symptoms'];
$date=$_POST['avail_date'];
$time=$_POST['time'];


	
if(isset($_POST['submit']))
{
	$docname=$_POST['doc_name'];
	$date=$_POST['avail_date'];
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['doc_name']))and (isset($_POST['patient_name']))and (isset($_POST['phone_no']))and (isset($_POST['symptoms']))and (isset($_POST['avail_date'])) and (isset($_POST['time']))) 
	{
		$sql1="select * from appo where time='$time'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "already an appoinment exist on that time.";
        }
		else{
	
	 	
			
 $sql="insert into appo(patient_name,doc_name,phone_no,symptoms,avail_date,time)values('$pat_name','$docname','$phn','$symptoms','$date','$time')";
/* $sql="INSERT INTO `appo'(`patient_name`, `doc_name`, `phone_no`, `symptoms`, `avail_date`, `time`) VALUES ('$pat_name','$docname','$phn','$symptoms','$date','$time')";*/
}
	}
	
 if($conn->query($sql)==TRUE){
	 echo " <script>alert('registration success');
	
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 
		 </script>";
	 }

	}
?>