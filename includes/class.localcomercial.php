<?php 

class LocalComercial extends Local {
    private string $razonSocial;
    private string $numeroLicencia;

    public function __construct ($razonSocial, $numeroLicencia) {
        
    }

    public function __toString() {
       return "<p><datos del local></p><p>Razón Social: <$this->razonSocial><br></p><p>Número de Licencia: <$this->numeroLicencia><br></p>";
    }


}

