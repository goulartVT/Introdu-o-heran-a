<?php

class Veiculo {

    public $placa;
    public $marca;
    public $modelo;
    public $anoModelo;
    public $anoFabricacao;
    public $chassi;
    public $renavam;
    public $procedencia;

    public $altura;
    public $largura;
    public $profundidade;

    public $corExterna;
    public $corInterna;
    public $tipoCombustivel;
    public $motor;
    public $quilometragem;
    public $consumoMedio;
    public $numeroPortas;
    public $opcionais;
    
    // método
    public function mostrarDados() {

        echo "<h3>Dados do Veículo</h3>";

        echo "Placa: " . $this->placa . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Ano Modelo: " . $this->anoModelo . "<br>";
        echo "Ano Fabricação: " . $this->anoFabricacao . "<br>";
        echo "Chassi: " . $this->chassi . "<br>";
        echo "Renavam: " . $this->renavam . "<br>";
        echo "Procedência: " . $this->procedencia . "<br>";

        echo "Altura: " . $this->altura . "<br>";
        echo "Largura: " . $this->largura . "<br>";
        echo "Profundidade: " . $this->profundidade . "<br>";

        echo "Cor Externa: " . $this->corExterna . "<br>";
        echo "Cor Interna: " . $this->corInterna . "<br>";
        echo "Combustível: " . $this->tipoCombustivel . "<br>";
        echo "Motor: " . $this->motor . "<br>";
        echo "Quilometragem: " . $this->quilometragem . "<br>";
        echo "Consumo Médio: " . $this->consumoMedio . "<br>";
        echo "Número de Portas: " . $this->numeroPortas . "<br>";
        echo "Opcionais: " . $this->opcionais . "<br>";
    }
}

?>
