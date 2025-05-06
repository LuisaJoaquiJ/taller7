<?php

namespace App\Models;

class Docente extends Persona {
    private $materia;

    public function __construct($nombre, $edad, $materia) {
        parent::__construct($nombre, $edad);
        $this->materia = $materia;
    }

    public function obtenerInformacion() {
        return parent::obtenerInformacion() . ", Materia: {$this->materia}";
    }
}
