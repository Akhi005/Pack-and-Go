<?php
 $username = "root";
 $password = "";
 $server = 'localhost';
 $db = 'booking';
 
$con = mysqli_connect($server,$username,$password,$db);

if($con){
?>
<script>
 alert('connection successful');
</script>
<?php
}
else{
	?>
	<script>
	alert("No connection");
	</script>
	<?php
}
?>