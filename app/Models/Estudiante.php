<?php

namespace App\Models;

class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function obtenerInformacion() {
        return parent::obtenerInformacion() . ", Carrera: {$this->carrera}";
    }
}
