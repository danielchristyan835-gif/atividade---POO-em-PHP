<?php
class Livro {
    public $titulo;
    public $autor;
    public $paginas;
}

$livro1 = new Livro();
$livro1->titulo = "Game of Thrones";
$livro1->autor = "George R. R. Martin";
$livro1->paginas = 694;

$livro2 = new Livro();
$livro2->titulo = "O Senhor dos Anéis";
$livro2->autor = "J. R. R. Tolkien";
$livro2->paginas = 1216;

echo "Livro 1: " . $livro1->titulo . "\nAutor: " . $livro1->autor . "\nPáginas: " . $livro1->paginas . "\n\n";
echo "Livro 2: " . $livro2->titulo . "\nAutor: " . $livro2->autor . "\nPáginas: " . $livro2->paginas;

//Existem uma classe que é Livro, e dois objetos que são livro1 e livro2.