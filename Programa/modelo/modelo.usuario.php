<?php
//se hacce la consulta con la base de datos de los usuarios aqui se anda a traer al ususario que esta iniciando sesion nuesto sistema 
require_once "conexion.php";
class modelo_usuario{
    public static function mdlMostrar_usuarios($tabla,$columna,$valor){

        $respuesta= Conexion::conectar()->prepare("select * From $tabla where $columna= :$columna");
        $respuesta->bindParam(":".$columna,$valor, PDO::PARAM_STR);
        $respuesta->execute();
        return $respuesta->fetch();
        $respuesta->close();
        $respuesta=null;
    } 


}
?>