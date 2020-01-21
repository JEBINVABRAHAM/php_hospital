<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<!--------------header section--------------->
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="doctorprofile.php">Home</a></li>
				<li><a href="doctordetails.php">My Profile</a></li>
				<li><a href="doctorappointments.php">Appointments</a></li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>

  
			<div class="card" style="">
  <div class="card-body">
  
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	  <th scope="col">Status</th>
	  <th scope="col"></th>
	   <th scope="col"></th>
	 
      <form action="dapprovedbooking1.php" method="POST">
    </tr>
	
  </thead>
  
		<!-------------appointment viewed by doctor---------->
		<?php
			require_once 'connection.php';
			session_start();
			$var=$_SESSION['id'];
			$sql="select * from appointment where id=$var ";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result))
			{ 
				?>
				
  
  <tbody>
    <tr class="text-center">
      <td><input class="bg-light col-4 form-control" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="username" value="<?php echo $row['username'];?>" readonly></td>
	  <td><input class="bg-light" type="date" name="date" value="<?php echo $row['date'];?>" readonly></td>
	  <td><input  class="bg-light col-4" type="text" name="slot" value="<?php echo $row['slot'];?>" readonly ></td>
	  <td><input  class="bg-light col-5" type="text" name="status" value="<?php echo $row['status'];?>" readonly ></td>
	  <td><input type="submit" value="Confirm" name="submit" class="btn-info form-control"></td>
	  </form>
    </tr>
	
	</tbody>
	
					<?php
						}
					?>
					
	</table>
	
	</div></div>
	
	
	</div>
  
  
  
  
  
  </body>
  <!-----------------footer section----------->
  <?php include "footer.php"
  ?>
  </html>