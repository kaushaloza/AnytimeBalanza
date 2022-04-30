<?php  

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtName = $_POST['c_name'];

// database insert SQL code
$sql = "INSERT INTO `category` (`c_name`) VALUES ( '$txtName')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
?>	
	<script>
		alert("Category has been added successfully");
		window.location.href = "addCategory.php";
	</script> 
<?php
}
else{
	?>	
		<script>
			alert("something went wrong please enter details again..");
			window.location.href = "addCategory.php";
		</script> 
	<?php
}
?>
