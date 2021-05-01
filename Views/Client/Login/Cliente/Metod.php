<?php
    /*Aqui va la clase de las funciones de los clientes*/
    require_once ('Cliente.php');

    function save($array = array())
    {
        $datos = new Cliente(nombre: $array["Nombre"],correo:$array["Correo"],clave: $array["Clave"]);
        $datos->saveClient();
    }
?>