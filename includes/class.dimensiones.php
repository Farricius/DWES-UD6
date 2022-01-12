<?php
class Dimensiones
{
    private float $alto;
    private float $ancho;
    private float $largo;

    // function getAlto()
    // {
    //     return $this->alto;
    // }

    // public function setAlto($alto)
    // {
    //     $this->alto = $alto;
    // }

    // function getAncho()
    // {
    //     return $this->ancho;
    // }

    // function setAncho($ancho)
    // {
    //     $this->ancho = $ancho;
    // }

    // function getLargo()
    // {
    //     return $this->largo;
    // }

    // function setLargo($largo)
    // {
    //     $this->largo = $largo;
    // }

    // public function __get($atributo)
    // {
    //     return $this->$atributo;
    // }

    public function __get($atributo)
    {
        return "El valor de atributo es: " . $this->$atributo; //ex
    }

    public function __set($atributo, $valor)
    {
        switch ($atributo) {

            case "alto":
                if ($valor > 1 && is_float($valor))
                    $this->$atributo = $valor;
                else
                    echo "Valor ALTO debe ser 1 o más";
                break;

            case "ancho":
                if ($valor > 1 && is_float($valor))
                    $this->$atributo = $valor;
                else
                    echo "Valor ANCHO debe ser 1 o más";
                break;

            case "largo":
                if ($valor > 1 && is_float($valor))
                    $this->$atributo = $valor;
                else
                    echo "Valor LARGO debe ser 1 o más";
                break;
        }
    }

    public function __construct($alto, $ancho, $largo)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
        $this->largo = $largo;
    }

    public function __toString()
    {
        //return "Alto=<"getAlto()">, ancho=<"getAncho()">, largo=<"getAncho()">";
        return "Alto = <$this->alto>, Ancho = <$this->ancho>, Largo = <$this->largo>";
    }
}
