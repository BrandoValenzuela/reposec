<?php

require_once 'model/usuario.php';

class TableroController{
    private $modeloUsuario;

    public function __CONSTRUCT(){
        $this->modeloUsuario = new Usuario();
    }
    
    public function Index(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        $roles = $this->modeloUsuario->obtenerRoles($_SESSION['idUsuario']);
        $listaMaterias = $this->modeloUsuario->obtenerCargaDeTrabajoIndividual($_SESSION['idUsuario']);
        foreach($roles as $rol) {
            switch($rol->NombreRol) {
                case 'ADMINISTRADOR' :
                      $_SESSION['ADMINISTRADOR'] = true;
                      break;
                case 'DOCENTE' :
                        $_SESSION['DOCENTE'] = true;
                      break;
                case 'ASESOR' :
                      $_SESSION['ASESOR'] = true;
                      break;
                case 'ADMINISTRADOR' :
                      $_SESSION['PREFECTURA'] = true;
                      break;
                default: break;
            } 
        }
        require_once 'view/layout/encabezado.php';
        if (isset($_SESSION['ADMINISTRADOR'])) {
            require_once 'view/tablero/tablero-administrador.php';
        }elseif(isset($_SESSION['DOCENTE'])){
            require_once 'view/tablero/tablero-docente.php';
        }else{
            require_once 'view/tablero/tablero-asesor.php';
        }
        require_once 'view/layout/pie-pagina.php';
    }

    public function IndexAdministrador(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        $listaMaterias = $this->modeloUsuario->obtenerCargadeTrabajoIndividual($_SESSION['idUsuario']);
        // echo '<pre>';
        // print_r($listaMaterias);
        // echo '</pre>';
        require_once 'view/layout/encabezado.php';
        require_once 'view/tablero/tablero-administrador.php';
        require_once 'view/layout/pie-pagina.php';
    }

    public function IndexDocente(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        $listaMaterias = $this->modeloUsuario->obtenerCargadeTrabajoIndividual($_SESSION['idUsuario']);
        require_once 'view/layout/encabezado.php';
        require_once 'view/tablero/tablero-docente.php';
        require_once 'view/layout/pie-pagina.php';
    }
    
    public function IndexAsesor(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        require_once 'view/layout/encabezado.php';
        require_once 'view/tablero/tablero-asesor.php';
        require_once 'view/layout/pie-pagina.php';
    }
}
?>