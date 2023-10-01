<?php
//arquivos necessários para as operações 
require "Conexao.php";
require "Cachorro.php";
require "RepositorioCachorro.php";
//instanciando o repositório para cadastrar
$repCasa = new RepositorioCachorro();
//instanciando os objetos
$Cachorro1 = new Cachorro("Labrador Retriever","3 anos","30 quilos","amarelo","max");
$Cachorro2 = new Cachorro("salsicha","5 anos","7 quilos","marrom e preto","lola");

$repCachorro->cadastrar($banco,$Cachorro1);
$repCachorro->cadastrar($banco,$Cachorro2);
