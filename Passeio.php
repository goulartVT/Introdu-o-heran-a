<?php

require_once 'Veiculo.php';

class Passeio extends Veiculo {

    public $numeroPassageiros;

    public function mostrarPasseio() {

        $this->mostrarDados();

        echo "Número de Passageiros: " . $this->numeroPassageiros . "<br>";
    }
}

?>
