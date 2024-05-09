<?php 
session_start();

    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM flor";
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
                <a class="navbar-brand" href="#services">Nuevo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Floreria</div>
                <div class="masthead-heading text-uppercase">"Cherry Spring"</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">ingresar nuevos pedidos</a>
                <a class="btn btn-primary btn-xl text-uppercase" download="Mi_Excel" href="descargarExcel.php">generar reporte en excel</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-3">
                        <h1>Registro de Pedido</h1><br>

                        <form action="insertar.php" method="POST">
                            <input type="text" class="form-control mb-3" name="t_flor" placeholder="Tipo de flor">
                            <input type="text" class="form-control mb-3" name="color" placeholder="Color">
                            <input type="text" class="form-control mb-3" name="forma" placeholder="Forma del arreglo">
                            <input type="numerico" class="form-control mb-3" name="cantidad" placeholder="Cantidad de pedido">
                            <input type="text" class="form-control mb-3" name="tamaño" placeholder="tamaño del arreglo">
                            <input type="numerico" class="form-control mb-3" name="material" placeholder="Material">
                            <input type="numerico" class="form-control mb-3" name="base" placeholder="Base">
                            <input type="submit" class="btn btn-outline-secondary">
                        </form>      
                    </div>
                    <div class="col-md-9">
                        <table class="table" >
                            <thead class="table-success table-striped" >
                                <tr>
									    <th>Id</th>
                                        <th>Tipo</th>
                                        <th>Color</th>
                                        <th>Forma</th>
                                        <th>Cantidad</th>
                                        <th>Tamaño</th>
                                        <th>Material</th>
                                        <th>Base</th>
                                        <th></th>
                                        <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                            
                                    while($row=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th><?php  echo $row['id_flor']?></th>
                                        <th><?php  echo $row['t_flor']?></th>
                                        <th><?php  echo $row['color']?></th>
                                        <th><?php  echo $row['forma']?></th>    
                                        <th><?php  echo $row['cantidad']?></th>
                                        <th><?php  echo $row['tamaño']?></th>    
                                        <th><?php  echo $row['material']?></th>
                                        <th><?php  echo $row['base']?></th>
                                        <th>
                                        <a  class="btn btn-info"  href="actualizar.php?id=<?php echo $row['id_flor']?>">Editar</a>
                                        <a  class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esto?')" href="delete.php?id=<?php echo $row['id_flor']?>">Eliminar</a>
                                        
                                        </th>
                                    </tr>
                                <?php 
                                            }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
