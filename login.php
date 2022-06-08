<!DOCTYPE html>
<html>
<head>
	<title>Code Learner's site</title>
	<link rel="stylesheet" href="stylee.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
   <h2>Log in</h2>
</div>
<form method="post" action="login.php">
        <div class="input-group">
		    <label>Username</label>
		    <input type="text" name="username" value="" required>
		</div>
		<div class="input-group">
		   <label>password</label>
		    <input type="password" name="password" value="" required>
		</div>
		<div class="input-group">
		      <button type="submit" name="login" class="btn">login</button>
		</div>
		<p>
		     Not yet a member? <a href="register.php">Sign up</a>
	   </p>
</form>
</body>
</html>