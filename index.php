<?php include("header.php");?>
<!-- Docter dashboard
  *Author:Ebin
-->
<div >


<script>
function validate()
{
	
	
	var username=document.forms["login"]["username"].value;
	if(username=="")
	{
		alert("enter user name");
		document.forms["login"]["username"].focus();
		return false;
	}
	
	
	
	var password=document.forms["login"]["password"].value;
	if(password=="")
	{
		alert("enter password");
		document.forms["login"]["password"].focus();
		return false;
	}

	
	
		
	
	
}


</script>




<div class="log">
<center>
<h1>Login</h1>
<div class="lg">
<form method="POST" name="login" onsubmit="return validate()" action="logindb.php" >
<table class="">
 
<tr><td><strong>Username:</strong></td><td><input type="text" name="username" "><br><br> </td>
</tr>
<tr>
<td><strong>Password:</strong></td><td><input type="password" name="password" "><br><br> </td>
</tr>
 </table>
<input type="submit" name="login"value="login" > 



</form>
<a href="contact.php"> Contact us </a>&nbsp&nbsp
<a href="#"> Forgott Password </a>

</center>



</div>
<?php include("footer.php");?>
