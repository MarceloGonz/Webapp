<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class registroModel 
{
  public function ListRegistros() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select * from registrosnormal");
    $resSQL=$miconexion->verconsultaListadoRegistros();
    //$this->Disconnect();
    return $resSQL;
  }
  
}
