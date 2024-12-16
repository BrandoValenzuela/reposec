<?php

require_once 'data.php';

class Conexion
{
    public static function obtenerConexion(){
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset='.CODEX.'', USER, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>