<?php
require_once "modelo.php";

class controlador{

 public function consultardatos($documento){
   $repuesta =modelo::consultardatos($documento);
   return $repuesta;
 }
}

 if(isset($_POST["opcion"])){
    if ($_POST["opcion"] == "listar"){
    $documento =  (isset($_POST['documento'])) ? $_POST['documento'] : null;
    $respuesta  = new controlador();
    $respuesta = $respuesta->consultardatos($documento);
    if ($respuesta === false) {
      echo 1; 
    }else {
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
    }
 }
?>