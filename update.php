	<?php
		include("connection.php");
		error_reporting(0);

		echo $_GET['rn'] ;
		 echo $_GET['sn'] ;
		 echo $_GET['cl'] ;
	?>


<!DOCTYPE html>
<html>
<head>
	<title>School Management</title>
</head>
<body>
	<form action="" method="GET" accept-charset="utf-8"> <br><br>
		Roll Number- <input type="text" name="rollno" value=" <?php echo $_GET['rn'] ; ?> " /><br><br>
		Name - <input type="text" name="name" value="<?php echo $_GET['sn'] ; ?>" /> <br><br>
		Class- <input type="text" name="class" value="<?php echo $_GET['cl'] ; ?>" /><br><br>
		<input type="submit" name="submit" value="UPDATE" />
	</form>

<?php
	if($_GET['submit'])
	 {		
		$rollno = $_GET['rollno'];
		$name = $_GET['name'];
		$class = $_GET['class'];

		$query = " UPDATE STUDENT SET name='$name' , class='$class'  WHERE ROLLNO='$rollno' ";
		$data = mysqli_query($conn, $query);

		if($data)
			{
	 echo "<font color='green'> record updated successfully . <a href='display.php'> check updated link here</a> " ;
			}
		else{

			echo "<font color='red'> record not updated . <a href='display.php'> check updated link here</a>  ";
			}
	}
	else {

		echo " <font color='blue'> Click on update button to save the changes ";
		}	
?>
<br>

</body>
</html>



