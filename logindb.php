<?php
include("connection.php");
session_start();
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from users where username='$username' && password='$password'";
	
	$result=$conn->query($sql);
	if($result -> num_rows>0)
	{
		$row=$result->fetch_array();
		
		if($row['type']=="admin")
		{
		    echo " <script> alert('welcome Admin'); 
	            window.location='admin_dashbord.php';
	            </script>";
		}
		else if($row['type']=="dctr")
		{
			$_SESSION['name']=$row['name'];
			$_SESSION['id']=$row['id'];
		   echo " <script> alert('welcome doctor'); 
	            window.location='docterdashboard.php';
	            </script>";
		}
		else if($row['type']=="ptnt")
		{
			
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			echo " <script> alert('welcome'); 
	            window.location='patientdashboard.php';
	            </script>";
		}
		
		
		else
		{
			echo " <script> alert('Invalid Login'); 
	            window.location='login1.php';
	            </script>";
		}
		
			
			
			
	}
	if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from patient where username='$username' && password='$password'";
	
	$result=$conn->query($sql);
	if($result -> num_rows>0)
	{
		$row=$result->fetch_array();
		
		if($row['type']=="admin")
		{
		    echo " <script> alert('welcome Admin'); 
	            window.location='admin_dashbord.php';
	            </script>";
		}
		else if($row['type']=="dctr")
		{
			$_SESSION['name']=$row['name'];
			$_SESSION['id']=$row['id'];
		   echo " <script> alert('welcome doctor'); 
	            window.location='docterdashboard.php';
	            </script>";
		}
		else if($row['type']=="ptnt")
		{
			
			$_SESSION['id']=$row['id'];
			$_SESSION['name']=$row['name'];
			echo " <script> alert('welcome'); 
	            window.location='patientdashboard (1).php';
	            </script>";
		}
		
		
		else
		{
			echo " <script> alert('Invalid Login'); 
	            window.location='login1.php';
	            </script>";
		}
		
			
			
			
	}
	$conn->close();
}
}
?>
