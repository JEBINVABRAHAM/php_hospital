<!doctype html>
<html>
  <head>
      <title>index</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar bg-dark">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">LogIn</a></li>
			</ul>
		</div>

  
			<div class="card" style="">
  <div class="card-body">
  <form action="login.php" method="POST" name="submit">
  <h1>DOCTOR'S LIST</h1>
  <table class="table table-striped card-text bg-light">
  <thead>
    <tr>
      <th scope="col">Dr.ID</th>
      <th scope="col">Dr.Name</th>
      <th scope="col">Clinic Address</th>
	  <th scope="col">Clinic Timing</th>
	  <th scope="col">Department</th>
	 
	  <th scope="col"></th>
	 
      
    </tr>
  </thead>
		<!--to display all doctors list-->
		<?php
		            require_once 'connection.php';
		            $sql="select * from doctor order by department";
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
	 
	  	<td><input type="submit" class="btn-info form-control" name="submit" value="Book"></td>
	  				
						
						
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
		<!--footer section-->
	  <?php include "footer.php";
	  ?>
  </html>