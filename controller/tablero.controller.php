<?php

class TableroController{
    
    public function __CONSTRUCT(){

    }
    
    public function Index(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        require_once 'view/layout/encabezado.php';
        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
        require_once 'view/layout/pie-pagina.php';
    }
}
?>