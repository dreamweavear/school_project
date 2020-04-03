
<!DOCTYPE html>
<html>
<head>
	<title> Arun Computer:Students List</title>


	<style>
td {
	 padding : 15px;
}	
</style>
</head>

<body>

       <h2> List of Students registered </h2>


<?php
		include ('connection.php');
		error_reporting(0); // error reporting is not  done



		$query = " SELECT * FROM STUDENT " ;  // where class='mca' 
		$data = mysqli_query($conn,$query); 
		$total = mysqli_num_rows($data);

		
		IF($total !=0)		/* table tag can not be used between php code so close the php code */	
			{ 
				?>				
					<table border ="2">
						<caption> <h2>Student record display </h2> </caption>
						<thead>
							<tr>
								<th>Roll number</th>
								<th>Picture</th>
								<th>Name</th>
								<th>Class</th>
								<th colspan="2" >Operations</th>
							</tr>
						</thead>
				<?php

				while (	$result = mysqli_fetch_assoc($data))
				{
					echo " 
							<tbody>
							<tr>
								<td> ". $result['rollno'] . " </td>
								<td> <a href ='$result[picsource]'> <img src= ' ". $result['picsource'] ." ' height='100' width='100' /> </a></td>
								<td> ". $result['name'] . " </td>
								<td> ". $result['class'] . " </td>
								<td> <a href='update.php ?rn=$result[rollno] &sn=$result[name] &cl=$result[class]'> Edit </a></td>
								<td> <a href='delete.php ?rn=$result[rollno]' onclick='return checkdelete()' > Delete </a> </td>
							</tr> 
							</tbody> ";
				}
			}	
		else {
			echo " no record found";		
			}
?>

	</table>

	<script>

		function checkdelete()
		{

			return confirm(' do you want to delete this record??');
		}
	</script>


</body>
</html>