<?php
/*Aqui va la clase encargada de mostrar las vista*/
class ViewController{
    public static $patch = "./Views/";
    public  $patch_public = array(
        "General" => "General/",
        "Client" => "Client/",
        "Admin" => "Admin/",
        "Error"=> "Error/"
    );
   public  $patch_views = array(
        "Asis" => "Asis/",
        "Books"=> "Books/",
        "Papel" => "Papel/",
        "Promo"=> "Promo/",
        "Login" => "Login/",
        "Carrito" => "Carrito/",
        "Sistema" => "Content/"
    );
    
    public function load_view_general_books($ruta0,$ruta1,$ruta2,){
        require_once (self::$patch.$this->patch_public["General"].$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["General"].$ruta1.'.php');
        require_once (self::$patch.$this->patch_public["General"].$ruta2.'.php');
         
    }
    public function load_view_books($ruta0,$rute1){
      require_once (self::$patch.$this->patch_public["General"].$ruta0.'.php');
      require_once (self::$patch.$this->patch_public["Client"].$this->patch_views["Books"].$rute1.'.php');
    }
    public function load_view_admin($ruta0,$rute1){
        require_once (self::$patch.$this->patch_public["Admin"].$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["Admin"].$rute1.'.php');
      }
      public function load_view_admin_cont($ruta0){
        require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta0.'.php');
        //require_once (self::$patch.$this->patch_public["Admin"].$rute1.'.php');
      }
      public function load_view_admin_cont_books($ruta0, $ruta1){
        if($ruta1 == "insert" && $ruta0 == 'content') {
        require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta1.'.php');
        
        }else
        if($ruta1 == "view"  && $ruta0 == 'content') {
          require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta0.'.php');
          require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta1.'.php');
          }
         else if($ruta1 == "up"  && $ruta0 == 'content') {
            require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta0.'.php');
            require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta1.'.php');
            }
           else if($ruta1 == "delete"  && $ruta0 == 'content') {
              require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta0.'.php');
              require_once (self::$patch.$this->patch_public["Admin"].$this->patch_views["Sistema"] .$ruta1.'.php');
              }
      }
    public function load_view_asis($ruta0,$rute1){
        require_once (self::$patch.$this->patch_public["General"].$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["Client"].$this->patch_views["Asis"].$rute1.'.php');
      }
    public function load_view_carrito($ruta0, $ruta1){
        require_once (self::$patch.$this->patch_public["Client"].$this->patch_views["Carrito"].$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["Client"].$this->patch_views["Carrito"].$ruta1.'.php');
      }
      public function load_view_login($ruta0, $ruta1){
        require_once (self::$patch.$this->patch_public["General"].$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["Client"].$this->patch_views["Login"].$ruta1.'.php');
      }
      public function load_view_regis($ruta0, $ruta1){
        require_once (self::$patch.$this->patch_public["General"].$ruta0.'.php');
        require_once (self::$patch.$this->patch_public["Client"].$this->patch_views["Login"].$ruta1.'.php');
      }
    public function load_view_error($ruta0){
        require_once (self::$patch.$this->patch_public["Error"].$ruta0.'.php');
      }


}
?>