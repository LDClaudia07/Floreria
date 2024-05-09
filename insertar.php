<?php
include("conexion.php");
$con=conectar();

$t_flor=$_POST['t_flor'];
$color=$_POST['color'];
$forma=$_POST['forma'];
$cantidad=$_POST['cantidad'];
$tamaño=$_POST['tamaño'];
$material=$_POST['material'];
$base=$_POST['base'];


$sql="INSERT INTO flor(t_flor,color,forma,cantidad,tamaño, material,base)VALUES('$t_flor','$color','$forma',
'$cantidad','$tamaño','$material', '$base')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>