<?php
require_once 'class/users.class.php';
$users = users::singleton();
$data = $users->get_usuarios();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Crud en php con la extensión PDO</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/960.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/ui-darkness/jquery-ui.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</head>
<body>

    <div class="container_12">
        <h1>Crud con php y la extensión PDO</h1>
        <?php
            foreach($data as $fila):
            endforeach;
            ?>
        <div class="grid_12" style="    margin-right: 0px;    margin-left: 20px;">
        <div class="grid_8"></div>

            <div class="grid_dr grid_2" id="agregar" style="    margin-right: 0px;"><input type="button" value="Añadir" id="<?=$fila['id']?>" class="agregar"></div>
<div class="grid_2" id="buscar" style="    margin-right: 0px;"><input type="text" value="" id="" class="buscar" placeholder="Búsqueda"><input type="button" value="Enviar" id="" class="buscar" placeholder=""></div>
            </div>
        <div class="grid_12">
            <div class="grid_12" id="head">
                <div class="grid_2" id="head_nombre">Nombre</div>
                <div class="grid_3" id="head_email">Email</div>
                <div class="grid_2" id="head_registro">Fecha de registro</div>
                <div class="grid_2" id="head_eliminar">Eliminar</div>
                <div class="grid_2" id="head_editar">Editar</div>
            </div>
            <?php
            foreach($data as $fila):
            ?>
            <div class="grid_12" id="body">
                <div class="grid_2" id="nombre<?=$fila['id']?>"><?=$fila['nombre']?></div>
                <div class="grid_3" id="email<?=$fila['id']?>"><?=$fila['email']?></div>
                <div class="grid_2" id="registro<?=$fila['id']?>"><?=$fila['registro']?></div>
                <div class="grid_2" id="eliminar"><input type="button" value="Eliminar" id="<?=$fila['id']?>" class="eliminar"></div>
                <div class="grid_2" id="editar"><input type="button" value="Editar" id="<?=$fila['id']?>" class="editar"></div>
            </div>
            <?php
            endforeach;
            ?>

        </div>
    </div>
</body>
</html>
