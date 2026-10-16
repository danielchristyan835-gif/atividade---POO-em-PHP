<?php
class Jogador {
    public $nome;
    public $pontos = 0;

    function marcarPontos($quantos) {
        $this -> pontos += $quantos;
    } 
        function zerar() {
            $this -> pontos = 0;
        }
            function status() {
                echo $this -> nome . ": " . $this -> pontos . " pontos\n";
            }
}

$jogador1 = new Jogador();
$jogador1 -> nome = "Ana";
$jogador2 = new Jogador();
$jogador2 -> nome = "Bruno";
$jogador1 -> status();
$jogador1 -> marcarPontos(10);
$jogador1 -> status();
$jogador1 -> marcarPontos(5);
$jogador1 -> status();
$jogador2 -> marcarPontos(8);
$jogador2 -> status();
$jogador1 -> zerar();
$jogador1 -> status();
$jogador2 -> status();
