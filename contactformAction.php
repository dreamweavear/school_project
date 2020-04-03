

 <?php
 
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="school";
 
 
 $cname= $_REQUEST["cname"]; 
 $cemail= $_REQUEST["cemail"]; 
 $subject= $_REQUEST["subject"]; 
 $phone= $_REQUEST["phone"]; 
 
 
 $conn=new mysqli( $servername,$username, $password, $dbname);
 if ($conn->connect_error){
	 
	 die("connection failed :" .$conn->connect_error);
	 
 }
	 $sql="INSERT INTO `tbl_contact` (`contact_id`, `c_name`, `c_email`, `c_phone`, `c_comment`, `c_status`, `date`)
	VALUES ('', '$cname', '$cemail', ' $phone',  '$subject',0, CURRENT_TIMESTAMP);"; 
 
 
//$result = mysql_query("SELECT s_id FROM `tbl_studetails` WHERE `first_name`=$fname");
 //$name = $mysql->query("SELECT s_id FROM `tbl_studetails` WHERE `first_name`=$fname")->fetch_object()->s_id;  
 //echo $name;
  if($conn->query($sql)=="TRUE"){
	// echo "run successfully";
	 
 }
 

 
 //echo $cname, $cemail ,$subject,$phone;


 ?>

 <?php include 'header.php'; ?>
 
 


<br><br><br><br><br><br>

<h1><i><b><center>Contact Form Submitted </center></b></i></h1>
													


<!-- ################################################################################################ -->
<br><br><br><br><br>

<?php include 'footer.php'; ?>