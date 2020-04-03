<?php

/*$servername = "localhost";
$username = "root";
$password = "";
$databasename = "school_mgm";

*/
# above code is required if we pass value by variable naeme in the function 

$conn = mysqli_connect("localhost", "root" , "" , "school_mgm" ) ;

if($conn)
	{
	//echo "connection OK";
	}

else 
	{ die( "connection fail because" . mysqli_connect_error());
	}

?>