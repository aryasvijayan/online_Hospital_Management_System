<?php include("header.php");?>
  <div class="se">
   
    <form align="center" action="appoaction.php" method="POST">
	<br>
	<br>
	<h1>Appoinment Form</h1>
	  Doc_name : <input type="text" name="doc_name"><br><br>
     Patient_name :<input type="text"   name="patient_name"><br><br>
     Phone_no : <input type="text" name="phone_no"><br><br>
	  symptoms :<input type="text"  name="symptoms"><br><br>
	 Date :<input type="date"  name="avail_date"><br><br>
	 Time :<input type="time"  name="time"><br><br>
     <input type="submit" name="submit" value="Make an appointment">
    </form>
  </div>

<?php include("footer.php");?>