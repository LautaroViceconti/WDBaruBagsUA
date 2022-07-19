<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

$sql="UPDATE producto SET  nombre='$nombre',cantidad='$cantidad',precio='$precio' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>