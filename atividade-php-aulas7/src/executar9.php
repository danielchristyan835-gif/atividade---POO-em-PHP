<?php

class Carrinho {
   public $dono;
   public $itens = 0;

   function mostrar() {
        echo "Carrinho de " . $this -> dono . ": " . $this -> itens . " item(ns)\n";
   }    
    function adicionar($quantos) {
        $this -> itens += $quantos;
    }
}

$carrinho = new Carrinho();
$carrinho -> dono = "Ana";
$carrinho -> adicionar(3);
$carrinho -> mostrar();
$carrinho -> adicionar(2);
$carrinho -> mostrar();
