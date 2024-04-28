<?php
//Esto lo que hace es establecer la conexion con la base de datos 
class Conexion
{
    public static function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=elmo_proyecto",
            "root",
            "",
            array(PDO::ATTR_ERRMODE      => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
        return $link;
    }
}
?>