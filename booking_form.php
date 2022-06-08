<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Travel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>
    <div class="row">

        <div class="image">
            <img src="Book image.jpg" alt="">
        </div>

        <form action="" method="POST">
        <div class="inputBox">
                <h3>name</h3>
                <input type="text" placeholder="place name" name="user" value="">
            </div>
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name" name="whereto" value="">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of people" name="people" value="">
            </div>
				<div class="inputBox">
                <h3>Departure Date</h3>
                <input type="text" placeholder="Day-Month-Year" name="date" value="">
              </div>
            <input type="submit" class="btn" value="book now" name="submit">
        </form>
  
    </div>

</section>
</body>
</html>

<?php
include 'connection_book.php';

if(isset($_POST['submit'])){
  $name=$_POST['user'];
   $whereto=$_POST['whereto'];
   $people=$_POST['people'];
   $date=$_POST['date'];
   $insertquery="insert into book(name,whereto,people,date) 
   values('$name','$whereto','$people','$date')";
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