<!doctype html>
<html lang="es-ES">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="Models/Public/css/bootstrap.min.css" rel="stylesheet">
      <link href="Models/Public/css/style.css" rel="stylesheet">
    <title>San Pedro</title>
  </head>
  <body class="bg-light">
      <div class="container-fluid py-4">
        <div class="container">
            <div class="row">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Id_libro</th>
							<th>Nombre del Libro</th>
							<th>Precio</th>
                            <th>Autor</th>
							<th>Editorial</th>
							<th>Numnero de Paginas</th>
                            <th>Categoria</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                    require_once ("Models/Conexion/Conexion.php");
                     $db = new Conexion();
                    $query= $db->conexion()->prepare("SELECT * FROM `libros`");
                    $query->execute();
                    $row = $query->fetch(PDO::FETCH_ASSOC);

                    $conexx = mysqli_connect("localhost","root","","libreria");
                    $consulta = "SELECT * FROM libros";
                    $row = mysqli_query($conexx,$consulta);

                    if($row){
                        while($value = $row->fetch_array()){

                            $Id =$value['id_libro'];
                            $nombre =$value['nombre_libro'];
                            $precio =$value['precio'];
                            $autor =$value['autor'];
                            $edi =$value['editorial'];
                            $npag =$value['n_pagias'];
                            $cat =$value['categoria_id'];
            ?>
   
    <tr>
        <td><?php echo $Id; ?></td>
        <td><?php echo $nombre; ?></td>
        <td><?php echo  $precio; ?></td>
        <td><?php echo $autor; ?></td>
        <td><?php echo $edi; ?></td>
        <td><?php echo $npag; ?></td>
        <td><?php echo $cat; ?></td>
          <?php
            
        }
    }

?>
						
					</tbody>
				</table>
        </div>
        </div>
        </div>