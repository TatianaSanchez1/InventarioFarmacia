<?php
include ('../database/Database.php');
require_once('../class/User.php');


$username = $_POST['name'];
$user_account = $_POST['useraccount'];
$email = $_POST['email'];
$user_password = $_POST['userpassword'];
 
$user_password = md5($user_password);

$query = "INSERT INTO user(user_account, user_pass, username, email) VALUES (?,?,?,?)";

// Verificar que el e-mail no exista
$verify_email = "SELECT * FROM user WHERE email = ?";
$result = $user->getRow($verify_email, [$email]);
if ($result > 0) {
    echo '
            <script>
                alert("Este correo ya está registrado.");
                window.location = "../index.php";
            </script>
        ';
    exit();
}

// Verificar que el usuario no exista
$verify_user = "SELECT * FROM user WHERE user_account = ?";
$result_account = $user->getRow($verify_user, [$user_account]);
if ($result_account > 0) {
    echo '
            <script>
                alert("Este usuario ya está registrado. Intente nuevamente");
                window.location = "../index.php";
            </script>
        ';
    exit();
}

$execute = $user->insertRow($query, [$user_account, $user_password, $username, $email] ); 

if ($execute) {
    echo '
            <script> 
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>';
} else {
    echo '
            <script> 
                alert("Intentalo de nuevo. Usuario no almacenado");
                window.location = "../index.php";
            </script>';
}


$user->Disconnect();
