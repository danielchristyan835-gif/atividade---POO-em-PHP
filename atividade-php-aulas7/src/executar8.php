<?php
class Termometro {
public $cidade;
public $temperatura = 0;
function registrar($valor) {
// COMPLETE: guarde o valor recebido no atributo temperatura
$this -> temperatura = $valor;
}
function aquecer($graus) {
// COMPLETE: some os graus recebidos a temperatura atual
$this -> temperatura += $graus;
}
function mostrar() {
// COMPLETE: escreva na tela a cidade e a temperatura
echo $this -> cidade . ": " . $this -> temperatura . " graus\n";
}
}
$termometro = new Termometro();
$termometro->cidade = "Macapa";
$termometro->registrar(28);
$termometro->mostrar();
$termometro->aquecer(3);
$termometro->mostrar();

