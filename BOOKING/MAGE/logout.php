<?php 
session_start();

unset($_SESSION['identity']);
unset($_SESSION['name']);
unset($_SESSION['title']);

header("location:login.php");
?>