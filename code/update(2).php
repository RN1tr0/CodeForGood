<?php
include('config.php');
echo $_GET['id'];

$requestid= $_GET['id'];

$data = mysql_query("SELECT * FROM request WHERE requestid="$_GET['id']"") 
or die(mysqli_error());
$info = mysql_fetch_array($data);



?>