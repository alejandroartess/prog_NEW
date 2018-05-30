<?php
namespace florida;
class User {

    var $id;
    var $nombre;
    var $apellidos;
    var $edad;
    var $curso;
    var $puntuacion;

    function __construct($nombre,$apellidos,$edad,$curso,$puntuacion){
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->edad=$edad;
        $this->curso=$curso;
        $this->puntuacion=$puntuacion;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     *
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     *
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     *
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;


    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     *
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     *
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

    }

    /**
     * Get the value of puntuacion
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * Set the value of puntuacion
     *
     *
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

    }
}
?>
