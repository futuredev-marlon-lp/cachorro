<?php
//arquivos necessários para as operações 
require "Conexao.php";
require "Cachorro.php";
require "RepositorioCachorro.php";

$repCachorro = new RepositorioCachorro();
//lista dos valores em uma array, a partir do RepositorioCachorro 
$todosCachorros = $repCachorro->exibirTudo($banco);
//foreach laço de repetição que ajuda a percorrer array
foreach($todosCachorros as $Cachorro){
    echo "\n nossa cachorrão";
    echo "\n raça                            | {$Cachorro['raça']}";
    echo "\n idade                           | {$Cachorro['idade']}";
    echo "\n peso                            | {$Cachorro['peso']}";
    echo "\n cor da pelagem                  | {$Cachorro['cor da pelagem']}";
    echo "\n nome                            | {$Cachorro['nome']}";
    echo "\n 🐶🐶🐶";
}