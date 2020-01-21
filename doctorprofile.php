<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body class="banner vh-100"> 
		<!------------header section------------>
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="doctorprofile.php">Home</a></li>
				<li><a href="doctordetails.php">My Profile</a></li>
				<li><a href="doctorappointments.php">Appointments</a></li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>
                   
				<div class="col-md-6 p-5 ml-5 ">
							<div class="card ml-5 m-5 my-5 bg_color p-5 " >
								<div class="card-body pr-5 ">
									<h2 class="card-title text-white text-center ">VIEW YOUR APPOINMENTS</h2>
										<p class="card-text text-white text-center">Click here to view</p>
											 <a href="doctorappointments.php" class="btn btn-primary bt_n col-5 ml-5">>></a>
								</div>
							</div>
						</div>	
                  
  </body>
  <!---------------footer section-------->
  <?php include "footer.php";
  ?>
  </html>