<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="Rstyle.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form action="" method="POST">
    <div class="form">
       <div class="inputfield">
          <label> Name</label>
          <input type="text" class="input" name="user" value="">
       </div>  
        
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input"  name="password" value="">
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input"  name="confirmpassword" value="">
       </div> 
       
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input"  name="email" value="">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input"  name="mobile" value="">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" name="submit" class="btn">
      </div>
    </div>
</div>	
</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
   $name=$_POST['user'];
   $password=$_POST['password'];
   $confirmpassword=$_POST['confirmpassword'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $insertquery="insert into registration(name,password,confirmpassword,email,mobile) 
   values('$name','$password','$confirmpassword','$email','$mobile')";
   $res=mysqli_query($con,$insertquery);
   if($res){
     ?>
     <script>
       alert("data inserted successfully");
     </script>
     <?php
   }else{
    ?>
    <script>
      alert("data not inserted");
    </script>
    <?php
   }
}

?>