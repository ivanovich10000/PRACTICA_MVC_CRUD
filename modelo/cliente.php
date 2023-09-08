<?php
class cliente
{
	private $pdo;
    
    public $id;
    public $CI;
    public $Nombre;  
    public $ApellidoP;
    public $ApellidoM;
    public $Correo;
    public $Telefono;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM cliente WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM cliente WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE cliente SET 
                            ci        = ?, 
                            nombre    = ?,
                            apellidoP = ?,
                            apellidoM = ?,
                            correo    = ?,
                            telefono  = ?,

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->CI,                        
                        $data->Nombre,
                        $data->ApellidoP,
                        $data->ApellidoM,
                        $data->Correo,
                        $data->Telefono
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try 
		{
		$sql = "INSERT INTO cliente (ci,nombre,apellidoP,apellidoM,correo,telefono) 
		        VALUES (?,?, ?,?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->CI,
                    $data->Nombre, 
                    $data->ApellidoP, 
                    $data->ApellidoM,  
                    $data->Correo,  
                    $data->Telefono   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}