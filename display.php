<style>
	td{
		padding:10px;
	}
</style>
<?php

	include("connection.php");
	error_reporting(0);


	$query = "SELECT * FROM student ORDER BY rollno";

	// Display Result
	$data = mysqli_query($conn, $query);

	// Data Show in Rows
	$total = mysqli_num_rows($data);




	if($total != 0){

		?>

			<table>
				<tr>
					<th>Roll No </th>
					<th>Name </th>
					<th>Class </th>
					<th colspan="2">Operations</th>
					<th width="200px" height="200px">Image</th>
				</tr>

				<?php 
						// All data show on webpage
						while($result = mysqli_fetch_array($data)){	
							// Result Show	
							echo "<tr>
									<td>".$result['rollno']."</td>
									<td>".$result['name']."</td>
									<td>".$result['class']."</td>
									<td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
									<td><a href='delete.php?rn=$result[rollno]' onClick='return checkdelete()'>Delete</a></td>
									<td><img width='200px' height='200px' src='data:image/;base64,".base64_encode($result['image'])."' /></td>
								</tr>";
						}
					}else{
						echo "No Record Found";
					}

				?>

			</table>
			<br><br>
			<a href="insert.php"><input type="submit" name="insertbtn" value="Insert The Data"></a>

			<script type="text/javascript">
				function checkdelete(){
					confirm('Are You Sure You want to Delete the Data ?');
				}
			</script>