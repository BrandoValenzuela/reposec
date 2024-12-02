<?php
require_once 'model/conexionBD.php';
session_start();

$controller = 'sesion';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c'])){
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
 }else{    
    
    //Verificamos el tiempo de sesion
    require_once "model/control_sesion.php";

    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}
?>
