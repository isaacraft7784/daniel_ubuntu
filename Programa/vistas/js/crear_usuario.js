function crear()
{
    var usuario_nuevo = window.open ("","crear_usuario", "whidth=500,height=500");
    usuario_nuevo.document.write( "<head>","<link href='vistas/css/styles.css' rel='stylesheet' />","</head>")
    usuario_nuevo.document.write("<body class='bg-primary'>");
    usuario_nuevo.document.write("<div id='layoutAuthentication'></div>"," <div id='layoutAuthentication_content'>","<main>");
    usuario_nuevo.document.write("<div class='container'>","<div class='row justify-content-center'>");
    usuario_nuevo.document.write("<div class='col-lg-7'>" ,"<div class='card shadow-lg border-0 rounded-lg mt-5>'");
    usuario_nuevo.document.write("<div class='card-header'><h3 class='text-center font-weight-light my-4'>Crear Cuenta</h3></div>");
    usuario_nuevo.document.write ("<div class='card-body'>","<form>", "  <div class='row mb-3'>"," <div class='col-md-6'></div>"," <div class='form-floating mb-3 mb-md-0'>");
    usuario_nuevo.document.write("<input class='form-control' id='nombre' type='text' placeholder='Telcle tu nombre o nombres' required />");
}