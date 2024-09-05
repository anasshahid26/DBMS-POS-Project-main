<?php
include('connect.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysql_query("SELECT UserName FROM `Reg` WHERE UserName='$check' ");
$row=mysql_fetch_array($session);
$login_session=$row['UserName'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>

<h2>Successfully Login <br /> Welcome <?php echo " $login_session ";?></h2>';

<a href="logout.php"> Log Out</a>





