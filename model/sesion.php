<?php  
class Sesion{
	private $pdo;
    public $email;
    public $clave;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Conexion::obtenerConexion();   
		}catch(Exception $e){
			header("Location: index.php?c=Sesion&a=ErrorConexion");
		}
	}

	public function verificarCredenciales(Sesion $data){
		try{
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND clave = ?");
			$stm->execute(
				array(
                    $data->email, 
                    $data->clave
				)
			);
			$resultado = $stm->fetch(PDO::FETCH_OBJ);
			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function cerrarSesion(){
		session_unset();
		session_destroy();
		header('Location: index.php?c=Sesion&a=Index');
	}
}
?>