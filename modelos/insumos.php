<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'conexion.php';

class Insumos extends Conexion {

    public $insu_id;
    public $insu_nombre;
    public $insu_cantidad;
    public $insu_marca;
    public $insu_proveedor;
    public $insu_precio;

}
public function __construct ($argumentos = [])
    {
        $this->insu_id = $argumentos ['insu_id'] ?? null;
        $this->insu_nombre = $argumentos ['insu_nombre'] ?? '';
        $this->insu_cantidad = $argumentos ['insu_cantidad'] ?? '';
        $this->insu_marca = $argumentos ['insu_marca'] ?? '';
        $this->insu_proveedor = $argumentos ['insu_proveedor'] ?? '';
        $this->insu_precio = $argumentos ['insu_precio'] ?? '';

    }   

    public function guardar (){
        $sql = "INSERT INTO insumos(insu_nombre, insu_cantidad, insu_marca, insu_proveedor, insu_precio) 
        values ('$this->insu_nombre', '$this->insu_cantidad', '$this->insu_marca', '$this->insu_proveedor', '$this->insu_precio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }  
<?