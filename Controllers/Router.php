<?php
/* Aqui va la clse controladora la encacagada de enviar las <vistas></vistas*/
require_once ('ViewController.php');

class Router{
    public $rute;
    public function __construct($rute)
    {
        $this->rute = $rute ;
        $ruta = new ViewController();
        match($this->rute){
            "Books" => $ruta->load_view_books('header','main'),
            "Admin" => $ruta->load_view_admin('header','login'),
            "index"=>$ruta->load_view_general_books('header','main','footer','main'),
            "Carrito" => $ruta->load_view_carrito('header','carrito'),
            "Ingresar" => $ruta->load_view_login('header','login'),
            "Registro" => $ruta->load_view_regis('header','Regis'),
            "Asistencia"=> $ruta->load_view_asis('header','asis'),
            "Sistema" => $ruta->load_view_admin_cont('content'),
            "insert" => $ruta->load_view_admin_cont_books('content','insert'),
            "view" => $ruta->load_view_admin_cont_books('content','view'),
            "up" => $ruta->load_view_admin_cont_books('content','up'),
            "delete" => $ruta->load_view_admin_cont_books('content','delete'),
            default =>$ruta->load_view_general_books('header','main','footer','main'),
             // $ruta->load_view_error('error404')
        };
    }
}
?>