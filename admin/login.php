<?php
    if(isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])){
        $vUser = $_POST['txtUsuario'];
        $vPassword = $_POST['txtPassword'];
        
        include 'conn.php';

        $sql = "select * from usuarios where usuario = ? and password  = ?";

        $ps = $conexion -> prepare($sql);
        $ps -> bind_param("ss",$vUser,$vPassword);
        $ps -> execute(); 

        $resultado = $ps -> get_result();

        if ($resultado -> num_rows > 0) {
            header('Location: ../index.php');
        }else{
            header('Location: index.php?msg=error');
        }
    }else{
        echo "error";
    }
?>