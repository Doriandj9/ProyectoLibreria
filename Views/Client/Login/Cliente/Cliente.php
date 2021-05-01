<?php
require_once ('Models/Conexion/Conexion.php');

class Cliente{
    
    public function __construct(
        public $nombre,
        public $correo,
        public $clave
    )
    {
    }
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getNombre(): string 
    {
        return $this->nombre;
    }
    public function setCorreo($correo): void
    {
        $this->correo= $correo;
    }
    public function getCorreo(): string
    {
        return $this->correo;
    }
    public function setClave($clave): void
    {
        $this->clave = $clave;
    }
    public function getClave(): string
    {
        return $this->clave;
    }


    /*Metodos de los clientes*/

    public function saveClient()
    {
        $conex = new Conexion();
        $data = $conex->conexion();
        $clients[] = array(
            "Nombre" => $this->nombre,
            "Correo" => $this->correo,
            "Clave" => $this->clave
        );
        $load = $conex->saveClient($clients);
    }
}
?>