<?php
 include('connection.php');  
//destroy the session
session_destroy();

//redirect to login page
header('location:'.SITEURL.'login.php');


?>