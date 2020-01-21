<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body class="banner vh-100">
  
		<!------------------header section----------------------->
		
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="userprofile.php">Home</a></li>
				<li><a href="userdetails.php">My Profile</a></li>
				
				
				</li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>
  
			<div class="row">
		
			<div class="col-md-6 p-5 ">
                        <div class="card ml-5 m-5 my-5 bg_color p-5 " >
                            <div class="card-body pr-5 ">
                                <h2 class="card-title text-white text-center ">BOOK AN APPOINMENT</h2>
                                    <p class="card-text text-white text-center">Click here to book</p>
                                         <a href="appointments.php" class="btn btn-primary bt_n col-5 ml-5">>></a>
                            </div>
                        </div>
                    </div>
			<div class="col-md-6 p-5 ">
                        <div class="card ml-5 m-5 my-5 bg_color p-5 " >
                            <div class="card-body pr-5 ">
                                <h2 class="card-title text-white text-center ">VIEW YOUR APPOINMENTS</h2>
                                    <p class="card-text text-white text-center">Click here to view</p>
                                         <a href="bookingstatus.php" class="btn btn-primary bt_n col-5 ml-5">>></a>
                            </div>
                        </div>
                    </div>		
                   </div>
  
  
  
  
  
  
  </body>
  <!----------------footer section------------>
  <?php include "footer.php"
  ?>
  </html>