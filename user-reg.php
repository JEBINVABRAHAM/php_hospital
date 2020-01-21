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
			<!------------header section---------->
			<div class="navbar bg-dark">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">LogIn</a></li>
			</ul>
		</div>
  
			
  
  
  
       <!----------------user registration form---------->
  <div>
  <div class="container bg-light col-5">
            <form class="form-horizontal" name="myform" role="form" onsubmit=" return validate_form()" action="userreg1.php" method="post">
                <h2>Registration</h2>
                <div class="form-group">
                    <label  class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control " autofocus required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label" >Age</label>
                    <div class="col-sm-8">
                        <input type="text" id="age" name="age" class="form-control " autofocus name="age" required>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-3 control-label" >Gender</label>
                    <div class="col-sm-8">
                        <input type="text" id="gender" name="gender" class="form-control " autofocus name="gender" required>
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control" name="nationalid" required>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control"name="password" required>
                    </div>
                </div>
				<div class="form-group">
                    <label  class="col-sm-4 control-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="cnfrmpassword"class="form-control" name="cpassword" required><br>
						
                    </div>
					<button type="submit" class="btn btn-primary ml-5" name="submit">Register</button>
				
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->
		
		
		
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