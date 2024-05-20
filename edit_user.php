<?php

include("connection.php");
$con = connection();

$id_cliente=$_POST["id_cliente"];
$fecha_venta = $_POST['fecha_venta'];
$id_venta = $_POST['id_venta'];
$total_venta = $_POST['total_venta'];
$total_impuestos = $_POST['total_impuestos'];
$id_empleado = $_POST['id_empleado'];
$id_pago = $_POST['id_pago'];

$sql="UPDATE users SET total_ventas='$total_venta', total_impuestos='$total_impuestos', fecha_venta='$fecha_venta', id_empleado='$id_empleado', id_pago='$id_pago' WHERE id_empleado='$id_empleado'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
   
}

?>


