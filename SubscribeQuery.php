
<?php  

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtEmail = $_POST['s_email'];

// database insert SQL code
$sql = "INSERT INTO `subscribe` (`s_email`) VALUES ( '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
?>	
	<script>
		alert("You have successfully subscribed.");
		window.location.href = "index.php";
	</script> 
<?php
}
else{
?>	
	<script>
		alert("Something went wrong! try again please.");
		window.location.href = "index.php";
	</script> 
<?php	
}
?>
