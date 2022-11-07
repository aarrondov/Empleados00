<?php

abstract class Empleado
{
    private string $nombre;
    private string $apellido;
    private string $numeroSeguridadSocial;

    /**
     * @param string $nombre "El nombre del empleado"
     * @param string $apellido
     * @param string $numeroSeguridadSocial
     */
    public function __construct(string $nombre, string $apellido, string $numeroSeguridadSocial)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * @param string $apellido
     */
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return string
     */
    public function getNumeroSeguridadSocial(): string
    {
        return $this->numeroSeguridadSocial;
    }

    /**
     * @param string $numeroSeguridadSocial
     */
    public function setNumeroSeguridadSocial(string $numeroSeguridadSocial)
    {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    public function mostrar(): string
    {
        return "Empleado: nombre: ".$this->nombre.", apellido: ".$this->apellido.", numero SS: ".$this->numeroSeguridadSocial . " ";
    }

    public abstract function ingresos();

}