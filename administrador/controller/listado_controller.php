<?php
require_once "../models/RegistrosModels.php";

class Registros_controller{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;


	function user_controller($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}

    public function ListRegistros()
    {
        $registros = new registroModel();
        $ListadoResponse = $registros->ListRegistros();
    }

}
?>