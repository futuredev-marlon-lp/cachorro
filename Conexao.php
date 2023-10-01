<?php
// Comando para conectar ao banco de dados
try {
    $banco = new PDO("sqlite:banco.sqlite");
    echo "Banco conectado!";
} catch (PDOException $e) {
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
    exit(); // Encerra o script se a conexão falhar
}

// Cria a tabela CACHORRO caso ela não exista
$Cachorro = "CREATE TABLE IF NOT EXISTS CACHORRO (
    raça TEXT,
    idade TEXT,
    peso TEXT,
    cordapelagem TEXT,
    nome TEXT,
    PRIMARY KEY (raça)
)";
// Executa o comando para criar a tabela
$banco->query($Cachorro);

// Resto do seu código aqui

// Não esqueça de fechar a conexão quando não precisar mais dela
$banco = null;
?>