<?php include("header.php");?>
<center>
<div class="reg">
<h1><center>Patient Registration<hr></center></h1>
<form name="register" action="submit.php"   method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
		var name=document.forms["register"]["name"].value;
		var type=document.forms["register"]["type"].value;
		var age=document.forms["register"]["age"].value;
		var email=document.forms["register"]["email"].value;
		var mobile=document.forms["register"]["mobile"].value;
		var gender=document.forms["register"]["gender"].value;
		var Addr=document.forms["register"]["address"].value;
		var idproof=document.forms["register"]["id_proof"].value;
		var idnum=document.forms["register"]["id_no"].value;
		var username=document.forms["register"]["username"].value;
		var pwd=document.forms["register"]["password"].value;
		var cpwd=document.forms["register"]["conform"].value;
		
		if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}	
		else if(type=="")
		{
			alert("plse entr the type");
			document.forms["register"]["type"].focus();
			return false;
		}	
		else if(age=="")
		{
			alert("plse entr the Age");
			document.forms["register"]["age"].focus();
			return false;
		}	
		else if(email=="")
		{
			alert("plse entr the email");
			document.forms["register"]["email"].focus();
			return false;
		}
		else if(mobile=="")
		{
			alert("plse entr the mobile");
			document.forms["register"]["mobile"].focus();
			return false;
		}
		else if(mobile.length<6)
		{
			alert("MOb num should contain min 6 value");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(gender=="")
		{
			alert("plse entr the gender");
			document.forms["register"]["gender"].focus();
			return false;
		}	
		else if(Addr=="")
		{
			alert("plse entr the Address");
			document.forms["register"]["address"].focus();
			return false;
		}	
		else if(idproof=="")
		{
			alert("plse add the documents needed");
			document.forms["register"]["idproof"].focus();
			return false;
		}
		else if(idnum=="")
		{
			alert("plse entr the id number");
			document.forms["register"]["idnum"].focus();
			return false;
		}
		else if(username=="")
		{
			alert("plse entr the password");
			document.forms["register"]["username"].focus();
			return false;
		}	
		else if(pwd=="")
		{
			alert("plse entr the password");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(cpwd=="")
		{
			alert("plse confirm the password");
			document.forms["register"]["conform"].focus();
			return false;
		}	
		
		else if(pwd.length<6)
		{
			alert("password min 6 value");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(pwd==cpwd)
			{
				return true;
			}
		else{
			alert("Password and conform password");
			return false;
		    }
		alert("checkpoint1");
			return true;
	}
</script>
Name:	 <input type="text"  name="name" placeholder="Enter your Name" ><br><br>
age	:   <input type="text"  name="age"  placeholder="Enter your age" ><br><br>
Type:<select name="type" >
		<option value="dctr" >Doctor</option>
		<option value="ptnt" >Patient</option>
		</select><br><br>
Email:	 <input type="email"  name="email" placeholder="Enter your Email ID" ><br><br>
mob no:	 <input type="text"  name="mobile"  placeholder="Enter your MobileNumber" ><br><br>
Gender:	 <input type="radio"  name="gender"  value="female" checked="checked" >Female
                          <input type="radio"  name="gender"  value="male" >Male<br><br>
Address: <textarea name="address" placeholder="Enter the address" ></textarea ><br><br>
ID proof:<select name="id_proof" >
		<option value="dp" >ADhar</option>
		<option value="bt" >ID Card</option>
		</select><br><br>
ID Number:	 <input type="text"  name="id_no"  placeholder="Enter your Proof ID Number" ><br><br>
Username:	 <input type="text"  name="username"  placeholder="Enter your username" ><br><br>
Password:	 <input type="password"  name="password" placeholder="Enter your Password" ><br><br>
Conform: <input type="password"  name="conform"  placeholder="Enter conform Password" ><br><br>
		 <input type="submit" value="send" name="submit" class="frm-btn"></form>
         <input type="submit" value="back" class="frm-btn" ></a>
</div>
</center>
<?php include("footer.php");?>