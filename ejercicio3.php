<?php 

include "ejercicio1.php";

class Trabajador extends Persona
{
    private $nombreEmpresa;

    function __construct($nombre, $dni, $sexo, $peso, $altura, $nombreEmpresa)
    {
        parent::__construct($nombre, $dni, $sexo, $peso, $altura);
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function mostrar()
    {
        echo "nombre empresa: " . $this->nombreEmpresa; //return tieso
    }

    function mostrarCompleto()
    {
        echo parent::mostrar() . "nombre empresa: " . $this->nombreEmpresa;
    }

    function __toString()
    {
        
    }
}

?> 

<!-- Utiliza el código del ejercicio 2 para:
Crea el método especial __toString en la clase Persona de forma que devuelva una cadena con todos los atributos.
Crea un objeto Persona y mostrarlo con echo.
Crea el método especial __toString en la clase Trabajador de forma que llame al método __toString de Persona y concatene la empresa del trabajador.
Crea un objeto Trabajador y muestralo con echo. -->
