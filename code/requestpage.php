<?php
include('config.php');


$ans1=$_POST["name"];
$ans2=$_POST["email"];
$ans3=$_POST["phone"];
$ans4=$_POST["subject"];
$ans5=$_POST["description"];
$ans6=0;
$ans7=$_POST["quantity"];
$ans8=$_POST["location"];
$ans9=3;






echo $ans1;
echo $ans2;
echo $ans3;
echo $ans4;
echo $ans5;
echo $ans6;
echo $ans7;echo $ans8;

mysql_query("INSERT INTO request(name, email, phone, subject, 
description, picture, quantity, location,priority) 
VALUES ('$ans1', '$ans2','$ans3','$ans4', '$ans5','$ans6','$ans7','$ans8','$ans9')") or DIE('error');


 header('Location:thankyou.html');


?>