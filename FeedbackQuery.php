<?php  

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtName = $_POST['f_name'];
$txtEmail = $_POST['f_email'];
$txtMessage = $_POST['f_message'];

// database insert SQL code
$sql = "INSERT INTO `feedback` (`f_name`,`f_email`,`f_detail`) VALUES ( '$txtName','$txtEmail','$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
?>	
	<script>
		alert("Your feedback has been successfully added.");
		window.location.href = "feedback.php";
	</script> 
<?php
}
else{
?>	
	<script>
		alert("Your feedback has been successfully added.");
		window.location.href = "feedback.php";
	</script> 
<?php
}
?>
