<?php

// setcookie('o_name', '', time() - (86400 * 30), "/");
session_start();
session_destroy();
header('Location: ../index.php');

?>