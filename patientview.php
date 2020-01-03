<?php include("header.php");?>
<div align="center"> 
<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "hms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM patient WHERE type='ptnt'";
$result=$conn->query($sql);?>
<div class="">
<center><h1>Patient Details </h1></center>
<form action="editp.php">
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> Name </th>";

echo "<th> Gender </th>";
echo "<th> Age </th>";
echo "<th> Modify </th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["gender"]."</td>";
echo "<td>".$row["age"]."</td>";
?>
<td><a href='editp.php?id=<?=$row["id"]?>'>Edit</a>||<a href='deletep.php?id=<?=$row["id"]?>'>Delete</a></td>
</div>
 <?php
echo "</tr>";
}
echo "</table>";
$conn->close();
?><br>
<?php include("footer.php");?>