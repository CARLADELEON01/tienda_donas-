<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id_cliente" value="<?= $row['id_cliente']?>">
                <input type="text" name="fecha_ventas" placeholder="fecha_venta" value="<?= $row['fecha_venta']?>">
                <input type="text" name="id_venta" placeholder="id_venta" value="<?= $row['id_venta']?>">
                <input type="text" name="total_venta" placeholder="total_venta" value="<?= $row['total_venta']?>">
                <input type="text" name="total_impuestos" placeholder="total_impuestos" value="<?= $row['total_impuestos']?>">
                <input type="text" name="id_empleado" placeholder="id_empleado" value="<?= $row['id_empleado']?>">
                <input type="text" name="id_pago" placeholder="id_pago" value="<?= $row['id_pago']?>">
                <input type="submit" value="Actualizar">
            </form>

  