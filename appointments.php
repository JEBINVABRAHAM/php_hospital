<!doctype html>
<html>
  <head>
      <title>appointments</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
  
		<!---------header section---------->
  
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="userprofile.php">Home</a></li>
				<li><a href="userdetails.php">My Profile</a></li>
				<li><a href="appointments.php">Appointments</a>
				<div class="submenu">
		        <ul>
		            <li><a href="appointments.php">Take Appointments</a></li>
		            <li><a href="bookingstatus.php">View Appointments</a></li>
		        </ul>
				
		   </div>
		   </li>
				
				
				
				</li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>
  </body>
  
			<div class="card" style="">
  <div class="card-body">
  <form action="appointment1.php" method="POST" name="submit">
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
      <th scope="col">Dr.ID</th>
      <th scope="col">Dr.Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Timing</th>
	  <th scope="col">Department</th>
	  <th scope="col">Date</th>
	  <th scope="col">Slot</th>
	  <th scope="col"></th>
	 
      
    </tr>
  </thead>
  
  
			<!------------for displaying doctor details-------------->
			
				<?php
		            require_once 'connection.php';
		            $sql="select * from doctor";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
  
  <tbody>
    <tr>
	
      <td scope="row"><input class="bg-light form-control" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="dname" value="<?php echo $row['dname'];?>"></td>
      <td><input type="text" class="bg-light form-control" name="clinicaddress" value="<?php echo $row['clinicaddress'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="clinictiming" value="<?php echo $row['clinictiming'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['department'];?>" readonly></td>
	  <td><input type="date" class="bg-light form-control" name="date"></td>
	 
	  
	  <td><select name="slot">
					<option class="form-control">9am</option>
					<option class="form-control">10am</option>
					<option class="form-control">11am</option>
					<option class="form-control">12am</option>
					<option class="form-control">1pm</option>
					<option class="form-control">2pm</option>
					<option class="form-control">3pm</option>
					<option class="form-control">4pm</option>
					<option class="form-control">5pm</option>
						</select></td>
	  	<td><input type="submit" class="btn-success form-control" name="submit" value="Apply"></td>
	  				
						
						
	  </form>
    </tr>
	
	</tbody>
	
					<?php
						}
					?>
					
	</table>
	</div></div>
	
	
	</div>
  
  
  
  
   <!--------footer section--------->
   
   <?php include "footer.php";
  ?>
  
  </html>