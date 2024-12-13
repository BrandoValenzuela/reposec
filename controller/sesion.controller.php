<?php
require_once 'model/usuario.php';
class SesionController{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }
    
    public function Index(){
        if (isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Tablero');
        }
        require_once 'view/sesion.php';
    }
    
    public function IniciarSesion(){
        $usuario = new Usuario();
        $usuario->email = $_POST['email'];
        $usuario->clave = $_POST['clave'];
        $colaborador = $this->model->verificarCredenciales($usuario);
        if (!empty($colaborador)) {
            $_SESSION = ['usuario' => $colaborador->Nombre, 'apellidoUsuario' => $colaborador->Apellidos, 'idUsuario' => $colaborador->IdUsuario];
            $_SESSION['tiempo'] = time();
            echo json_encode(['success' => true]);
        }
        else{
            echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
        }
    }
    
    public function CerrarSesion(){
        session_unset();
        session_destroy();
        header('Location: index.php?c=Sesion');
    }

    public function cerrarSesionPorInactividad(){
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
        require_once 'view/sesion.php';
    }
    

    public function ErrorConexion(){
       require_once 'view/error.php';
    }
}
?>