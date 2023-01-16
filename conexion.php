<?php
class Conexion{
    public  static function conectar(){
        $link = new PDO("mysql:host=localhost; dbname=phpword", "root", "");
        return $link;
    }
}
?>
