<?php

require_once 'Veiculo.php';

class Carga extends Veiculo {

    public $capacidadeCarga;

    public function mostrarCarga() {

        $this->mostrarDados();

        echo "Capacidade Máxima de Carga: " . $this->capacidadeCarga . " kg<br>";
    }
}

?>
