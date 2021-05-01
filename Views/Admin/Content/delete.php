<div class="container-fluid py-4">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-5">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal" style="color: #0063cc">Elimar un Libro</h1>
      <label for="inputEmail" class="sr-only">Id</label>
      <input type="text" min="1" id="inputEmail" name="id" class="form-control" placeholder="ID" required autofocus>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="ingresar">Eliminar</button>
        </div>
    </div>
</div>

<?php
require_once ('Views/Admin/Content/Libros/Metod.php');
require_once ('Models/Conexion/Conexion.php');
if(isset($_POST['ingresar'])){
  if(strlen($_POST["id"])){
    $id = $_POST["id"];
    $db = new Conexion();
    $query= $db->conexion()->prepare("SELECT * FROM `libros` WHERE id_libro =:id");
    $query->execute(['id'=>$id]);
    $row = $query->fetch(PDO::FETCH_NUM); 
    if($row){
          eliminar($id);
         echo '<h1 class="h2 text-primary text-center"> Libro eliminado <h1>';
         
      }
      else{ 
        ?> <h4 class="text-primary"> <abbr title="uno"> <?php echo $error = "!Error el id ingresado no existe!";?> </abbr> </h4> 
        <?php
        
      }
   
  }else{
    echo "No ha ingresado todos los campos vuelva a intentarlo";
  }
}else{

}
