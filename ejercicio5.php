<?php

class EquipoFutbol implements IEquipoFutbol, ICampeonato
{
    // ATRIBUTOS:
    private int $numeroJugadores;
    private string $nombreEquipo;
    private string $nombreCampeonato;

    // CONSTRUCTOR:
    public function __construct($numeroJugadores, $nombreEquipo, $nombreCampeonato) {
        $this->numeroJugadores = $numeroJugadores;
        $this->nombreEquipo = $nombreEquipo;
        $this->nombreCampeonato = $nombreCampeonato;
    }

    // MÉTODOS + INTERFACES:
    function getNumeroJugadores() {
        return $this->numeroJugadores;
    }

    function juegaPartido() {
        echo $this->nombreEquipo . " VICTORIA";
    }

    function getNombreCampeonato() {
        return $this->nombreCampeonato;
    }
}

interface IEquipoFutbol {
    public function getNumeroJugadores();
    public function juegaPartido();
}

interface ICampeonato {
    public function getNombreCampeonato();
}

$equipo = new EquipoFutbol (30, "Betis", "Champions");

// COMPROBACIÓN INSTANCE OF:

echo "Es equipo instancia de ICampeonato?";
var_dump ($equipo instanceof ICampeonato);
echo "Es equipo instancia de IEquipoFutbol?";
var_dump ($equipo instanceof IEquipoFutbol);
?>