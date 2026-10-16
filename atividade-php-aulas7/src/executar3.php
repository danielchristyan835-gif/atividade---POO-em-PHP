<?php
class Lampada {
    public $estado = "Desligada";
    function ligar() {
        $this -> estado = "Ligada";
    } 
        function desligar() {
        $this -> estado = "Desligada";
        } 
            function status() {
            echo "A lâmpada está " . $this -> estado . "\n";
            }
}

$lampada = new Lampada();
$lampada -> status();
$lampada -> ligar();
$lampada -> status();
$lampada -> desligar();
$lampada -> status();
