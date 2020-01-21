<!doctype html>
 <html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  <style>
  
  </style>
  
  </head>
  <body class="banner"> 
				<!---------header section----------->
				<div class="navbar bg-dark">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">LogIn</a></li>
			</ul>
		</div>
  
  
  
  
  
			<!--registration form for doctor-->
		
 <div>		
	<div class="container bg-light col-5">
            <form class="form-horizontal" name="myform" role="form" onsubmit=" return validate_form()" action="doctor-reg1.php" method="post">
                <h2>Registration</h2>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="dname" class="form-control " autofocus required>
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile"required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text" id="nationalid"  class="form-control"name="nationalid" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="qualification" class="form-control" name="qualification" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" placeholder="experience" class="form-control" name="experience" required>
                       
                    </div>
                </div>
                
                 <div class="form-group">
                        <label  class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" required>
                    </div>
                </div>
				<div class="form-group">
                        <label class="col-sm-3 control-label">ClinicAddress </label>
                    <div class="col-sm-8">
                        <input type="text" id="clinicaddress" class="form-control" name="clinicaddress" required>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="clinictiming" class="form-control" name="clinictiming" required>
                    </div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username"required>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password"  class="form-control" name="password" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="cnfrmpassword"  class="form-control" name="cnfrmpassword" required><br>
						
                    </div>
					<button type="submit" class="btn btn-primary ml-5" name="submit">Register</button>
						
					</form>
                </div>
                
                
                
				</form>  <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->

  
			<!--validation of form-->
  <script>
			function validate_form()
			{
				var mb=document.forms["myform"]["mobile"].value;
				var str=document.forms["myform"]["password"].value;
				var str1=document.forms["myform"]["cnfrmpassword"].value;
				
				if(mb.length!=10){
					alert("Invalid mobileno");
					return false;
					
				}
				else if(str.length<6){
					alert("Password too short.");
					return false;
				}
				else if(str != str1){
					alert ("password doesn't match");
					return false;
				}
				/*else{
					return true;
				}*/
				
			}
		</script>     
 </body>
</html>