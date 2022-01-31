<?php

class Cine extends LocalComercial
{
    private string $aforoSala; // mayor a 0 luego

    public function __toString()
    {
        return "<p><datos del local comercial></p><p>Aforo:  <$this->aforoSala> <br></p>><br></p>";
    }

    public function __construct(string $ciudad, string $calle, int $numeroDePlantas, Dimensiones $dimensiones, string $social, string $numeroLicencia, int $aforoSala)
    {
        parent::__construct($ciudad, $calle, $numeroDePlantas, $dimensiones, $social, $numeroLicencia);

        if (is_int($aforoSala) && $aforoSala > 0)
            $this->aforoSala = $aforoSala;
        else {
            echo "Error número.";
            die();
        }
    }
}


?>









<!-- La clase Cine que heredará de LocalComercial: (class.cine.php)
Atributo privado aforoSala (entero mayor que 0).
Método __toString() que compondrá una cadena con las dimensiones de la siguiente forma:
<p><datos del local comercial></p><p>Aforo: <valor><br></p>
Comprobar en el constructor que el valor del aforo sea un entero mayor que cero. 
De no cumplirse en alguno de los casos mostraremos un error y terminaremos la ejecución. -->