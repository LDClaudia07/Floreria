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

$sql="UPDATE flor SET  color='$color',forma='$forma',cantidad='$cantidad', tamaño='$tamaño', material='$material', base='$base' WHERE t_flor='$t_flor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>