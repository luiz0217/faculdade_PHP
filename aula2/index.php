<?php

class Livro
{
    private $titulo;
    private $autor;
    public function __construct($titulo,$autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
}


$lv = new Livro("titulo","author");

echo $lv->getAutor();
echo "<br>";
echo $lv->getTitulo();
