<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM flor WHERE id_flor='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Floreria</div>
                <div class="masthead-heading text-uppercase">"Cherry Spring"</div>
               
            </div>
        </header>
        <section class="page-section" id="services">
            <div class="container">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <h1>Editar Registro</h1><br>
                                <form action="insertar.php" method="POST">

                                            <input type="hidden" class="form-control mb-3" name="t_flor" value="<?php echo $row['t_flor']  ?> ">
                                            <input type="text" class="form-control mb-3" name="color" placeholder="Color" value="<?php echo $row['color']  ?> " >
                                            <input type="text" class="form-control mb-3" name="forma" placeholder="Forma del arreglo" value="<?php echo $row['forma']  ?> ">
                                            <input type="numerico" class="form-control mb-3" name="cantidad" placeholder="Cantidad de pedido" value="<?php echo $row['cantidad']  ?> ">
                                            <input type="text" class="form-control mb-3" name="tamaño" placeholder="tamaño del arreglo" value="<?php echo $row['tamaño']  ?> ">
                                            <input type="numerico" class="form-control mb-3" name="material" placeholder="Material" value="<?php echo $row['material']  ?> ">
                                            <input type="numerico" class="form-control mb-3" name="base" placeholder="Base" value="<?php echo $row['base']  ?> ">

                                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                                </form>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
</html>