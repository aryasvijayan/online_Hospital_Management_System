<!DOCTYPE html>
 <?php session_start(); ?>
 <?php
include("connection.php");


echo $id=$_GET['id'];
echo $name=$_GET['name'];
echo $specialization=$_GET['specialization'];
echo $date=$_GET['avail_date'];
echo $from=$_GET['frm'];
echo $to=$_GET['tu'];


 echo $sql="insert into time(id,docname,specialization,avail_date,frm,tu)values
        ('$id','$name','$specialization','$date','$from','$to')";
  if($conn->query($sql)==TRUE){
	  echo "success";
	
     }
	 else{
		 echo "failure";
		
	 }


//}	?>