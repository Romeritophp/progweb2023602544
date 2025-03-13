<?php 
class Persona {
    private $nombre;
    private $fecNac;
    private $telefono;

    public function __construct($nombre, $fecNac, $telefono) {
        $this->nombre = $nombre;
        $this->fecNac = $fecNac;
        $this->telefono = $telefono;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($value) {
        $this->nombre = $value;
    }
    
    public function getFecNac() {
        return $this->fecNac;
    }
    public function setFecNac($value) {
        $this->fecNac = $value;
    }

    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($value) {
        $this->telefono = $value;
    }
       // Método para calcular la edad
    public function getEdad() {
        $fechaNacimiento = new DateTime($this->fecNac);// Convierte la fecha de nacimiento en un objeto DateTime
        $hoy = new DateTime();// Obtiene la fecha actual
        $edad = $hoy->diff($fechaNacimiento)->y; // Calcula la diferencia en años
        return $edad;// Devuelve la edad calculada
    }
}

//El cierre de php no se incluye porque el
//  scrip debe ser incluido en otro
