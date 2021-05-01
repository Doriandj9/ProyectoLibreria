<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="Models/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container-fluid py-5">
    <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-3">

    </div>
        <div class="col-sm-12 col-md-6 col-lg-5">

    <form class="form-signin" method="POST" action="<?php $ruta ?>" >
      <h1 class="h3 mb-3 font-weight-normal" style="color: #0063cc">Registrate</h1>
      <label for="inputEmail" class="sr-only">Nombre</label>
      <input type="text" id="inputEmail" name="User" class="form-control" placeholder="Nombre" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Clave" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="ingresar" >Ingresar</button>
      
    </form>
        <div class="row py-4">
        <div class="col-sm-12 col-md-6 col-lg-3">






        <?php
  require_once ('Models/Conexion/Conexion.php');
  require_once ('Controllers/Router.php');
  if(isset($_POST['ingresar'])){
    if(strlen($_POST['User']) > 2 && strlen($_POST['Password']) > 2){
      session_start();
      $user = $_POST['User'];
      $pass = $_POST['Password'];
      $id = 1;
      $_SESSION['usuario'] = $user;
      $db = new Conexion();
      $query= $db->conexion()->prepare("SELECT * FROM `admin` WHERE id_admin =:id_admin and Nombre = :Nombre and clave= :clave");
      $query->execute(['id_admin'=>$id,'Nombre' => $user, 'clave'=> $pass]);
      $row = $query->fetch(PDO::FETCH_NUM); 
      if($row){
        ?>
        <p class="h2 text-primary"> Redirigete al Sistema </p>
        <a href="Sistema">
        <button class="btn btn-info">Preciona aqui</button>
        </a>
        <?php
      }
      else{ 
        ?> <h4 class="text-primary"> <abbr title="uno"> <?php echo $error = "!Error los datos no son correctos!";?> </abbr> </h4> 
        <?php
        
      }
    }
  }
  else{
    
  }

?>

