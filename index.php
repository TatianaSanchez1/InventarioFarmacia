<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sistema de Inventario Farmacéutico</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">


</head>

<body style="background-image: url(assets/img/bg.jpg); 
    background-size: cover; 
    background-position: top; 
    background-repeat: no-repeat; ">
    <br />
    <br />

    <div class="container">

        <div id="login-form">

            <h1>Iniciar sesión</h1>

            <fieldset>

                <form id="form-login">
                    <input type="text" autofocus id="un" placeholder="Usuario" required autocomplete="off">

                    <input type="password" id="up" placeholder="Contraseña" required autocomplete="off">

                    <input type="submit" name="log" value="Ingresar">

                    <p>No está registrado? <a href="register.php">Crear una cuenta</a></p>
                </form>

            </fieldset>

        </div> 

    </div>

    <script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/regis.js"></script>

</body>

</html>