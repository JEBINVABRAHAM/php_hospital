<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> index</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
    <body class="banner">
				<!--header section-->
				<div class="navbar bg-dark">
					<ul>
						<li><a href ="index.php">Home</a></li>
						<li><a href ="login.php">Login</a></li>
						
					</ul>
				</div>	
				
	
	

	<div class="container col-5 p-5">
        <form class="form-horizontal" name="myform" role="form" action="forgotpassword1.php" method="POST" onsubmit="return validate_form()">
		<h2> Forgot password?</h2>
			<div class="form-group pl-5">
                    <label for="Name" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" required autofocus>
                    </div>
            </div>
			<div class="form-group pl-5">
                    <label for="Name" class="col-sm-3 control-label">Emailid</label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" required>
                    </div>
            </div>
			<div class="form-group pl-5">
                    <label for="Name" class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-8">
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
            </div>
			<input type="submit" class="btn btn-primary ml-5 " name="submit" value="Submit">
            
		</form>
	</div>
     
        
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 

		
		<!--form validation-->
<script>
			function validate_form()
			{
				var str=document.forms["myform"]["password"].value;
				if(str.length<6){
					alert("Password too short.");
					return false;
				}
				/*else{
					return true;
				}*/
				
			}
		</script>
		
      

    </body>
</html>