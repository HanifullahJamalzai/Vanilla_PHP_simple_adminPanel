<?php 
session_start();

    unset($_SESSION['id']);
	unset($_SESSION['full_name']);
  	unset($_SESSION['login_name']);
  	unset($_SESSION['email']);
  	unset($_SESSION['profile_photo']);
  	unset($_SESSION['password']);
session_destroy();

header('location: login.php');


 ?>