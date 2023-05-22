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
<?