<?php
/*Aqui va la conexion a la base de datos*/
class Conexion{
    public $db;
    public function conexion()
    {
        try{
            $this->db = new PDO('mysql:host=localhost;dbname='.DB,USER,PASS,
        [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        }
        catch(PDOException $e){
            echo 'error al conectarse'.$e->getMessage();
        }

        return $this->db;
    }

    public function saveClient($array= array()){
        foreach($array as $value0){
            $a = $value0["Nombre"];
            $b = $value0["Correo"];
            $c = $value0["Clave"];
        }
        try{
            $query = "INSERT INTO `usuarios`(`Id_user`, `Nombre`, `Correo`, `Clave`) VALUES ('','$a','$b','$c')";
            $data = $this->db->prepare($query);
            $data =$data->execute();
            
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public function saveBooks($array= array()){
        foreach($array as $value0){
            $i = $value0["id"];
            $a = $value0["nombre"];
            $b = $value0["precio" ];
            $c = $value0[ "autor" ];
            $d = $value0[ "editorial"];
            $h = $value0["npaginas"];
            $f = $value0["categoria" ];
        }
        try{
            $query = 
            "INSERT INTO `libros` (`id_libro`, `nombre_libro`, `precio`, `autor`, `editorial`, `n_pagias`, `categoria_id`)
                         VALUES ('$i', '$a', '$b', '$c', '$d', '$h', '$f')";
            $data = $this->db->prepare($query);
            $data =$data->execute();
            
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public function saveBooksactualizar($array= array()){
        foreach($array as $value0){
            $i = $value0["id"];
            $a = $value0["nombre"];
            $b = $value0["precio" ];
            $c = $value0[ "autor" ];
            $d = $value0[ "editorial"];
            $h = $value0["npaginas"];
            $f = $value0["categoria" ];
        }
        try{
            $query = 

            "UPDATE `libros` SET `nombre_libro`='$a',`precio`='$b',`autor`='$c',`editorial`='$d',`n_pagias`='$h',`categoria_id`='$f' WHERE id_libro = '$i'";
                        
            $data = $this->db->prepare($query);
            $data =$data->execute();
            
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
    public function eliminarbook($id){
        
        try{
            $query = "DELETE FROM `libros` WHERE `libros`.`id_libro` = '$id'";
            $data = $this->db->prepare($query);
            $data =$data->execute();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}
?>
