<?php

class LocalComercial extends Local
{
    private string $razonSocial;
    private string $numeroLicencia;

    public function __toString()
    {
        return "<p><datos del local></p><p>Razón Social: <$this->razonSocial><br></p><p>Número de Licencia: <$this->numeroLicencia><br></p>";
    }

    // Construct check rango como antes

    public function __construct($ciudad, $calle, $numeroDePlantas, $dimensiones, string $social, string $numeroLicencia)
    {
        parent::__construct($ciudad, $calle, $numeroDePlantas, $dimensiones);
        if (is_string($social))
            $this->social = $social;
        else
            die();

        if (is_string($numeroLicencia))
            $this->numeroLicencia = $numeroLicencia;
        else
            die();
    }



}
?>