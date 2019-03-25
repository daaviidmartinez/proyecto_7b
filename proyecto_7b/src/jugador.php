<?php
/**
 * Jugador
 */
class Jugador
{
  private $conexion=null;
  private $id;
  private $nombre;
  private $apellidos;
  private $curso;
  function __construct()
  {
  }
  /*
  * Param entrada: array $_POST
  * Param salida: string con el $error
  *               - ""-> sin error
                  - "MSG"-> error encontrado
  */
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["id"])||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["curso"])){
      $error="";
    }elseif($post["id"]==""){
      $error="No has introducido el id";
    }elseif($post["nombre"]==""){
      $error="No has introducido el Nombre";
    }elseif($post["apellidos"]==""){
      $error="No has introducido los Apellidos";
    }elseif($post["curso"]==""){
        $error="No has introducido el Curso";
    }else {
      $error=false;
      $this->id=$post["id"];
      $this->nombre=$post["nombre"];
      $this->apellidos=$post["apellidos"];
      $this->curso=$post["curso"];
    }
    
    return $error;
  }
  public function conectar(){
    $this->conexion = new mysqli("localhost", "root", "", "juegos");
    if ($this->conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
    }
  }
  public function insertarJugador(){
    $consulta="INSERT INTO usuarios (id, nombre, apellidos, edad, curso, puntuacion)
                VALUES ($this->id, $this->nombre, $this->apellidos, NULL , $this->curso,NULL )";
    $this->conexion->query($consulta);
  }
}
 ?>
