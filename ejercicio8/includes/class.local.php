<?php

include_once 'class.dimensiones.php';

class Local
{
    private $ciudad;
    private $calle;
    private int $numeroPlantas; // Limitar 1 a 10
    private Dimensiones $dimensiones; // Instancia

    public function __construct($ciudad, $calle, $numeroPlantas, $dimensiones)
    {
        if (is_string($ciudad))
            $this->ciudad = $ciudad;
        else {
            echo "Ciudad debe ser texto";
            die();
        }

        if (is_string($calle))
            $this->calle = $calle;
        else {
            echo "Calle debe ser texto";
            die();
        }

        if (is_int($numeroPlantas) && $numeroPlantas > 1 && $numeroPlantas < 10)
            $this->numeroPlantas = $numeroPlantas;
        else {
            echo "Nº Plantas debe ser 1 a 10";
            die();
        }

        if ($dimensiones instanceof Dimensiones)
            $this->dimensiones = $dimensiones;
        else {
            echo "Dimensión error";
            die();
        }
    }

    public function getDimensiones()
    {
        return $this->dimensiones;
    }

    public function __set($variable, $valor)
    {
        $this->$variable = $valor;
    }
    
    public function __toString()
    {
        return "<p>Ciudad: $this->ciudad <br></p><p> Calle: $this->calle <br></p><p>Plantas: $this->numeroPlantas <br></p><p>Dimensiones: $this->dimensiones<br></p>";
    }

    public function __clone()
    {
        $this->dimensiones = clone $this->dimensiones;
    }
}

$dimention1 = new Dimensiones(42, 23, 231);

$local1 = new Local("Sevilla", "Calle Verde", 3, $dimention1);

var_dump($local1);

echo $local1;
echo "---";