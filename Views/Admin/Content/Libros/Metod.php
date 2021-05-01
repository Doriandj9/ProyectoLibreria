<?php
require_once ("Glibros.php");
 function guardar($array = array()){
    $libro = new Glibros(id:$array["id"],nombre:$array["nombre"],precio:$array["precio"],autor:$array["autor"]
    ,editorial:$array["editorial"],n_paginas:$array["npaginas"],categoria:$array["categoria"]);
    $libro->guardar();
}
function actualizar($array = array()){
    $libro = new Glibros(id:$array["id"],nombre:$array["nombre"],precio:$array["precio"],autor:$array["autor"]
    ,editorial:$array["editorial"],n_paginas:$array["npaginas"],categoria:$array["categoria"]);
    $libro->actualizar();
}
function eliminar($id){
    $libro = new Glibros('','','','','','','');
    $libro->eliminarbook($id);
}
?>