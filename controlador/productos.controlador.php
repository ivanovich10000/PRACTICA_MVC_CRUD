<?php
require_once '../modelo/productos.php';

class productosControlador{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new producto();
    }
    
    public function Index(){
        require_once '../vista/productos/productos.php';  
    }
    
    public function Crud(){
        $producto = new producto();
        
        if(isset($_REQUEST['id'])){
            $producto = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'vista/productos/productos-editar.php';  
    }
    
    public function Guardar(){
        $producto = new producto();
        
        $producto->id      = $_REQUEST['id'];
        $producto->Detalle = $_REQUEST['Detalle'];
        $producto->Precio  = $_REQUEST['Precio'];
        $producto->Fecha   = $_REQUEST['Fecha'];  

        $producto->id > 0 
            ? $this->model->Actualizar($producto)
            : $this->model->Registrar($producto);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}