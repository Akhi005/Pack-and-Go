<!DOCTYPE html>
<html>
<head>
	<title>Code Learner's site</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<img src="Best"
<?php
include 'connection.php' ;

if(isset($_POST['register'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$c_password=mysqli_real_escape_string($con,$_POST['c_password']);
 
   $pass=password_hash($password,PASSWORD_BCRYPT);
   $c_pass=password_hash($c_password,PASSWORD_BCRYPT);
   
   $emailquery="select*from users where email='$email'";
   $query = mysqli_query($con,$emailquery);
   $emailcount=mysqli_num_rows($query);
   if($emailcount>0){
	   echo "email already exists";
   }
   else
   {
	   if($password===$c_password){
		   $insertquery ="insert into users(username, email, password,c_password) 
						 values('$username','$email','$pass','$c_pass')";
			$iquery=mysqli_query($con,$insertquery);
		if($iquery){
				?>
				<script>
				 alert('inserted successful');
				</script>
				<?php
				}
				else{
				?>
				<script>
				 alert('no inserted');
				</script>
				<?php
				}			
	   }else{
		   ?>
		   <script>
		   alert("password are not matching");
	      </script>
		  <?php
	   }
   }
}

?>

<div class="header">
   <h2>Register</h2>
</div>
 <form action="register.php" method = "post" >    
        <div class="input-group">
		    <label>Username</label>
		    <input type="text" name="username" value="" required > 
		</div>
		<div class="input-group">
			<label>Email</label>
		   <input type="text" name="email" value="" required >
		</div>
		<div class="input-group">
		   <label>password</label>
		    <input type="password" name="password" value="" required >
		</div>
		<div class="input-group">
		   <label>Confirm password</label>
		    <input type="password" name="c_password" value="" required >
		</div>
		<div class="input-group">
		      <button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
		    Already a member? <a href="login.php">Sign in</a>
	   </p>
</form>
</body>
</html>