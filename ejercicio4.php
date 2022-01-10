<?php

class Vivienda
{
    private string $tipoVivienda;
    private float $valorMercado; // decimales

    public function __construct($tipoVivienda, $valorMercado)
    {
        $this->tipoVivienda = $tipoVivienda;
        $this->valorMercado = $valorMercado;
    }

    public function __get($atributo)
    {
        return "El valor de atributo es: " . $this->$atributo;
    }

    public function __set($atributo, $valor)
    {

        switch ($atributo) {

            case "tipoVivienda":
                $this->$atributo = $valor;
                break;

            case "valorMercado":
                if ($valor < 0)
                    echo "El valor monetario es negativo";
                else
                    $this->$atributo = $valor;
                break;
        }
    }
}

$miCasa = new Vivienda("casa de Pepito", 2);

echo $miCasa->tipoVivienda . "<br>";
echo $miCasa->valorMercado . "<br>";

$miCasa->tipoVivienda = "piso de Pepito"; // Cambio!

echo $miCasa->valorMercado . "<br>";

$miCasa->valorMercado = -500; // Salta el if (message)

?>

<!-- Desarrolla el código PHP necesario para implementar la clase Vivienda que contendrá 2 atributos 
(tipoVivienda que será una cadena de texto y valorMercado que será un número con decimales).
Implementa los métodos especiales __get() y __set(). Pruebalo.
Modifica el método __set() de forma que si el parámetro a modificar es el valorMercado
y el nuevo valor indicado es menor que cero, no se actualice. Utiliza la estructura switch. -->