<?php
class Persona
{
	private $_edad;
	private $_nombre;
	public function __construct($nombre, $edad,$sexo, Perro $perro)
	{
		$this->_nombre = $nombre;
		$this->_edad = $edad;
		$this->_sexo = $sexo;
		$this->_perro = $perro;
	}
}
?>
