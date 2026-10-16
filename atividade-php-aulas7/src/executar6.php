<?php
class Produto {
public $nome;
public $preco;
function aumentarPreco($valor) {
$this -> preco = $this -> preco + $valor; //Faltava o "$this ->" para acessar a classe nos atributos do objeto.
}
function mostrar() {
echo $this->nome . " custa R$ " . $this->preco . "\n";
}
}
$produto = new Produto();
$produto -> nome = "Caderno"; // Não se usa o "$" no atributo, deve ser -> nome e não -> $nome.
$produto -> preco = 10; // Para acessar o atributos de uma classe se usa a seta "->" e não o ponto ".".
$produto->aumentarPreco(5); // Para o objeto fazer um metódo ou ação que o objeto executa ele tem que ser escrito assim "$produto" e não assim "produto".
$produto->mostrar(); // Alterei o antigo que estava "mostra" para "mostrar()".
