<?php include("header.php");?>
<center>
  <div class="reg">
		<form name="register" method="POST" action="doc_submit.php" onsubmit="return validate()">
		<br>
		<br>
		<h1>DOCTOR REGISTRATION</h1>
		<br><br>
	 <script>
		     function validate()
			 {
				var name=document.forms["register"]["name"].value;
                var mobile=document.forms["register"]["mobile"].value;				
				var email=document.forms["register"]["email"].value;
				
				    
				
				if(name=="")
		               {
			             alert("plse entr the name");
			             document.forms["register"]["name"].focus();
			             return false;
		               }
					   else if(mobile=="")
		                {
			             alert("plse entr the mobile");
			             document.forms["register"]["mobile"].focus();
			             return false;
		                }
				
					    else if(email=="")
		               {
			             alert("plse entr the email");
			             document.forms["register"]["email"].focus();
			             return false;
		               } 					   
                  	
						else
						{
				
		        alert("success");
						return true;}
	}
 </script>		
             Name:<input type="text" name="name"class="frm"><br><br>
			 Mobile no:<input type="tel"  name="mobile"   class="frm"><br><br>
             Email:<input type="email" name="email"class="frm"><br><br>
			 Type:    <select name="type" class="frm">
                      <option value="dctr" class="frm">doctor</option>					 
                      <option value="ptnt" class="frm">patient</option>
		 			  </select><br><br>
			 Qualification:<select name="qualification" class="frm">
                      <option value="MBBS" class="frm">MBBS</option>					 
                      <option value="BDS" class="frm">BDS</option>
					  </select><br><br>				
						
             Specilization:<select name="specilization" class="frm">
                      <option value="psychiatrist" class="frm">psychiatrist</option>					 
                      <option value="cardiologist" class="frm">cardiologist</option>
					  <option value="gynecologist" class="frm">gynecologist</option>
					  </select><br><br>
             Experiance:<select name="experience" class="frm">
                      <option value="2year" class="frm">2year</option>					 
                      <option value="4year" class="frm">4year</option>
					  <option value="6year" class="frm">6year</option>
					  <option value="8year" class="frm">8year</option>					 
                      <option value="10year" class="frm">10year</option>
					  </select><br><br>
			 
		     Clinic-Address: <textarea name="cladd"  class="frm"></textarea><br><br>	
             Id_proof:<select name="id_proof" class="frm">
                       <option value="adhar_no" class="frm">Adhar_no</option>					 
                       <option value="voter_id" class="frm">Voter_id</option>
                        </select><br><br>
			 Id_no:<input type="text" name="id_no"class="frm"><br><br>	
			 
            
             Username:<input type="text"  name="username"  class="frm"><br><br>
             Password:<input type="password"  name="password"  class="frm"><br><br>
             Confirm:<input type="password"  name="conform" class="frm"  class="frm"><br><br>
		 <input type="submit" value="send" name="submit" class="frm-btn" >
		 </form>
		</div>
		</center>
<?php include("footer.php");?>