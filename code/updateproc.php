<?php
session_start();
include('config.php');
$requestid=$_SESSION['id'];


if (isset($_POST["category"])) {
  
$category= $_POST['category'];

$query="UPDATE request SET category='$category'  
	
	WHERE requestid='$requestid'";
	
	
mysql_query( $query)or die(mysql_error());



	}






if (isset($_POST["category"])) {

$priority=$_POST['priority'];
$query1="UPDATE request SET priority='$priority'
	
	WHERE requestid='$requestid'";
	
	mysql_query( $query1)or die(mysql_error());
	}

	



	
	
	
	
	
	
 
	


?>