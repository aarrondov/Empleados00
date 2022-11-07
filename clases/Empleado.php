<?php

class Empleado
{
    private $nombre;
    private $apellido;
    private $numeroSeguridadSocial;

    /**
     * @param string $nombre "El nombre del empleado"
     * @param string $apellido
     * @param string $numeroSeguridadSocial
     */
    public function __construct($nombre, $apellido, $numeroSeguridadSocial)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return string
     */
    public function getNumeroSeguridadSocial()
    {
        return $this->numeroSeguridadSocial;
    }

    /**
     * @param string $numeroSeguridadSocial
     */
    public function setNumeroSeguridadSocial($numeroSeguridadSocial)
    {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    public function mostrar() {
        return "Empleado { 
            Nombre: ".$this->nombre.",<br>
            Apellido: ".$this->apellido.",<br>
            Numero SS: ".$this->numeroSeguridadSocial."<br>
            }";
    }

//    public abstract function ingresos();

}