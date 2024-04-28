<?php
// este es un controlador en donde se inician la sesion 
class control_ingreso
{
    public static function ingreso()
    {
       
       if (isset($_POST["usuario"])){       
        
         if (
        preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)[.][a-zA-Z]{2,4}$/', $_POST["usuario"]) &&
        preg_match('/^[a-zA-Z0-9]+$/', $_POST["contra"])) {  
            $tabla="usuario";
            $columna= "correo_usuario";
            $valor= $_POST["usuario"];
       
            $respuesta= modelo_usuario::mdlMostrar_usuarios($tabla,$columna,$valor);      
           
           
          
           if ($respuesta["correo_usuario"]== $_POST["usuario"]  )
           {

            if($respuesta["password_usuario"]== $_POST["contra"])
            {

              $_SESSION["validarsesion"]= "ok";
              $_SESSION["id"]= $respuesta["idusuario"];
              $_SESSION["nombre"]= $respuesta["nombre"];
              $_SESSION["usuario"]= $respuesta["matrcula"];
              echo '<script> window.location= "inicio";</script>';
            }

            else {
            echo "La contraseña es incorrecta, vuelve a intentarlo ";
          }
         
          }
          else{
            echo 'El usuario es incorrecto';
          }

        }
       }
    }
 
}
?>