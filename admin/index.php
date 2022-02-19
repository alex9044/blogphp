<?php
    if (isset($_GET['msg'])) {
        $mensaje = "Los datos ingresados no coinciden";
    }else{
        $mensaje = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Acesso</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <br>
    <section class="cont-login">
        <div class="head-login">
            <span>Control de Acesso</span>
        </div>
        <form action="login.php" method="POST">
            <input type="text" name="txtUsuario" id="txtUsuario" placeholder = "Usuario" value = "">
            <input type="password" name="txtPassword" id="txtPassword" placeholder = "Password" value = "">
            <p class = "msg-login"><?php echo $mensaje; ?></p>
            <input type="submit" value="Ingresar">
        </form>
    </section>
</body>
</html>