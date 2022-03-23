<?php 
require_once('../class/User.php');


$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$userpassword = $_POST['userpassword'];

	$userpassword = md5($userpassword);

	$result = $user->user_register($name, $username, $email, $userpassword);
    
	if($result > 0){
		// echo 'succ';
		$return['logged'] = true;
		$return['url'] = "home.php";
		$_SESSION['logged_id'] = $result['user_id'];
		$_SESSION['logged_type'] = $result['user_type'];
		$_SESSION['uniqid'] = uniqid();
	}else{
		// echo 'fail';
		$return['logged'] = false;
		$return['msg'] = "Usuario o contraseña invalido!";
	}

	echo json_encode($return);



$user->Disconnect();