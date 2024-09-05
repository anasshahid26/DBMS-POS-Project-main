<?php

$name=$_POST['username'];
$pass=$_POST['password'];


$dbc=mysql_connect('localhost','marketli_ANAS','developer4874');
if(!$dbc)
{
die('not connected:'.mysql_error());
}

//select database
$db_selected=mysql_select_db("marketli_registration",$dbc);
if(!$db_selected)
{

die("cantconnected:".mysql_error);
}
else
{
$query="SELECT * FROM `Reg` WHERE UserEmail='$name' and UserPassword='$pass'";
$result = mysql_query($query) ;
$rows = mysql_num_rows($result);

if($rows==1)
{

$_SESSION['name'];
$_SESSION['pass'];
header('location:Dashboard.php');    

}
else
{echo 'not connected';}


//test
//$query="UPDATE table SET email='4567' WHERE username='123'";
}


?>