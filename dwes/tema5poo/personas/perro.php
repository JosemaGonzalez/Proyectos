<?php
class Perro
{

	public function __construct($nombre, $fechaNac,$color,$raza)
	{
		$this->_nombre = $nombre;
		$this->_fechaNac = $fechaNac;
		$this->_color = $color;
		$this->_imagen = $imagen;
		$this->_raza = $raza;
		$this->_animo = 5;
		$this->_salud = 5;
		$this->_destreza = 1;
	}

	public function getNombre()
	{
		return $this->_nombre;
	}
	public function getFechaNac()
	{
		return $this->_fechaNac;
	}
	public function getColor()
	{
		return $this->_color;
	}
	public function getImagen()
	{
		return $this->_imagen;
	}
	public function getRaza()
	{
		return $this->_raza;
	}
	public function getAnimo()
	{
		return $this->_animo;
	}
	public function getSalud()
	{
		return $this->_salud;
	}
	public function getDestreza()
	{
		return $this->_destreza;
	}
	public function comer()
	{
		$this->_salud--;
		$this->_animo++;
		return 'He comido';
	}
	public function adiestrar()
	{
		$this->_salud--;
		$this->_animo--;
		$this->_destreza++;
		return 'Estoy entrenando';
	}
	public function dormir()
	{
		$this->_salud++;
		$this->_animo++;
		$this->_destreza--;
		return 'Voy a dormir';
		sleep(2);
	}
	public function jugar()
	{
		$this->_salud--;
		$this->_animo++;
		return 'Estoy jugando';
	}
}
?>
