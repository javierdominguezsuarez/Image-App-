<?php

// stran za izpis
include('config.php');




$_SESSION = array();
session_destroy(); 
setcookie (session_name(), '', time()-3600); 

header('Location: '.'login.php');
?>