<?php 
session_start();
$rj=$_SESSION['valid_uid'];
session_destroy();
header('location: index.php');


?>