<?php

// Eu escolhi a venda de computadores gerencia dados essenciais de comércio,
// Porque ela permite automatizar o cálculo do faturamento total multiplicando valores 
// e aplicando descontos com base nas regras de negócio.
// e pensei em mudar a forma normal de calcular os valores de frete e desconto de outra forma que aprendi,
// para esse formato.

class Computador {
    public $dono;
    public $quantidade = 0;
    public $tipo;
    public $valorUnitario = 0;
    public $valorTotal = 0;

    function mostrar() {
        echo $this -> dono . " escolheu " . $this -> quantidade . " computadores do tipo " . $this -> tipo . " com o valor unitário de R$ " 
        . $this -> valorUnitario . " e o valor total é de: R$ " . $this -> valorTotal . ".\n";
    } 
        function adicionarFrete($valorDoFrete) {
            $this -> valorTotal = $this -> valorTotal + $valorDoFrete;
                echo "Frete de R$ " . $valorDoFrete . " adicionado ao pedido de " . $this->dono . ".\n";
        }
            function calcularTotal($desconto) {
                $this -> valorTotal = $this -> quantidade * $this ->valorUnitario;
                if ($desconto > 0) {
                    $this->valorTotal -= $this -> valorTotal * ($desconto / 100);
                }
            }
}

$venda1 = new Computador();
$venda1 -> dono = "Arthur";
$venda1 -> quantidade = 2;
$venda1 -> tipo = "PC Gamer";
$venda1 -> valorUnitario = 3500.00;
$venda1 -> calcularTotal(10);
$venda1 -> adicionarFrete(200.00);
$venda1 -> mostrar();

$venda2 = new Computador();
$venda2 -> dono = "Coraline";
$venda2 -> quantidade = 1;
$venda2 -> tipo = "Desktop";
$venda2 -> valorUnitario = 2000.00;
$venda2 -> calcularTotal(0);
$venda2 -> adicionarFrete(100.00);
$venda2 -> mostrar();
