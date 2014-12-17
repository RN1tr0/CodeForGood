<html>
<?php
session_start();
include('config.php');
//echo $_GET['id'];

$requestid= $_GET['id'];

$data = mysql_query( "SELECT * FROM request WHERE requestid='".$_GET['id']."'") or die(mysqli_error());

$info = mysql_fetch_array($data);
//echo $info;


$name = $info["name"];
$subject=$info["subject"];
$location=$info["location"];



$priority=$info["priority"];
$quantity=$info["quantity"];

$category=$info["category"];
$requestid=$info["requestid"];

$description=$info["description"];
$status=$info["status"];
echo "<form action=updateproc.php method=POST> ";
echo "<table>";
echo "<tr><td>Name is</td><td> $name</td></tr>";
echo "<tr><td>Location is</td><td> $location</td></tr>";
echo "<tr><td>Request ID is</td><td> $requestid</td></tr>";
$_SESSION['id']=$requestid;


echo "<tr><td>Quantity is </td><td>$quantity</td></tr>";
echo "<tr><td>Priority is</td><td> $priority</td></tr>";
echo "<tr><td>enter new priority</td></tr>";
echo  "<tr><td><input type=text name=priority required></td></tr>";
echo "<tr><td>Category is </td><td>$category</td></tr>";

echo "<tr><td>enter new cateogry</td></tr>";
echo  "<tr><td><input type=text name=category required></td></tr>";
echo "<tr><td>Validation</td></tr>";
echo "<tr><td><input type=radio name=check value=yes>Approved</td></tr>";
echo "<tr><td><input type=radio name=check value=no>Declined</td></tr>";

echo "<tr>
<td>Status</td>
<td> 
<select name=status>;
<option value=open>Open</option>;
<option value=closed>Closed</option>;
<option value=pending>Pending</option>;

</select></td></tr>";

echo "<tr><td><input type=submit value=submit></td></tr>";
echo "</table>";




echo "</form>";







?>

</html>