<?php  
class Usuario{
	private $pdo;
	public $idAlumno;
    public $idSalon;
	public $nombreAlumno;
	public $apellido;
    public $matricla;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Conexion::obtenerConexion();   
		}catch(Exception $e){
			header("Location: index.php?c=Sesion&a=ErrorConexion");
		}
	}

	public function obtenerDatosAlumno($idUsuario){
		try{
			$stm = $this->pdo->prepare("SELECT * 
                FROM Alumnos 
                INNER JOIN Salones ON Alumnos.IdSalon = Salones.IdSalon            
                WHERE IdAlumno = ?");
			$stm->execute(
				array(
                    $idUsuario
				)
			);
			$resultado = $stm->fetch(PDO::FETCH_OBJ);
			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>