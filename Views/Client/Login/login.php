<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="Models/Public/Css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <div class="container-fluid py-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">

    <form class="form-signin" method="POST" action="" >
      <h1 class="h3 mb-3 font-weight-normal" style="color: #0063cc">Registrate</h1>
      <label for="inputEmail" class="sr-only">Correo</label>
      <input type="text" id="inputEmail" name="User" class="form-control" placeholder="Nombre" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Clave" required>
      <div class="checkbox mb-3">
      </div>
      <a href="Registro">
          <p class="text-primary">Registrarme</p>
      </a>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="ingresar" >Ingresar</button>
      
    </form>
    
        <?php
  require_once ('Models/Conexion/Conexion.php');
  require_once ('Controllers/Router.php');
  if(isset($_POST['ingresar'])){
    if(strlen($_POST['User']) > 2 && strlen($_POST['Password']) > 2){
      //session_start();
      $user = $_POST['User'];
      $pass = $_POST['Password'];
      $_SESSION['usuario'] = $user;
      $db = new Conexion(); 
      $query= $db->conexion()->prepare("SELECT * FROM `usuarios` WHERE  Correo = :Correo and Clave= :Clave");
      $query->execute(['Correo' => $user, 'Clave'=> $pass]);
      $row = $query->fetch(PDO::FETCH_NUM); 
      if($row){
        echo "<script>alert('Ha ingresado al Sistema');</script>";
      }
      else{ 
        ?> <h4 class="text-primary"> <abbr title="uno"> <?php echo $error = "!Error los datos no son correctos!";?> </abbr> </h4> 
        <?php
        echo "<script>alert('Debe Registrarse Primero');</script>";
      }
    }
  }
  else{
    
  }

?>





        
        </div>
    </div>
   
  </body>
</html>

