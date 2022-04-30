<?php  

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtName = $_POST['i_name'];
$txtPhoto = $_POST['i_photo'];
$txtDesc = $_POST['i_desc'];
$txtPrice = $_POST['i_price'];
$txtCName = $_POST['c_name'];


    // database insert SQL code

    $sql = "INSERT INTO `item`(`c_id`, `i_name`, `i_price`, `i_detail`, `i_profile`) VALUES ( '$txtCName','$txtName','$txtPrice','$txtDesc','$txtPhoto' )";
   
    // insert in database 
    $rs = mysqli_query($con, $sql);


if($rs)
{
?>	
	<script>
		alert("Item has been added successfully");
		window.location.href = "addItem.php";
	</script> 
<?php
}
else{
?>	
	<script>
		alert("Category does not exist/something went wrong");
		window.location.href = "addItem.php";
	</script> 
<?php 
}
?>
