
<?php

	include("connection.php");
	error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert.php</title>
</head>
<body>

	<form action="" method="POST" enctype="multipart/form-data">

		Roll.No : <input type="text" name="rollno" value=""><br><br>
		Name : <input type="text" name="studentname" value=""><br><br>
		Class : <input type="text" name="class" value=""><br><br>
		Image : <input type="file" name="img" value=""><br><br>
		<input type="submit" name="submit" value="Submit">
		
	</form>

</body>
</html>

<?php

	if(isset($_POST['submit'])){

		$rn = $_POST['rollno'];
		$sn = $_POST['studentname'];
		$cl = $_POST['class'];
		$file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));	
		//$img = $_FILES['img'];




		if($rn!= "" && $sn!= "" && $cl!= "" && $file!= ""){
				$query = "INSERT INTO student (rollno, name, class, image) VALUES('$rn','$sn','$cl', '$file')";
				$data = mysqli_query($conn, $query);
				
				if($data){
					echo "Data Insert into Database Successfully. <a href='display.php'>Check Updated List Here</a>";
				}else{
					echo "Already Data Insert Database";
				}

		}else{
			echo "All Fields are Required.";
		} 
	}

?>
