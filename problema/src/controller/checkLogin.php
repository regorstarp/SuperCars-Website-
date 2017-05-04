<?php
	if (!isset($_SESSION['user'])){
		session_start();
	}
	require("../model/checkLogin.php");
	$login = $_POST['login'];
	$password = $_POST['passwd'];
	$result = checkLogin($login);
	if($result != NULL){
	  if ($result['passwd'] === $password){
	    $_SESSION['user'] = $login;
	  } else {
	    $msg =  "<h1>Password incorrecte</h1>";
	  }
	}
	else{
	  $msg =  "<h1>L'usuari no existeix</h1>";
	}
	header('Refresh: 0; URL = ../index.php');
 ?>