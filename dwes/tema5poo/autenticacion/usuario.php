<?php

class Usuario
{

	function __construct($usuario,$password)
	{
		$this->usuario = $usuario;
		$this->password = $password;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}
	public function getPass()
	{
		return $this->password;
	}
}

?>
