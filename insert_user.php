<?php
include("connection.php");
$con = connection();

$id_cliente = $_POST['id_cliente'];
$fecha_venta = $_POST['fecha_venta'];
$id_venta = $_POST['id_venta'];
$total_venta= $_POST['total_venta'];
$total_impuestos= $_POST['total_impuestos'];
$id_empleado = $_POST['id_empleado'];
$id_pago = $_POST['id_pago'];

$sql = "INSERT INTO users VALUES('$id_cliente','$fecha_venta','$id_venta','$total_venta','$total_impuestos','$id_empleado','$id_pago')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{
   
}
?>
