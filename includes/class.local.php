<?php 
class Local {
    private string $ciudad;
    private string $calle;
    private int $numeroPlantas; // Limitar 1 a 10
    private Dimensiones $area; // inst
    private Dimensiones $dimensiones; // inst

public function __construct($ciudad, $calle, $numeroPlantas, $area, $dimensiones)
{
    $this->ciudad = $ciudad;
    $this->calle = $calle;
    $this->numeroPlantas = $numeroPlantas;
    $this->dimensiones = $dimensiones; // COMPROBAR QUE ES UNA INSTANCIA Y LLAMAR AL CONSTRUCTOR
    $this->area = $area;

}
}
