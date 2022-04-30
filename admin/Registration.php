<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
        
        header("location : login.html");
        exit;
    }

?>

<?php  

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','anytimebalanza');

// get the post records
$txtFName = $_POST['o_fname'];
$txtLName = $_POST['o_lname'];
$txtEmail = $_POST['o_email'];
$txtRole = $_POST['o_role'];
$txtBirthDate = $_POST['o_bday'];
$txtPhoto = $_POST['o_photo'];
$txtPhone = $_POST['o_phone'];

$txtPass = $_POST['o_password'];
$txtCPass = $_POST['o_cpassword'];

// database insert SQL code

if($txtCPass == $txtPass){

    $sql1 = "INSERT INTO `admin_details`(`a_image`, `a_email`, `a_phoneno`, `a_bdate`, `a_role`, `a_fname`, `a_lname`) VALUES ( '$txtPhoto','$txtEmail','$txtPhone','$txtBirthDate','$txtRole','$txtFName','$txtLName' )";

    $sql2 = "INSERT INTO `admin`(`a_email`, `a_name`, `a_password`) VALUES ( '$txtEmail','$txtFName','$txtPass' )";
   
    // insert in database 
    $rs1 = mysqli_query($con, $sql1);
    $rs2 = mysqli_query($con, $sql2);
}





if($rs1 && $rs2)
{
?>	
	<script>
		alert("Registration successful");
		window.location.href = "registration.html";
	</script> 
<?php
}
else{
?>	
	<script>
		alert("something went wrong, couldn't register.");
		window.location.href = "registration.html";
	</script> 
<?php
}
?>
