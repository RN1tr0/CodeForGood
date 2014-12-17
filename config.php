
<title>TeemReed</title>

<?php
$hostname='localhost';
$dbname='test';
$username='root';
$password='';

$con = mysqli_connect($hostname, $username, $password) or DIE('Connection failed');

$db = mysqli_select_db($con, $dbname)or DIE('database not found');

echo'
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

<script type="text/javascript" src="js/jquery-2.1.1.js"></script> 
<!--script type="text/javascript" src="js/jquery.tablesorter.js"></script--> 
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->

<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="https://apis.google.com/js/client.js?onload=OnLoadCallback"></script>

';


echo '<meta name="viewport" content="width=device-width, initial-scale=1">';






?>
