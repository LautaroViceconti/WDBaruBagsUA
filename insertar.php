<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


$sql="INSERT INTO producto VALUES('$id','$nombre','$cantidad','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:producto.php");
    
}else {
}
?>