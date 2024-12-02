<?php
require_once 'model/sesion.php';
class SesionController{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Sesion();
    }
    
    public function Index(){
        if (isset($_SESSION['permisos'])) {
            header('Location: index.php?c=Index');
        }
        require_once 'view/sesion.php';
    }
    
    public function IniciarSesion(){
        $sesion = new Sesion();
        $sesion->email = $_POST['email'];
        $sesion->clave = $_POST['clave'];
        $usuario = $this->model->verificarCredenciales($sesion);
        // echo '<pre>';
        // print_r($usuario);
        // echo '<pre>';
        if (!empty($usuario)) {
            $_SESSION = ['usuario' => $usuario->Nombre, 'idUsuario' => $usuario->IdUsuario];
            $_SESSION['tiempo'] = time();
            echo json_encode(['success' => true]);
            // header('location: ?c=Tablon');
        }
        else{
            echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);

            // $mensaje = array(
            //     'titulo' => 'Ups! Algo salio mal',
            //     'cuerpo' => 'El usuario o la contraseña que ingresaste son incorrectos.<br>Por favor vuelve a intentar.'
            // );
            // // $redireccion = 'index.php';
            // require_once 'view/sesion.php';
            // require_once 'view/modal-mensajes.php';
        }
    }

    public function cerrarSesionPorInactividad(){
        $mensaje = array(
            'titulo' => 'Sesión cerrada automáticamente',
            'cuerpo' => 'La sesión se ha cerrado por una inactividad mayor a 15 minutos. Vuelve a iniciar sesión para continuar trabajando.'
        );
        $redireccion = 'index.php';
        include_once 'view/sesion.php';
        require_once 'view/modal-mensajes.php';
    }
    
    public function CerrarSesion(){
        $sesion = new Sesion();
        $resultado = $this->model->cerrarSesion();
    }

    public function ErrorConexion(){
       // require_once 'view/error.php';
    }
}
?>