
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-5">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal" style="color: #0063cc">Actuaizar Libro </h1>
      <label for="inputEmail" class="sr-only">Id</label>
      <input type="text" min="1" id="inputEmail" name="id" class="form-control" placeholder="ID" required autofocus>
      <label for="inputEmail" class="sr-only">Nombre del Libro</label>
      <input type="text" id="inputEmail" name="nombre" class="form-control" placeholder="Nombre del Libro" required autofocus>
      <label for="inputPassword" class="sr-only">Precio</label>
      <input type="number" id="inputPassword" name="precio" class="form-control" placeholder="Precio del Libro" required>
      <div class="checkbox mb-3">
      </div>
      
      <label for="inputEmail" class="sr-only">Autor del Libro</label>
      <input type="text" id="inputEmail" name="autor" class="form-control" placeholder="Autor del Libro" required autofocus>
      <label for="inputEmail" class="sr-only">Editorial</label>
      <input type="text" id="inputEmail" name="editorial" class="form-control" placeholder="Editorial" required autofocus>
      <label for="inputPassword" class="sr-only">Numero de Paginas</label>
      <input type="number"  id="inputPassword" name="npaginas" class="form-control" placeholder="Numero de Paginas" required>
      <div class="checkbox mb-3">
      </div>
      <label for="inputEmail" class="sr-only">Categoria</label>
      <input type="text" id="inputEmail" name="categoria" class="form-control" placeholder="Categoria" required autofocus>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="ingresar">Insertar</button>
        </div>
    </div>
</div>

<script src="Models/Public/js/pass.js"> </script>


<?php
require_once ('Views/Admin/Content/Libros/Metod.php');
require_once ('Models/Conexion/Conexion.php');
if(isset($_POST['ingresar'])){
  if(strlen($_POST["id"]) >= 1 && strlen($_POST["nombre"]) >=1 && strlen($_POST["precio"]) >= 1 &&
  strlen($_POST["autor"]) >= 1 && strlen($_POST["editorial"]) >=1 && strlen($_POST["npaginas"]) >=1  && strlen($_POST['categoria']) >= 1){
    $id = $_POST["id"];
    $db = new Conexion();
    $query= $db->conexion()->prepare("SELECT * FROM `libros` WHERE id_libro =:id");
    $query->execute(['id'=>$id]);
    $row = $query->fetch(PDO::FETCH_NUM); 
    if($row){
        $array = array(
            "id"=> trim($_POST["id"]),
            "nombre" => trim($_POST["nombre"]),
            "precio"=> trim($_POST["precio"]),
            "autor"=> trim($_POST["autor"]),
            "editorial"=> trim($_POST["editorial"]),
            "npaginas"=> trim($_POST["npaginas"]),
            "categoria"=> trim($_POST['categoria'])
          );
          actualizar($array);
         echo '<h1 class="h2 text-primary text-center"> Libro actualizado <h1>';
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

