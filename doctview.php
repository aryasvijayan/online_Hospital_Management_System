
<!DOCTYPE html>
<!--  MARK 
-->
<html>
<head>
<title>Doctors</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">

<?php
include("connection.php");
session_start();
  $id=$_SESSION['id'];
  $sql1="select * from users where type='dctr'";
 
  $result = $conn->query($sql1);
?>
  <center><h1>Update Time</h1></center>
<form action="updateaction.php" method="get">

<table border='1px'>
<tr>
<th> id </th>
<th> Name</th>
<th> Specialization</th>
<th> Date</th>
<th> From</th>
<th> To</th>

</tr>

<?php foreach ($result as $row) { ?>
<td> <?php echo $row['id'];?></td>
<input type='hidden' name='id' value="<?php echo $row['id']; ?>">
<td> <?php echo $row['name'];?></td>
<input type='hidden' name='name' value="<?php echo $row['name']; ?>">
<td> <?php echo $row['specialization'];?></td>
<input type='hidden' name='specialization' value="<?php echo $row['specialization']; ?>">
<td><input type="date" name="avail_date" value="date">
  <td><input type="time" name="frm" value="From">
 <td><input type="time" name="tu" value="To">
  <td><input type="submit" name="submit" value="submit"></td>
<?php      }?>

</table>

<br>


</form>
<a href="docterdashboard.php">Back</a>
</body>
</html>