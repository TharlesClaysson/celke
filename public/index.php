<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require './usuario.php';
    $usuario = new Usuario();
    $msg = $usuario->cadastrar();
    echo $msg;
    
    ?>
</body>
</html>