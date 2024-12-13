<?php  
class Usuario{
	private $pdo;
    public $idSalon;
	public $nombreSalon;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Conexion::obtenerConexion();   
		}catch(Exception $e){
			header("Location: index.php?c=Sesion&a=ErrorConexion");
		}
	}

    public function obtenerSalon($idSalon){
		try{
			$stm = $this->pdo->prepare("SELECT * FROM Salones WHERE IdSalon = ?");
			$stm->execute(
				array(
                    $idSalon
				)
			);
			$resultado = $stm->fetch(PDO::FETCH_OBJ);
			return $resultado;
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function obtenerAlumnos($idSalon){
		try{
			$stm = $this->pdo->prepare("SELECT 
                Alumnos.IdAlumno, Alumnos.NombreAlumno, Alumnos.Apellidos, Alumnos.Matricula, Salones.NombreSalon
                FROM Alumnos 
                INNER JOIN Salones ON Alumnos.IdSalon = Salones.IdSalon            
                WHERE Salones.IdSalon = ?
                ORDER BY Alumnos.NombreAlumno");
			$stm->execute(
				array(
                    $idSalon
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