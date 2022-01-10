<?php

abstract class FiguraGeometrica {
    abstract public function dibuja ();
    abstract public function area();
    private string $color;
}

class Cuadrado extends FiguraGeometrica {
    public function dibuja () {
    }
    public function area () {
    }
}

class Triangulo extends FiguraGeometrica {
    public function dibuja () {
    }
    public function area () {
    }
}

class Circulo extends FiguraGeometrica {
    public function dibuja () {   
    }
    public function area () {
    }
}

?>