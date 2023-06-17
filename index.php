<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    

</head>
<body>
<?php
    //abrir la conexion base de datos
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO("mysql:host=localhost;dbname=15075", "root", "Umg$2023", $pdo_options);
    $select = $conexion->query("SELECT codigo, nombre, precio, existencia FROM producto");
    ?>
        <tbody>
        <table border=1>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($select->fetchAll() as $producto) { ?>
                <tr>
                    <td> <?php echo $producto["codigo"] ?> </td>
                    <td> <?php echo $producto["nombre"] ?> </td>
                    <td> <?php echo $producto["precio"] ?> </td>
                    <td> <?php echo $producto["existencia"] ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>