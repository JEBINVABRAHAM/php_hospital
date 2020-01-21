<!doctype html>
<html>
  <head>
      <title>staus</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<!--------header section---------->
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="userprofile.php">Home</a></li>
				<li><a href="userdetails.php">My Profile</a></li>
				<li><a href="#">Appointments</a>
				<div class="submenu">
		        <ul>
		            <li><a href="appointments.php">Take Appointments</a></li>
		            <li><a href="#">View Appointments</a></li>
		        </ul>
				
		   </div>
		   </li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>
 
  
			<div class="card" style="">
  <div class="card-body">
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
	  <th scope="col">Id</th>
      <th scope="col">Doctor-Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Department</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	  <th scope="col">Status</th>
	  
	 
      
    </tr>

  </thead>
  <form action="cancelappointment.php" method="POST">
  
		<!----------appointment status--------->
  
		<?php
			require_once 'connection.php';
			session_start();
			$sql="select * from appointment where username='".$_SESSION['username']."'";
			$result=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_assoc($result))
			{ 
				?>	
				
  
  <tbody>
    <tr>
	  <td><input type="text" class="bg-light form-control" name="id" value="<?php echo $row['id'];?>"></td>
      <td><input type="text" class="bg-light form-control" name="name" value="<?php echo $row['dname'];?>"></td>
      <td><input type="text" class="bg-light form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['department'];?>" readonly></td>	 
      <td scope="row"><input class="bg-light form-control" type="text" name="date" value="<?php echo $row['date'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="slot" value="<?php echo $row['slot'];?>"></td>
	  <td><input type="text" class="bg-light form-control" name="status" value="<?php echo $row['status'];?>"></td>
	  <td><input type="submit" class=" btn-danger form-control" name="submit" value="Cancel"></td>
	 
	  </tr>


						
	
	</tbody>
	</form>
	
			<?php
				}
			?>
						
	</table>
	</div></div>
	
	
	</div>
  
  
  
  
  
  </body>
  <!------------footer section------->	
  <?php include "footer.php"
  ?>
  </html>