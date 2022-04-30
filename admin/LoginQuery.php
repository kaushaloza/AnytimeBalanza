<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtName = $_POST['o_name'];
$txtPass = $_POST['o_pass'];

// Select particular record 
$sql = "select * from admin where a_name = '" . $txtName . "'";
$rs = mysqli_query($con, $sql);


// check login pass 
while ($row = mysqli_fetch_assoc($rs))
{
	
	if (isset($txtName) && $txtPass == $row['a_password']){

		session_start();

		$_SESSION['loggedIn'] = true;
		$_SESSION['o_name'] = $txtName;
		// setcookie('o_name', $txtName, time() + (86400 * 30), "/");
		header("location: profile.php");
		
	}
	else{
		?>	
		<script>
			alert("Invalid credentials Login failed.");
			window.location.href = "login.html";
		</script> 
		<?php
	}
}

// if given Admin is not Exist
if (mysqli_num_rows($rs) == 0){
	?>	
	<script>
		alert("Invalid credentials Login failed.");
		window.location.href = "login.html";
	</script> 
<?php
}
?>