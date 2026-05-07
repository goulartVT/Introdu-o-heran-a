<?php

require_once 'Passeio.php';
require_once 'Carga.php';

// passeio
$carro = new Passeio();

$carro->placa = "GOU-6767";
$carro->marca = "Toyota";
$carro->modelo = "Corolla";
$carro->anoModelo = 2022;
$carro->anoFabricacao = 2021;
$carro->chassi = "123456789";
$carro->renavam = "987654321";
$carro->procedencia = "Nacional";

$carro->altura = "1.45m";
$carro->largura = "1.77m";
$carro->profundidade = "4.63m";

$carro->corExterna = "Preto";
$carro->corInterna = "Cinza";
$carro->tipoCombustivel = "Flex";
$carro->motor = "2.0";
$carro->quilometragem = "25000 km";
$carro->consumoMedio = "12 km";
$carro->numeroPortas = 4;
$carro->opcionais = "Ar-condicionado, Multimídia";

$carro->numeroPassageiros = 5;

$carro->mostrarPasseio();

echo "<hr>";

// carga
$caminhao = new Carga();

$caminhao->placa = "VIN-6767";
$caminhao->marca = "Volvo";
$caminhao->modelo = "FH";
$caminhao->anoModelo = 2020;
$caminhao->anoFabricacao = 2019;
$caminhao->chassi = "999999999";
$caminhao->renavam = "111111111";
$caminhao->procedencia = "Importado";

$caminhao->altura = "3.50m";
$caminhao->largura = "2.50m";
$caminhao->profundidade = "10m";

$caminhao->corExterna = "Branco";
$caminhao->corInterna = "Preto";
$caminhao->tipoCombustivel = "Diesel";
$caminhao->motor = "540cv";
$caminhao->quilometragem = "120000 km";
$caminhao->consumoMedio = "5 km";
$caminhao->numeroPortas = 2;
$caminhao->opcionais = "Ar-condicionado, GPS";

$caminhao->capacidadeCarga = 15000;

$caminhao->mostrarCarga();

?>
