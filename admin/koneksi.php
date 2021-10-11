<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db	  = "cbr_cov";
	
	$kon = mysqli_connect($host, $user, $pass, $db);
	
	if(mysqli_connect_error()){
		echo "Failed";
		mysqli_connect_error();
	}
?>