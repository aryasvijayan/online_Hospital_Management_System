<?php include("header.php");?>

<?php
include("connection.php");
session_start();
if(isset($_POST['submit']))
{
  $specilization=$_POST['specialization'];
  
  
  $sql1="select * from time where specialization='$specilization'";
  /*$sql="insert into  (date)values('$date')";*/
 
  $result = $conn->query($sql1);
?>
<div class="se">
<center>
<form action="appointment_form.php" method="post">
<br>
<br>
<h1>DOCTOR's LIST</h1>
<?php
/*echo "<b>name</b>".$name;
echo "<br>";
echo "<b>:</b>".$di;
echo "<br>";*/
echo "<table border='1px'>";
echo "<tr>";
echo "<th> name </th>";
echo "<th> specialization </th>";
echo "<th> Date </th>";
echo "<th> Time from </th>";
echo "<th> Time ends </th>";
echo "<th> make appoinment</th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);

echo "<tr>";
?>
<td> <?php echo $row['docname'];?></td>
<input type='hidden' name='name' value="<?php echo $row['name']; ?>">
<td> <?php echo $row['specialization'];?></td>
<input type='hidden' name='specialization' value="<?php echo $row['specialization']; ?>">

<td><input type="date" name="avail_date" value="<?php echo $row['avail_date']; ?>">

  <td><input type="time" name="frm" value="<?php echo $row['frm']; ?>">

 <td><input type="time" name="tu" value="<?php echo $row['tu']; ?>">
  <td><input type="submit" name="submit" value="submit"></td> 

 <?php
echo "</tr>";
}
echo "</table>";

//$conn->close();
?><br>

<?php
}
?>
</form>
</center>
</div>
<a href="patientdashboard.php">Back</a>
<?php include("footer.php");?>