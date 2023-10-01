<?php
//está definindo as classes
class cachorro{
    private string $raça;
    private string $idade;
    private string $peso;
    private string $cordapelagem;
    private string $nome;
//Vai ser executado quando instanciado o objeto
    public function __construct(string $r,string $i,string $p,string $c,string $n){
        $this->definirRaça($r);
        $this->definirIdade($i);
        $this->definirPeso($p);
        $this->definirCordapelagem($c);
        $this->definirNome($n);
    }
//Funções de operações dos objetos
    public function definirRaça(string $r){
        $this->raça = $r;
    }
    public function definirIdade(string $i){
        $this->idade = $i;
    }
    public function definirPeso(string $p){
        $this->peso = $p;
    }

    public function definirCordapelagem(string $c){
        $this->cordapelagem = $c;
    }

    public function definirnome(string $n){
        $this->nome = $n;
    }
    public function exibirRaça(){
        return $this->raça;
    }
    public function exibirIdade(){
        return $this->idade;
    }
    public function exibirPeso(){
        return $this->peso;
    }

    public function exibirCordapelagem(){
        return $this->cordapelagem;
    }

    public function exibirNome(){
        return $this->nome;
    }
}
