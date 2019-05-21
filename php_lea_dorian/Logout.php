<?php
session_start();

$_SESSION = array();

session_destroy();

header("location: index3.php");
exit;
?>