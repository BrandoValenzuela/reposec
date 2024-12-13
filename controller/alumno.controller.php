<?php

require_once 'model/alumno.php';

class AlumnoController{
    private $modeloAlumno;

    public function __CONSTRUCT(){
        $this->modeloAlumno = new Usuario();
    }
    
    public function Index(){
        if (!isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Sesion');
        }
        $alumno = $this->modeloAlumno->obtenerDatosAlumno($_REQUEST['idAlumno']);
        require_once 'view/layout/encabezado.php';
        echo '<pre>';
        print_r($alumno);
        echo '</pre>';
        require_once 'view/layout/pie-pagina.php';
    }
}
?>