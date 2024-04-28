
//despliega la ventana de los terminos y condiciones 
function politica(){
    var ventana = window.open("", "ventanaEmergente", "width=400, height=400");
        ventana.document.write( "<div class='layoutSidenav'>","<div id='layoutSidenav_content'>","<div class='container-fluid px-4'>");
        ventana.document.write("<h1 class='mt-4'>Politica  de privacidad</h1>","<ol class='breadcrumb mb-4'>","<li class='breadcrumb-item active'>"  );
        ventana.document.write(" <p> informarte del tipo de datos que recogemos cuando utilizas nuestros servicios</p>");
        ventana.document.write("<p>Recogemos información para proporcionar los mejores servicios a todos nuestros usuarios: desde determinar información básica,, hasta datos más complejos. El tipo de información que recoge nuestra página y cómo se utiliza esa información depende del uso que hagas de nuestros servicios y de cómo administres los controles de privacidad.",
       " Al crear una cuenta, nos proporcionas información personal que incluye tu nombre y una contraseña",
       "También usamos tu información para garantizar que nuestros servicios funcionan correctamente como, por ejemplo, realizar un seguimiento de las interrupciones de red o solucionar los problemas de los que nos informas. También utilizamos tu información para mejorar nuestros servicios. Por ejemplo, conocer los términos de búsqueda que se escriben mal con más frecuencia nos ayuda a mejorar las funciones de revisión ortográfica que se utilizan en todos nuestros servicios. </p>"
      );
       ventana.document.write("</li></ol>");
       ventana.document.write("<div class='container-fluid px-4'><h1 class='mt-4'>Terminos y condiciones</h1><ol class='breadcrumb mb-4'> <li class='breadcrumb-item active'>");
       ventana.document.write(" Esta página web es propiedad y está operado por el equipo de desarrolladores Equipo Lobo Maravilla. Estos Términos establecen los términos y condiciones bajo los cuales tu puedes usar nuestra página web y servicios ofrecidos por nosotros. Esta página web ofrece a los visitantes el poder reservar laboratorios y los equipos que se encuentran en estos exclusivamente solo para uso de educativo. Al acceder o usar la página web de nuestro servicio, usted aprueba que haya leído, entendido y aceptado estar sujeto a estos Términos:","Para usar nuestro página web y / o recibir nuestros servicios, debes pertenecer al Complejo Regional San Jose Chiapa. No tienes permitido utilizar esta página web y / o recibir servicios si hacerlo está prohibido en tu país o en virtud de cualquier ley o regulación aplicable a tu caso.");
       ventana.document.write("<p><button onclick='window.close()'>Regresar</button></p>");

}
