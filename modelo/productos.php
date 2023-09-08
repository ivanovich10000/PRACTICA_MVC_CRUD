<?php
class producto
{
	private $pdo;
    
    public $id;
    public $Detalle;
    public $Precio;  
    public $Fecha;

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

			$stm = $this->pdo->prepare("SELECT * FROM productos");
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
			          ->prepare("SELECT * FROM productos WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM productos WHERE id = ?");			          

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
			$sql = "UPDATE productos SET 
                            detalle = ?, 
                            precio  = ?,
                            fecha   = ?,
	
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Detalle,                        
                        $data->Precio,
                        $data->Fecha,
                        $data->id
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
		$sql = "INSERT INTO productos (detalle,precio,fecha) 
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Detalle,
                    $data->Precio, 
                    $data->Fecha  
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}