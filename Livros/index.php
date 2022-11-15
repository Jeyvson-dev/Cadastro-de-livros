<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
<h1>Usuário:</h1>
<p>Nome: <input type="text" name="nome"></p>
<p>Idade: <input type="number" name="idade"></p>
<select name="sexo">
    <option value="masculino">Masculino</option>
    <option value="feminino">Feminino</option>
</select>
<h1>Livro:</h1>
<p>Nome do Livro: <input type="text" name="nomeLivro"></p>
<p>Autor: <input type="text" name="autor"></p>
<p>Total de Páginas: <input type="number" name="totPaginas"></p>
<p>Página atual: <input type="number" name="pagAtual"></p>
Próxima Página:<input type="radio" value="proximo" name="pagina">
Página anterior:<input type="radio" value="anterior" name="pagina">




<p><button type="submit" name="submit">Cadastrar</button></p>
</form>

<?php
require_once "pessoa.php";
require_once "livro.php";

if(isset($_POST['submit'])){

    $error = false;

    $pagina = $_POST['pagina'];

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    $livro = $_POST['nomeLivro'];
    $autor = $_POST['autor'];
    $totPaginas = $_POST['totPaginas'];
    $pagAtual = $_POST['pagAtual'];



    if($nome == ""||$nome == null){

        die ("Nome é obrigatório ");

    }
    if($idade<=0){

        die ("Digite uma idade válida");

    }
    if($livro == "" || $livro == null){
        
        die("Nome do livro é obrigatório para ser computado em nosso sistema");
            
    }
    if($totPaginas<=0){
        die("Número de páginas é obrigatório para ser computado em nosso sistema");
        
    }else{

    if($autor == "" || $autor == null){
        
        $autor = "Não Identificado";
            
    }
    if($pagAtual<=0){
        
        $pagAtual = "Não Identificado";
            
    }

    

$leitor = new Pessoa($nome, $idade, $sexo);
$livro = new Livro($livro,$autor,$totPaginas,$pagAtual,$leitor);

if($pagina=="proximo"){

        $livro->avancarPag();

}else if($pagina=="anterior"){

    $livro->voltarPag();


}

$livro->detalhes();

    }

}

?>   
</body>
</html>