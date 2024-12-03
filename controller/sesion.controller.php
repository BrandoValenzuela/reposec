<?php
require_once 'model/sesion.php';
class SesionController{
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Sesion();
    }
    
    public function Index(){
        if (isset($_SESSION['idUsuario'])) {
            header('Location: index.php?c=Tablero');
        }
        require_once 'view/sesion.php';
    }
    
    public function IniciarSesion(){
        $sesion = new Sesion();
        $sesion->email = $_POST['email'];
        $sesion->clave = $_POST['clave'];
        $usuario = $this->model->verificarCredenciales($sesion);
        if (!empty($usuario)) {
            $_SESSION = ['usuario' => $usuario->Nombre, 'apellidoUsuario' => $usuario->PrimerApellido, 'idUsuario' => $usuario->IdUsuario];
            $_SESSION['tiempo'] = time();
            echo json_encode(['success' => true]);
        }
        else{
            echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
        }
    }
    
    public function CerrarSesion(){
        echo 'Estoy aquí';
        $this->model->cerrarSesion();
    }

    // public function cerrarSesionPorInactividad(){
    //     $mensaje = array(
    //         'titulo' => 'Sesión cerrada automáticamente',
    //         'cuerpo' => 'La sesión se ha cerrado por una inactividad mayor a 15 minutos. Vuelve a iniciar sesión para continuar trabajando.'
    //     );
    //     $redireccion = 'index.php';
    //     include_once 'view/sesion.php';
    //     require_once 'view/modal-mensajes.php';
    // }
    

    public function ErrorConexion(){
       // require_once 'view/error.php';
    }
}
?>