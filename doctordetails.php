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
  
			<!--------------header section----------->
			
			<div class="navbar bg-dark">
			<ul>
				<li><a href ="doctorprofile.php">Home</a></li>
				<li><a href="doctordetails.php">My Profile</a></li>
				<li><a href="doctorappointments.php">Appointments</a></li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>
		<div>
			
  <div class="container col-5 mt-5">
            <form class="form-horizontal" name="myform" role="form"onsubmit="validate_form()" action="doctor-reg1.php" method="post">
                <h2>DOCTOR PROFILE</h2>
				
				<!--------------doctor details-------------->
				
				<?php
		            require_once 'connection.php';
					session_start();
					$var=$_SESSION['id'];
		            $sql="select * from doctor where id=$var ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
				
				
                <div class="form-group">
                    <label for="Name" class="col-sm-3 control-label" >Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="Name" name="name" class="form-control " value="<?php echo $row['dname'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                        <label  class="col-sm-3 control-label">Mobile</label>
                    <div class="col-sm-8">
                        <input type="number" id="mobile" class="form-control" name="mobile" value="<?php echo $row['mobile'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name= "email" value="<?php echo $row['email'];?>" readonly>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">National Id</label>
                    <div class="col-sm-8">
                        <input type="text"  class="form-control"name="nationalid" value="<?php echo $row['nationalid'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="qualification" class="col-sm-3 control-label">Qualification</label>
                    <div class="col-sm-8">
                        <input type="text" id="birthDate" class="form-control" name="qualification" value="<?php echo $row['qualification'];?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label">Experience</label>
                    <div class="col-sm-8">
                        <input type="text" id="experience" placeholder="experience" class="form-control" name="experience" value="<?php echo $row['experience'];?>" readonly>
                       
                    </div>
                </div>
                
                 <div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">Department </label>
                    <div class="col-sm-8">
                        <input type="text" id="department" class="form-control" name="department" value="<?php echo $row['department'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label for="weight" class="col-sm-3 control-label">ClinicAddress </label>
                    <div class="col-sm-8">
                        <input type="text" id="clinicaddress" class="form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Clinic Timing</label>
                    <div class="col-sm-8">
                        <input type="text" id="clinictiming" class="form-control" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly>
                    </div>
                </div>
				
				<div class="form-group">
                        <label  class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $row['username'];?>" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-8">
                        <input type="text" id="password" placeholder="Password" class="form-control"name="password" value="<?php echo $row['password'];?>" readonly>
                    </div>
                </div>
				
					<?php
						}
					?>
					
					
					
					
					
                </div>
                
                
                
				 </form> <!-- /form -->
                </div>	
           
        </div> <!-- ./container -->

  
  
       
 </body>
</html>