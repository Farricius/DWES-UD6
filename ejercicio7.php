<?php

abstract class FiguraGeometrica
{
    abstract public function dibuja();
    abstract public function area();
    protected string $color; // No son totalmente obligatorios.
}

class Cuadrado extends FiguraGeometrica
{
    protected float $lado;

    public function __construct($color, $lado)
    {
        $this->color = $color;
        $this->lado = $lado;
    }

    public function dibuja()
    {
        echo "Es un cuadrado de color " . $this->color;
    }
    public function area()
    {
        return "Área del cuadrado es " . ($this->lado * $this->lado);
    }
}

class Triangulo extends FiguraGeometrica
{
    protected float $base;
    protected float $altura;

    public function __construct($color, $base, $altura)
    {
        $this->color = $color;
        $this->base = $base;
        $this->altura = $altura;
    }

    public function dibuja()
    {
        echo "Es un triángulo de color " . $this->color;
    }
    public function area()
    {
        return "Área del triángulo es " . ($this->base * $this->altura);
    }
}

class Circulo extends FiguraGeometrica
{
    protected float $radio;

    public function __construct($color, $radio)
    {
        $this->color = $color;
        $this->radio = $radio;
    }

    public function dibuja()
    {
        echo "Es un círculo de color " . $this->color;
    }
    public function area()
    {
        return "Área del círculo es " . (3.14 * $this->radio * $this->radio);
    }
}

// NEW OBJETOS Y FUNCIONES TEST
$cuadradoPrueba = new Cuadrado("azul", 10);
$trianguloPrueba = new Triangulo("rojo", 10, 15);
$circuloPrueba = new Circulo("verde", 20.50);

echo $cuadradoPrueba->area();
echo "<br>";
echo $trianguloPrueba->area();
echo "<br>";
echo $circuloPrueba->area();
echo "<br>";
echo $cuadradoPrueba->dibuja();
echo "<br>";
echo $trianguloPrueba->dibuja();
echo "<br>";
echo $circuloPrueba->dibuja();


?>

<!-- Desarrolla el código PHP necesario para llevar a cabo la siguiente jerarquía de clases:
FiguraGeometrica y sus métodos son abstractos.
FiguraGeometrica incluye un atributo que es el color.
El método Dibuja muestra por pantalla el tipo de figura y el color.
El método Area devuelve el área de la figura geométrica, añade los atributos necesarios a cada clase. 
(Por ejemplo para el cuadrado tendremos que tenemos el tamaño del lado).
Haz pruebas para comprobar que todo funciona correctamente y que los objetos creados son instancias de FiguraGeometrica.

Guárdalo como ejercicio7.php -->