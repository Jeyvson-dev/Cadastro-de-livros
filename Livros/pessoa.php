<?php


class Pessoa{

//Atributos
    private $nome;
    private $idade;
    private $sexo;

    

//Métodos

public function __construct($nome, $idade, $sexo){

    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    
}

public function fazerAniversario(){


    
}

//Getters

    public function getNome()
    {
        return $this->nome;
    }

   
    private function getIdade()
    {
        return $this->idade;
    }

    
    private function getSexo()
    {
        return $this->sexo;
    }


    //Setters;
    
    private function setSexo($sexo)
    {
        $this->sexo = $sexo;

    }

   
    private function setIdade($idade)
    {
        $this->idade = $idade;

    }

    
    private function setNome($nome)
    {
        $this->nome = $nome;

    }
}


?>