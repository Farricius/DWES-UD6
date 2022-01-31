<?php

class Dimensiones
{
    private float $alto;
    private float $ancho;
    private float $largo;

    //constructor
    function __construct($alto, $ancho, $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }


    //getter y setter (metodos especiales)
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($variable, $valor)
    {
        // Comprobaciones del Setter, si es Float y mayor que 1.
        if (is_float($valor)) {
            if ($valor > 1) {
                $this->$variable = $valor;
            } else {
                echo "Valor menor a 1 no es válido";
                die();
            }
        } else {
            echo "El valor; $variable debe ser float";
            die();
        }
    }

    function __toString()
    {

        return "alto=" . $this->alto . " ancho= " . $this->ancho . " largo= " . $this->largo;
    }
}

// $pruebaaa = new Dimensiones(1, -2, 3);

// $pruebaaa->__toString();

// echo $pruebaaa;
