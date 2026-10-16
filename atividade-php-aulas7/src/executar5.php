<?php
class Retangulo {
    public $largura;
    public $altura;

    function calcularArea() {
        $area = $this -> largura * $this -> altura;
        echo "Área: " . $area . "\n";
    }
        function calcularPerimetro() {
            $perimetro = (2 * $this -> largura) + (2 * $this -> altura);
            echo "Perímetro: " . $perimetro . "\n";
        }
}

$retangulo1 = new Retangulo();
$retangulo1 -> largura = 5;
$retangulo1 -> altura = 3;
$retangulo1 -> calcularArea();
$retangulo1 -> calcularPerimetro();

$retangulo2 = new Retangulo();
$retangulo2 -> largura = 10;
$retangulo2 -> altura = 2;
$retangulo2 -> calcularArea();
$retangulo2 -> calcularPerimetro();
