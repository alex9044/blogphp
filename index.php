<?php
    include 'conn.php';
    $sql = "select * from articulos";
    $ps = $conexion ->prepare($sql);
    $ps -> execute();
    $registros = $ps -> get_result();

    $sqlPub = "select * from publicidad where estado = 1 order by secuencia";
    $psPub = $conexion ->prepare($sqlPub);
    $psPub -> execute();
    $registrosPub = $ps -> get_result();
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include 'encabezado.php'; ?>

    <div class="banner">
        <img src="img/banner.png" alt="">
    </div>
    <div class="contenido">
        <section class="info">
            <?php
                while($fila = $registros -> fetch_assoc()){

            ?>
                <article>
                    <h2 class="titulo-info"><?php echo $fila['titulo']; ?></h2>
                    <h3 class="subtitulo-info"><?php echo $fila['subtitulo']; ?></h3>
                    <p class="texto-info">><?php echo $fila['texto']; ?></p>
                    <span class="autor-info">><?php echo $fila['autor'] . " / " . $fila['fecha'] ; ?></span>
                </article>
            <?php
                }
            ?>
        </section>
        <aside class="publicidad">
            <article>
                <h3>Empresa</h3>
                <img src="img/publicidad/1.jpg" alt="" width = 100%;>
                <span>061-505512</span>
            </article>
        </aside>
    </div>    
    <?php include 'footer.php'; ?>
    
</body>
</html>