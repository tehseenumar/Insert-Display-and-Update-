<?php

	include("connection.php");
	error_reporting(0);

	$_GET['rn'];
	$_GET['sn'];
	$_GET['cl'];
	$_GET['file'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert.php</title>
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">

		Roll.No : <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"><br><br>
		Name : <input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"><br><br>
		Class : <input type="text" name="class" value="<?php echo $_GET['cl']; ?>"><br><br>
		Image : <input type="file" name="img" value="<?php echo $_GET['file']; ?>"><br><br>
		<input type="submit" name="submit" value="Update">
		
	</form>

</body>
</html>

<?php
	$rollno = $_POST['rollno'];
	$studentname = $_POST['studentname'];
	$class = $_POST['class'];
	$up_files = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
	if($_POST['submit']){

		// Update Query
		$query = "UPDATE student SET name='$studentname', class='$class', image='$up_files' WHERE rollno='$rollno'";

		// Start the Query
		$data = mysqli_query($conn, $query);
		if($data){
			echo "<font color='green'>Record Updated Successfully. <a href='display.php'>Check Updated List Here</a>";
		}else{
			echo "<font color='red'>Record Not Updated. <a href='display.php'>Check Updated List Here</a>";
		}
	}else{
		echo "<font color='red'>Click on Update Button to save the Changes.";
	}

/*
	if($_POST['submit']){

		$rn = $_POST['rollno'];
		$sn = $_POST['studentname'];
		$cl = $_POST['class'];
		if($rn!= "" && $sn!= "" && $cl!= ""){
				$query = "INSERT INTO student (rollno, name, class) VALUES('$rn','$sn','$cl')";
				$data = mysqli_query($conn, $query);

				if($data){
					echo "Data Insert into Database Successfully";
				}else{
					echo "Already Data Insert Database";
				}

		}else{
			echo "All Fields are Required.";
		}
	}
*/
?>