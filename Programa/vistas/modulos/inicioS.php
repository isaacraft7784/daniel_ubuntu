<!  es la vista de los inicios de secion/>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Crear una cuenta </title>
        <link href="vistas/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary"> 
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">iniciar sesion </h3></div>
                                    <div class="card-body">
                                        <form method="POST" >
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="usuario" name="usuario" type="email" placeholder="nombre@ejemplo.com" required/>
                                                <label for="inputEmail">Correo institucional: </label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="contra" name="contra" type="password" placeholder="Password" required />
                                                <label for="inputPassword">Contraseña: </label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                             
                                                <?php
                                                $ingreso= new control_ingreso;
                                                $ingreso->ingreso();
                                                ?>
                                               <button class="btn btn-primary" >Inicio</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="crear" >¿no tienenes cuennta? crea una!</a></div>
                                    </div>
                                  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </main>
            </div>
            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Equipo Escuadron Lobo maravilla </div>
                            <div>
                                <a href="" onclick="politica()">  Politica de privacidad, Terminos y condiciones</a>

                                &middot;
                            </div>
                        </div>
                    </div>
                </footer>
        </div>
        </body>
  