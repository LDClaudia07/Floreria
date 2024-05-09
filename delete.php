<?php

include("conexion.php");
$con=conectar();

$id_flor=$_GET['id'];

$sql="DELETE FROM flor  WHERE id_flor='$id_flor'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
