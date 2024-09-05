<?php
session_start();
//*****session_destroy() will destroy the session
session_destroy();

header("location:index.php");

?>

<input class='form-control' placeholder='User Name' name='user_namee' id='user_namee'>