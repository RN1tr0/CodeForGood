<?php

include('config.php');

session_start();
if($_GET['username']) 
	{
	echo "found username";
	$_SESSION['username']=$_GET['username'];
	
      
	}
	
	echo $_GET["password"];

if($_GET["username"]&&$_GET["password"])
{
    $sql="select * from userlogin where user_login_name='$_GET[username]' and password='$_GET[password]'";
    $result=  mysql_query($sql);
    
    $var=  mysql_num_rows($result);
    if($var)
    {
        header('Location:request1.html');
    }
    else
    {
             
              header('Location:login.php');
    }
}



?>