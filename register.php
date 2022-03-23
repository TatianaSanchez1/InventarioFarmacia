<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sistema de Inventario Farmacéutico</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body style="background-image: url(assets/img/bg.jpg); 
    background-size: cover; 
    background-position: top; 
    background-repeat: no-repeat; ">
    <br />
    <br />

    <div class="container">

        <div id="login-form">

            <h1>Registro</h1>

            <fieldset>

                <form id="form-register" action="data/user_register.php" method="POST">
                    <input type="text" autofocus id="name" name="name" placeholder="Nombre" required>

                    <input type="text" id="email" name="email" placeholder="E-mail" required>

                    <input type="text" id="useraccount" name="useraccount" placeholder="Usuario" required>

                    <input type="password" id="userpassword" name="userpassword" placeholder="Contraseña" required>

                    <input type="submit" name="log" value="Registrarse">
                </form>

            </fieldset>

        </div>

    </div>

    <script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/regis.js"></script>

</body>

</html>