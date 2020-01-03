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
$sql = "SELECT * FROM users WHERE type='dctr'";
$result=$conn->query($sql);?>
<center><h1>Doctor Details </h1></center>
<form action="editd.php">
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> Name </th>";
echo "<th> Specialization </th>";



echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["specialization"]."</td>";

?>
</a></td>
</div>
 <?php
echo "</tr>";
}
echo "</table>";
$conn->close();
?><br>
<?php include("footer.php");?>