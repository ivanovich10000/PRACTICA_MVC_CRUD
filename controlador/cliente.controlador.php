<?php
require_once '../modelo/cliente.php';//Requerimos modelo cliente.

class clienteControlador{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new cliente();
    }
    
    public function Index(){
        require_once '../vista/cliente/cliente.php';  
    }
    
    public function Crud(){
        $cliente = new cliente();
        
        if(isset($_REQUEST['id'])){
            $cliente = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'vista/cliente/cliente-editar.php';  
    }
    
    public function Guardar(){
        $cliente = new cliente();
        
        $cliente->id        = $_REQUEST['id'];
        $cliente->CI        = $_REQUEST['CI'];
        $cliente->Nombre    = $_REQUEST['Nombre'];
        $cliente->ApellidoP = $_REQUEST['ApellidoP'];  
        $cliente->ApellidoM = $_REQUEST['ApellidoM'];
        $cliente->Correo    = $_REQUEST['Correo'];  
        $cliente->Telefono  = $_REQUEST['Telefono'];    

        $producto->id > 0 
            ? $this->model->Actualizar($cliente)
            : $this->model->Registrar($cliente);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}