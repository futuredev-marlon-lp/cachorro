<?php

class RepositorioCachorro
{
    public function cadastrar(PDO $banco, Cachorro $Cachorro)
    {
        //Aqui prepara a instrução SQL para criar o registro na tabela
        $sqlInsert = "INSERT INTO Cachorro(raça,idade,peso,cordapelagem,nome) VALUES (:r,:i,:p,:c,:n)";

        $insert = $banco->prepare($sqlInsert);

        $raça = $Cachorro->exibirRaça();
        $idade = $Cachorro->exibirIdade();
        $peso = $Cachorro->exibirpeso();
        $cordapelagem = $Cachorro->exibirCordapelagem();
        $nome = $Cachorro->exibirNome();
        //definindo o valor dos parâmetros 
        $insert->bindParam(":r", $raça);
        $insert->bindParam(":i", $idade);
        $insert->bindParam(":p", $peso);
        $insert->bindParam(":c", $cordapelagem);
        $insert->bindParam(":n", $nome);
        //executa o comando de insert no banco 
        $insert->execute();
    }
    
    public function exibirTudo(PDO $banco){ 
        $sql = "SELECT * FROM Cachorro";
        $dado = $banco->query($sql); //executa o SQL do banco
        //estrutura os valores como obtidos pelo $select como um vetor indexado
        return $dado->fetchAll(PDO::FETCH_ASSOC);
    }
}