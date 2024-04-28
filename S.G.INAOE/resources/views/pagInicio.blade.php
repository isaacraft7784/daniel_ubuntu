<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LIEE - Inicio</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('INAOE template\vendor\fontawesome-free\css\all.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <FontAwesomeIcon icon="fa-sharp fa-solid fa-face-smile-hearts" />

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('INAOE template/css/sb-admin-2.css') }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/principal') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">LIEE INAOE <sup>VidaIT</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/principal') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Extras
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Personal LIEE</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Para personal del LIEE:</h6>
                        <a class="collapse-item" href="{{ url('/login') }}">Inicio de Sesión</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/tablas') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="{{ url('/encuesta') }}">
                    <i class="fas fa-smile"></i>
                    <span>Encuesta de Satisfacción</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="{{ url('/solicitudServicios') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>  Solicitar servicio</a>
                                
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- BANCOS DE ENSAYO Y MEDICIÓN - TARJETAS  -->

                        <!-- ESFERA INTEGRADORA  -->  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            BANCOS DE ENSAYO Y MEDICIÓN</div>
                                            <div class="h8 mb-0 font-weight-bold text-gray-800">
                                                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/esfera.pdf">ESFERA INTEGRADORA</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- FOTOGONIÓMETRO -->  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            BANCOS DE ENSAYO Y MEDICIÓN</div>
                                            <div class="h8 mb-0 font-weight-bold text-gray-800">
                                                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/fotogoniometro.pdf">FOTOGONIÓMETRO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CHOQUE TÉRMICO -->  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            BANCOS DE ENSAYO Y MEDICIÓN</div>
                                            <div class="h8 mb-0 font-weight-bold text-gray-800">
                                                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/choque_termico.pdf">CHOQUE TÉRMICO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SOBRETENSIONES TRANSITORIAS -->  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            BANCOS DE ENSAYO Y MEDICIÓN</div>
                                            <div class="h8 mb-0 font-weight-bold text-gray-800">
                                                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/sobretensiones.pdf">SOBRETENSIONES TRANSITORIAS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONMUTACIÓN -->  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            BANCOS DE ENSAYO Y MEDICIÓN</div>
                                            <div class="h8 mb-0 font-weight-bold text-gray-800">
                                                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/conmutacion.pdf">CONMUTACIÓN</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SALUD VISUAL -->  
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            BANCOS DE ENSAYO Y MEDICIÓN</div>
                                            <div class="h8 mb-0 font-weight-bold text-gray-800">
                                                <a target="_blank" rel="nofollow" href="https://www.inaoep.mx/~liee/files/Doc025stps.pdf">SALUD VISUAL</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 
                    
                    
                    <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CARD 1</h6>
        </div>
        <div class="card-body">
          Card 1 content
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CARD 2</h6>
        </div>
        <div class="card-body">
          Card 2 content
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CARD 3</h6>
        </div>
        <div class="card-body">
          Card 3 content
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CARD 4</h6>
        </div>
        <div class="card-body">
          Card 4 content
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CARD 5</h6>
        </div>
        <div class="card-body">
          Card 5 content
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">CARD 6</h6>
        </div>
        <div class="card-body">
          Card 6 content
        </div>
      </div>
    </div>
  </div>
</div>










                    
                    <!-- CONTENIDO POR FILAS -->
                    <div class="row">

                        <!-- PRIMERA COLUMNA -->
                        <div class="col-lg-6 mb-4">

                            <!-- ESFERA DESCRIPCIÓN -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">ESFERA INTEGRADORA</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 20rem;"
                                            src="{{ asset('INAOE template\img\esfera-dibujo.png') }}" alt="...">
                                    </div>
                                    <p>Esfera hueca de alta reflexión de 3m de diámetro que permite medir la potencia luminosa de una fuente de luz artificial así como otras características radiométricas y de eficiencia energética, tales como TCC, IRC, eficacia, FP y distorsión armónica.</p>
                                </div>
                            </div>

                            <!-- CHOQUE TÉRMICO DESCRIPCIÓN -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CHOQUE TÉRMICO</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 20rem;"
                                            src="{{ asset('INAOE template\img\choque-termico-dibujo.png') }}" alt="...">
                                    </div>
                                    <p>Es un equipo para ensayos de envejecimiento acelerado, consta de dos cámaras térmicas entre las cuales se desplaza automáticamente una canastilla que transporta objetos bajo prueba para someterlas a choque térmico de entre -10 °C y 50 °C. Permite configurar diferentes ciclos y tiempos de exposición.</p>
                                </div>
                            </div>
                        </div>

                        <!-- SEGUNDA COLUMNA -->                        
                        <div class="col-lg-6 mb-4">

                            <!-- FOTOGONIÓMETRO DESCRIPCIÓN -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">FOTOGONIÓMETRO</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 20rem;"
                                            src="{{ asset('INAOE template\img\fotogoniometro-dibujo.png') }}" alt="...">
                                    </div>
                                    <p>Fotómetro de celda móvil automatizado cuya función es determinar el comportamiento espacial de intensidades luminosas de una fuente de luz artificial. Está constituido por un brazo móvil de 6m con doble sensor de iluminancia y un soporte móvil para especímenes.</p>
                                </div>
                            </div>                            


                            <!-- SOBRETENSIONES TRANSITORIAS DESCRIPCIÓN -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">SOBRETENSIONES TRANSITORIAS</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 20rem;"
                                            src="{{ asset('INAOE template\img\sobretensiones-dibujo.png') }}" alt="...">
                                    </div>
                                    <p>Banco de pruebas que permite aplicar a lámparas, componentes eléctricos y electrónicos sobretensiones transitorias amortiguadas de 0.5µs a una frecuencia de 100kHz y sobretensiones de impulso por rayo de hasta 6kV a 3kA con onda combinada de 1.2/50 µs, lo anterior evalúa su confiabilidad ante fallos en la red eléctrica.</p>
                                </div>
                            </div>
                        </div>

                        <!-- TERCERA COLUMNA -->
                        <div class="col-lg-6 mb-4">

                            <!-- CONMUTACIÓN DESCRIPCIÓN -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">CICLO DE CONMUTACIÓN</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 20rem;"
                                            src="{{ asset('INAOE template\img\conmutacion-dibujo.png') }}" alt="...">
                                    </div>
                                    <p>Sistema electrónico automatizado con control por computadora que tiene por objetivo ejecutar ensayos de envejecimiento acelerado a lámparas y luminarios, a través de ciclos automatizados de encendido y apagado, monitoreando su corriente de carga para verificar su condición de funcionamiento.</p>
                                </div>
                            </div>

                            <!-- SALUD VISUAL DESCRIPCIÓN -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">SALUD VISUAL</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-2 px-sm-3 mt-2 mb-3" style="width: 20rem;"
                                            src="{{ asset('INAOE template\img\salud-dibujo.png') }}" alt="...">
                                    </div>
                                    <p>Objetivo del servicio: Realizar el estudio y evaluación de las condiciones de iluminación en el centro de trabajo para identificar áreas de oportunidad en la mejora del desempeño visual, evitando riesgos y demostrando cumplimiento de la norma NOM-025-STPS.</p>
                                </div>
                            </div>
                        </div>                            
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Todos lo derechos reservados INAOE</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('INAOE template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('INAOE template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('INAOE template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('INAOE template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('INAOE template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('INAOE template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('INAOE template/js/demo/chart-pie-demo.js') }}"></script>


</body>

</html>