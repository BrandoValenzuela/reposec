<?php

require_once 'model/salon.php';

class SalonController{
    private $modeloSalon;

    public function __CONSTRUCT(){
        $this->modeloSalon = new Usuario();
    }
    
    public function Index(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        $idSalon = $_REQUEST['idSalon'];
        $nombreMateria = $_REQUEST['materia'];
        $salon = $this->modeloSalon->obtenerSalon($idSalon);
        $listaAlumnos = $this->modeloSalon->obtenerAlumnos($idSalon);
        require_once 'view/layout/encabezado.php';
        require_once 'view/salon/salon-vista.php';
        require_once 'view/layout/pie-pagina.php';
    }
}
?>