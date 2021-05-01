
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">

        </div>
        <div class="col-sm-12 col-md-6 col-lg-5">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal" style="color: #0063cc">Registrate</h1>
      <label for="inputEmail" class="sr-only">Nombre</label>
      <input type="text" id="inputEmail" name="Nombre" class="form-control" placeholder="Nombre" required autofocus>
      <label for="inputEmail" class="sr-only">Correo</label>
      <input type="email" id="inputEmail" name="Correo" class="form-control" placeholder="Correo" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" min="8" id="inputPassword" name="Clave" class="form-control" placeholder="Clave" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="ingresar">Registrar</button>
        </div>
    </div>
</div>

<script src="Models/Public/js/pass.js"> </script>


<?php

require_once ('Views/Client/Login/Cliente/Metod.php');
if(isset($_POST['ingresar'])){
  if(strlen($_POST['Nombre']) > 1 && strlen($_POST['Clave']) >= 8 && strlen($_POST['Correo']) > 1){
    $array = array(
      "Nombre"=> trim($_POST['Nombre']),
      "Correo"=> trim($_POST['Correo']),
      "Clave"=> trim($_POST['Clave'])
    );
    echo "<script>alert('Usuario Registrado Correctamente')</script>";
    save($array);
  }else{
    echo "<script>alert('La contraseña debe tener al menos 8 caracteres')</script>";
  }
}else{

}


?>