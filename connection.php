<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "learningsqlqueries";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if($conn){
		//echo "Connection OK";
	}else{
		die("Connection Failed Because ".mysqli_connect_error());
	}

?>