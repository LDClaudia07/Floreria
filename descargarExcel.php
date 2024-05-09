<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar</title>
</head>
<body>
    <?php
    include('conexion.php');
    date_default_timezone_set("America/Bogota");
    $fecha = date("d-m-Y");
    //configurar la cabeceras para descargar el excel
    header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
    $filename = "ReporteExcel_" .$fecha. ".xls";
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Disposition: attacment; filename=" . $filename );

    $listPedido =("SELECT * FROM  flor ORDER BY t_flor ASC");
    $DataPedidos = mysqli_query($conexion, $listPedido);
    ?>

    <table style="text-align: center;" border="1" cellpadding="1" cellspacing="1">
    <thead>
        <tr style="background-color: #D0CDCD;">
        <th>ID</th>
        <th>Tipo de flor</th>
        <th>Color</th>
        <th>Forma</th>
        <th>Cantidad</th>
        <th>Tamaño</th>
        <th>Material</th>
        <th>Base</th>
    </tr>
    </thead>
    <?php
    $i=1;
        while($pedidos =mysqli_fetch_array($DataPedidos)) {?>
        <tbody>
            <tr>
                <td><?Php echo $i++; ?></td>
                <td><?Php echo $pedidos ['t_flor'] ?></td>
                <td><?Php echo $pedidos ['color'] ?></td>
                <td><?Php echo $pedidos ['forma'] ?></td>
                <td><?Php echo $pedidos ['cantidad'] ?></td>
                <td><?Php echo $pedidos ['tamaño'] ?></td>
                <td><?Php echo $pedidos ['material'] ?></td>
                <td><?Php echo $pedidos ['base'] ?></td>
                
            </tr>
        </tbody>

        <?php } ?>
    </table>
</body>
</html>