<?php  

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtName = $_POST['cu_fullname'];
$txtEmail = $_POST['cu_email'];
$txtIssue = $_POST['cu_issue'];
$txtMessage = $_POST['cu_message'];

// database insert SQL code
$sql = "INSERT INTO `contact_us` (`cu_name`, `cu_email`, `cu_issue`, `cu_message`) VALUES ( '$txtName','$txtEmail','$txtIssue','$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
?>	
	<script>
		alert("success! we will soon reach out to you.");
		window.location.href = "contactus.php";
	</script> 
<?php
}
else{
?>	
	<script>
		alert("something went wrong ! try again");
		window.location.href = "contactus.php";
	</script> 
<?php
}
?>
