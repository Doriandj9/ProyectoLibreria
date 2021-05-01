
<div class="container-fluid py-5">
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-1">
    </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal" style="color: #0063cc">Ingresar Libro</h1>
      <label for="inputEmail" class="sr-only">Id</label>
      <input type="text" min="1" id="inputEmail" name="id" class="form-control" placeholder="ID" required autofocus>
      <div class="checkbox mb-3">
      </div>
      <label for="inputEmail" class="sr-only">Nombre del Libro</label>
      <input type="text" id="inputEmail" name="nombre" class="form-control" placeholder="Nombre del Libro" required autofocus>
      <div class="checkbox mb-3">
      </div>
      <label for="inputPassword" class="sr-only">Precio</label>
      <input type="number" id="inputPassword" name="precio" class="form-control" placeholder="Precio del Libro" required>
      <div class="checkbox mb-3">
      </div>
      <label for="inputEmail" class="sr-only">Autor del Libro</label>
      <input type="text" id="inputEmail" name="autor" class="form-control" placeholder="Autor del Libro" required autofocus>
      <div class="checkbox mb-3">
      </div>
      <label for="inputEmail" class="sr-only">Editorial</label>
      <input type="text" id="inputEmail" name="editorial" class="form-control" placeholder="Editorial" required autofocus>
      <div class="checkbox mb-3">
      </div>
      <label for="inputPassword" class="sr-only">Numero de Paginas</label>
      <input type="number"  id="inputPassword" name="npaginas" class="form-control" placeholder="Numero de Paginas" required>
      <div class="checkbox mb-3">
      </div>
      <label for="inputEmail" class="sr-only">Categoria</label>
      <input type="text" id="inputEmail" name="categoria" class="form-control" placeholder="Id de la Categoria" required autofocus>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="ingresar">Insertar</button>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="container-fluid py-1">
            <div class="row">
        <h2> Datos de las Categorias </h2>
				<table class="table table-striped">
					<thead>
						<tr>
              <th>Id</th>
               <th>Nombre</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                    require_once ("Models/Conexion/Conexion.php");
                    $conexx = mysqli_connect("localhost","root","","libreria");
                    $consulta = "SELECT * FROM `categoria` WHERE 1";
                    $row = mysqli_query($conexx,$consulta);

                    if($row){
                        while($value = $row->fetch_array()){

                            $Id =$value['id_categoria'];
                            $nombre =$value['Nombre'];
            ?>
   
    <tr>
        <td><?php echo $Id; ?></td>
        <td><?php echo $nombre; ?></td>
          <?php
            
        }
    }

?>
						
					</tbody>
				</table>
        </div>
        </div>



<script src="Models/Public/js/pass.js"> </script>








<?php
require_once ('Views/Admin/Content/Libros/Metod.php');
if(isset($_POST['ingresar'])){
  if(strlen($_POST["id"]) >= 1 && strlen($_POST["nombre"]) >=1 && strlen($_POST["precio"]) >= 1 &&
  strlen($_POST["autor"]) >= 1 && strlen($_POST["editorial"]) >=1 && strlen($_POST["npaginas"]) >=1  && strlen($_POST['categoria']) >= 1){
    require_once ('Models/Conexion/Conexion.php');
      if(strlen($_POST["id"])){
        $id = $_POST["id"];
        $db = new Conexion();
        $query= $db->conexion()->prepare("SELECT * FROM `libros` WHERE id_libro =:id");
        $query->execute(['id'=>$id]);
        $row = $query->fetch(PDO::FETCH_NUM); 
        if($row){
             echo '<h1 class="h2 text-primary text-center"> Ya existe este id de libros ingrese otro <h1>';
             
          }
          else{ 
            $array = array(
              "id"=> trim($_POST["id"]),
              "nombre" => trim($_POST["nombre"]),
              "precio"=> trim($_POST["precio"]),
              "autor"=> trim($_POST["autor"]),
              "editorial"=> trim($_POST["editorial"]),
              "npaginas"=> trim($_POST["npaginas"]),
              "categoria"=> trim($_POST['categoria'])
            );
            guardar($array);
            echo '<h1 class="h2 text-primary text-center"> Libro Ingresado <h1>';
          }
       
      }else{
        echo "No ha ingresado todos los campos vuelva a intentarlo";
      }

  }else{
    echo "No ha ingresado todos los campos vuelva a intentarlo";
  }
}


?>

      </div>

    </div>
</div>


