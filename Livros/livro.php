<?php

require_once "interface.php";
require_once "pessoa.php";

class Livro implements Publicacao {


 //Atributos   
private $titulo;
private $autor;
private $totPaginas;
private $pagAtual;
private $aberto;
private $leitor;


//Funções Interface

public function __construct($titulo, $autor, $totPaginas, $pagAtual,$leitor){

    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPaginas = $totPaginas;
    $this->pagAtual = $pagAtual;
    $this->leitor = $leitor;

    
}
public function abrir(){

    $this->aberto = true;

}

public function fechar(){

    $this->aberto = false;

}

public function folhear($p){

    if($p>$this->totPaginas){

        $this->pagAtual = 0;

    }else{

        $this->pagAtual;

    }

}

public function avancarPag(){

    $this->pagAtual ++;

}

public function voltarPag(){

    $this->pagAtual --;

}


//Métodos

public function detalhes(){

echo "<br>Título do livro: ".$this->titulo;
echo "<br>Autor do livro: ".$this->autor;
echo "<br>Total de páginas: ".$this->totPaginas;
echo "<br>Sendo lido por: ".$this->leitor->getNome();
echo "<br>Página atual: ".$this->pagAtual;

}


//Getters
public function getTitulo()
{
return $this->titulo;
}


public function getAutor()
{
return $this->autor;
}


public function getTotPaginas()
{
return $this->totPaginas;
}


public function getPagAtual()
{
return $this->pagAtual;
}


public function getAberto()
{
return $this->aberto;
}


public function getLeitor()
{
return $this->leitor;
}


//Setters
public function setTitulo($titulo)
{
$this->titulo = $titulo;

}


public function setAutor($autor)
{
$this->autor = $autor;

}


public function setTotPaginas($totPaginas)
{
$this->totPaginas = $totPaginas;

}


public function setPagAtual($pagAtual)
{
$this->pagAtual = $pagAtual;

}


public function setAberto($aberto)
{
$this->aberto = $aberto;

}


public function setLeitor($leitor)
{
$this->leitor = $leitor;

}
}

?>