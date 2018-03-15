<?php
	include("connection.php");
	error_reporting(0);

	$rn = $_GET['rn'];
	//$_GET['sn'];
	//$_GET['cl'];
	$query = "DELETE FROM student WHERE rollno='$rn'";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<script>alert('Record Deleted From Table. Please Wait Few Second Thank You...!')</script>";
		//echo "<h3><font color='green'>Record Deleted From Table. Please Wait Few Second Thank You...!</h3>";
		?>
			<meta http-equiv="Refresh" content="0; URL=http://localhost/webapp/display.php">
		<?php
	}else{
		echo "<font color='red'>Record Not Deleted From Table.";
	}

?>