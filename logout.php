<?php 
if(session_status() == PHP_SESSION_NONE)
{
	session_start();//Iniciar sesion si no fue iniciada
}

unset($_SESSION['logged_id']);
unset($_SESSION['logged_type']);

if(!isset($_SESSION['logged_id'])){
	header('location: index.php');
}

?>