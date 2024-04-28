<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio de secion</title>
        <link href="vistas/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
    
    <body>
       <?php
           
       if (isset($_SESSION["validarsesion"]) &&  $_SESSION["validarsesion"]=="ok"){
         echo' <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <!-- Navbar Brand-->
           <a class="navbar-brand ps-3" href="index.html">Laboratorios BUAP</a>
           <!-- Sidebar Toggle-->
           <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="input-group">
              </div>
                <!-- Navbar-->
                  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                   <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                      <li><a class="dropdown-item" href="salir">Cerrar sesion </a></li>
                      </ul>
                     </li>
                      </ul>
                      </nav>';
                       echo ' <div id="layoutSidenav">
                      <div id="layoutSidenav_nav">';
                       include "vistas/modulos/paginas/queda.php";

        

            if ( isset($_GET["ruta"]) || $_GET["ruta"]=="principal" || $_GET["ruta"]=="salir" || $_GET["ruta"]=="lab1"  
            || $_GET["ruta"]=="inicio" || $_GET["ruta"]=="lab2" || $_GET["ruta"]=="lab3" ||  $_GET["ruta"]=="lab4"
            || $_GET["ruta"]=="politica" ){
              include "vistas/modulos/".$_GET["ruta"].".php"; 
            }

        
       }
       else {    
       include "vistas/modulos/inicioS.php";
      

      }
      if ($_GET["ruta"]=="crear")
      {
        $sesiones=ob_get_clean();
       include "vistas/modulos/".$_GET["ruta"].".php"; 
       
      }  
      
    
    echo'</div>';
    echo '</div>';
       ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>


        
        <script src="vistas_js/javascript/ventanas.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="vistas_js/javascript/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="vistas/assets/demo/chart-area-demo.js"></script>
        <script src="vistas/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="vistas_js/javascript/datatables-simple-demo.js"></script>
        <script src="vistas_js/javascript/tabla.js"></script>
 </body>
</html>
