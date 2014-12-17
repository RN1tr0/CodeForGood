
<?php
$hostname='localhost';
$dbname='gfg';
$username='root';
$password='mysql';

mysql_connect($hostname, $username, $password) or DIE('Connection failed');

mysql_select_db($dbname)or DIE('database not found');






?>
