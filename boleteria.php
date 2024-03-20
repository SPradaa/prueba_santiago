<?php

require_once("db/conexion.php");
$db = new Database();
$con = $db->conectar();
session_start();
?>


<?php

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "formreg")) {
    $documento = $_POST['documento'];
    $nombre = $_POST['name'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $date = $_POST['fecha'];
    $comida = $_POST['comida'];
    $juego = $_POST['juego'];

    

    // $sql = $con->prepare("SELECT * FROM usuarios WHERE documento='$documento'");
    // $sql->execute();
    // $fila = $sql->fetchAll(PDO::FETCH_ASSOC);

        if ($documento == "" || $nombre == "" || $telefono == "" || $email == "" || $date == "" || $comida == "" || $juego == "") {
            echo '<script>alert ("EXISTEN DATOS VACIOS");</script>';
            echo '<script>window.location="boleteria.php"</script>';
        } else {
            $insertSQL = $con->prepare("INSERT INTO usuarios(documento, id_doc, nombre, apellido, id_eps, id_rh, telefono, correo, id_ciudad, direccion, password, id_rol, id_estado) VALUES('$documento', '$id_doc', '$nombre', '$apellido', '$id_eps', '$id_rh', '$telefono', '$correo', '$id_ciudad', '$direccion', '$pass_cifrado', '$id_rol', '$estado')");
            $insertSQL->execute();
            echo '<script> alert("REGISTRO EXITOSO");</script>';
            echo '<script>window.location="login.html"</script>';

        }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagoona Template - Contact page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
<!--

TemplateMo 550 Diagoona

https://templatemo.com/tm-550-diagoona

-->
</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">diagoona</h1>
                            <p class="tm-slogon">new bootstrap template</p>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="info.php">Informacion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="reporte.php">Reporte</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="boleteria.php">Boleteria <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Boleteria</h2>
                        <p class="mb-85">ingresa tus datos para obtener tu boleta, ademas ayudanos dejandonos tu opinion sobre la comida y el juego que mas es de tu interes para brindarte una mejor experiencia de usuario</p>
                       
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="number" name="documento" class="form-control" placeholder="documento"  id="documento" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Nombre" id="nombre" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="telefono" class="form-control" placeholder="telefono"  id="telefono" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <label for="">Escoja una fecha Para visitarnos!</label>
                                <input type="date" name="fecha" class="form-control" placeholder="fecha" required="" />
                            </div>
                            
                          
                    
                            <label for="">Seleccione su comida</label>
                            <div class="form-group mb-4">
                             
                            <select name="comida">
                <option value="">comidas</option>

                <?php
                $control = $con->prepare("SELECT * from comida");
                $control->execute();
                while ($fila = $control->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value=" . $fila['id_comida'] . ">"
                        . $fila['comida'] . "</option>";
                }
                ?>
            </select>
                            </div>

                                    <!-- division marcada entre juegos y comidas -->


                            <div class="form-group mb-4">
                                <label for="">Seleccione su atraccion principal</label>
                            <select name="juego">
                <option value="">Juegos</option>

                <?php
                $control = $con->prepare("SELECT * from juegos");
                $control->execute();
                while ($fila = $control->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value=" . $fila['id_juego'] . ">"
                        . $fila['juegos'] . "</option>";
                }
                ?>
            </select>
                            </div>



                            <div class="text-right">
                            <input type="submit" name="validar" value="Adquirir">
            <input type="hidden" name="MM_insert" value="formreg">
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2020 Diagoona Co. 
                    
                    | Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-text-link">TemplateMo</a></p>
                </footer>
            </div>  
        </div>

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>