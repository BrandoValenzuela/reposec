<?php  
class Usuario{
	private $pdo;
	public $idUsuario;
	public $nombre;
	public $primerApellido;
	public $segundoApellido;
    public $email;
    public $clave;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Conexion::obtenerConexion();   
		}catch(Exception $e){
			header("Location: index.php?c=Sesion&a=ErrorConexion");
		}
	}

	public function verificarCredenciales(Usuario $data){
		try{
			$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE Email = ? AND Clave = ?");
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

	public function obtenerRoles($idUsuario){
        try{
			$stm = $this->pdo->prepare("SELECT * FROM Roles INNER JOIN RolUsuario ON Roles.idRol = RolUsuario.idRol WHERE RolUsuario.idUsuario = ?");
			$stm->execute(
				array(
                    $idUsuario
				)
			);
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ);
			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function obtenerCargadeTrabajoIndividual($idUsuario){
		try{
			$stm = $this->pdo->prepare("SELECT materias.NombreMateria, salones.NombreSalon, salones.IdSalon FROM cargatrabajo 
				INNER JOIN materias ON cargatrabajo.IdMateria = materias.IdMateria
				INNER JOIN grupos ON materias.IdMateria = grupos.IdMateria
				INNER JOIN salones ON grupos.IdSalon = salones.IdSalon
				WHERE cargatrabajo.IdUsuario = ?");
			$stm->execute(
				array(
                    $idUsuario
				)
			);
			$resultado = $stm->fetchAll(PDO::FETCH_OBJ);
			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>