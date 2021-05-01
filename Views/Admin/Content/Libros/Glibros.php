<?php
    require_once ("Models/Conexion/Conexion.php");
    class Glibros{
        public function __construct(public $id,public $nombre,public $precio,
        public $autor,public $editorial,public $n_paginas,public $categoria)
        {
        }
        public function setId($id):void
        {
            $this->id = $id;
        }
        public function setNombre($nombre):void
        {
            $this->nombre = $nombre;
        }
        public function setPrecio($precio):void
        {
            $this->precio = $precio;
        }
        public function setAutor($autor):void
        {
            $this->autor = $autor;
        }
        public function setEditorial($editorial):void
        {
            $this->editorial = $editorial;
        }
        public function setNpaginas($n_paginas):void
        {
            $this->n_paginas = $n_paginas;
        }
        public function setCategoria($categoria):void
        {
            $this->categoria = $categoria;
        }

        public function getId():int
        {
            return $this->id;
        }
        public function getNombre():string
        {   
            return $this->nombre;
        }
        public function getPrecio():int
        {
            return $this->precio;
        }
        public function getAutor():string
        {
            return $this->autor;
        }
        public function getEditorial():string
        {
            return $this->editorial;
        }
        public function getNpaginas():int
        {
            return $this->n_paginas;
        }
        public function getCategoria(): int
        {
            return $this->id;
        }
        
        public function guardar(){
            $conex = new Conexion();
            $data = $conex->conexion();
            $array[] = array(
                "id" => $this->id,
                "nombre" => $this->nombre,
                "precio" => $this->precio,
                "autor" => $this->autor,
                "editorial" => $this->editorial,
                "npaginas" => $this->n_paginas,
                "categoria" => $this->categoria

            );
            $dato = $conex->saveBooks($array);
            
        }
        public function actualizar(){
            $conex = new Conexion();
            $data = $conex->conexion();
            $array[] = array(
                "id" => $this->id,
                "nombre" => $this->nombre,
                "precio" => $this->precio,
                "autor" => $this->autor,
                "editorial" => $this->editorial,
                "npaginas" => $this->n_paginas,
                "categoria" => $this->categoria

            );
            $dato = $conex->saveBooksactualizar($array);
        }
        public function eliminarbook($id)
        {
            $conex = new Conexion();
            $data = $conex->conexion();
            $dato= $conex->eliminarbook($id);
           
        }

    }
?>