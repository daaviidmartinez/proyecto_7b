<?php
require "./src/jugador.php";
  $j=new Jugador();
  $error=$j->comprobarCampos($_POST);
  if(isset($error)){
      if($error===false){
        //NO HAY ERROR
        $j->conectar();
        $j->insertarJugador();
      }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
    if(isset($error)){
        if($error!="") echo "<h4>ERROR:$error</h4>";
    }
    ?>
 <form class="" action="registro.php" method="post">
      <div class="grupoFormItem">
        <label for="id"></label>
        <span class="formLabel">ID </span><br>
        <input type="text" name="id" value="">
      </div>
      <div class="grupoFormItem">
        <label for="nombre"></label>
        <span class="formLabel">Nombre </span><br>
        <input type="text" name="nombre" value="">
      </div>
      <div class="grupoFormItem">
        <label for="apellidos"></label>
        <span class="formLabel">Apellidos </span><br>
        <input type="text" name="apellidos" value="">
      </div>
      <div class="grupoFormItem">
        <label for="curso"></label>
        <span class="formLabel">Curso </span><br>
        <input type="text" name="curso" value="">
      </div>
      <br>
      <input type="submit" name="" value="ENVIAR">
    </form>
  </body>
</html>