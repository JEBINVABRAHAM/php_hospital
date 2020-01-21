<!doctype html>
<html>
  <head>
      <title>admin-user</title>
	  <link rel ="stylesheet" href="css/bootstrap.min.css">
	  <link rel ="stylesheet" href="css/style.css">
	 
	  
  
  </head>
  <body> 
		<div class="navbar bg-dark">
			<ul>
				<li><a href ="adminhome.php">Home</a></li>
				<li><a href ="adminhome.php">Doctors</a></li>
				<li><a href ="#">Users</a></li>
				<li><a href="signout.php">Logout</a></li>
			</ul>
		</div>
  </body>
			<div class="card" style="">
  <div class="card-body">
  
  <table class="table table-striped card-text bg-light">
  <thead>
  
    <tr class="text-center">
      <th scope="col">User.Id</th>
      <th scope="col">Name</th>
	  <th scope="col">Gender</th>
	  <th scope="col">Age</th>
	  <th scope="col">Email</th>
	  <th scope="col">National Id</th>
	  <th scope="col">Mobile</th>
	 
      
    </tr>
  </thead>
  
  
				<!--for displaying user details-->
				<?php
		            require_once 'connection.php';
		            $sql="select * from user ";
		            $result=mysqli_query($conn,$sql);
		            while($row=mysqli_fetch_assoc($result))
					{ 
						?>
				
  
  <tbody>
    <tr class="text-center">
	<form action="deleteuser.php" method="POST">
	
      <td><input class="bg-light form-control" type="text" name="id" value="<?php echo $row['id'];?>" readonly></td>
      <td><input type="text" class="bg-light form-control" name="dname" value="<?php echo $row['name'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="email" value="<?php echo $row['gender'];?>" readonly></td>
	  <td><input class="bg-light form-control" type="text" name="nationalid" value="<?php echo $row['age'];?>" readonly></td>
	  <td><input  class="bg-light  form-control" type="text" name="qualification" value="<?php echo $row['email'];?>" readonly ></td>
	  <td><input type="text" class="bg-light form-control" name="experience" value="<?php echo $row['nationalid'];?>" readonly></td>
	  <td><input type="text" class="bg-light form-control" name="department" value="<?php echo $row['mobile'];?>" readonly></td>
	  <td><input type="submit" class="btn-danger form-control" name="submit" value="Delete"></td>
	  </form>
    </tr>
	
	</tbody>
	
					<?php
						}
					?>
					
	</table>
	</div></div>
	
  
  <!--including footer section-->
   <?php include "footer.php";
  ?>
  </html>