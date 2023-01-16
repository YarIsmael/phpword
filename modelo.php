<?php
require_once "conexion.php" ;

class modelo{

static public function consultardatos($documento){

    $x=Conexion::conectar()->prepare("SELECT tbl_usuario_DOCUMENTO as documento, tbl_usuario_DOCUMENTO_TIPO as documento_tipo, 
    tbl_usuario_NOMBRES as nombre, tbl_usuario_APELLIDOS as apellido, tbl_usuario_PROGRAMA as programa,
    tbl_usuario_PROGRAMA_TIPO as programa_tipo, tbl_usuario_PROGRAMA_FICHA as programa_ficha
    FROM tbl_usuarios where tbl_usuario_DOCUMENTO=:documento");
    $x->bindParam(":documento", $documento, PDO::PARAM_INT);
    if( $x->execute()){
        return $x -> fetchAll(PDO::FETCH_ASSOC);
    }
    else{
      return false;
    }
}

}
?>
