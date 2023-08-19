<?php

class Fabricante {
    private string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }
}

class Produto{

    private int $codigo;
    private string $descricao;
    private int $qtde;
    private float $preco;
    private Fabricante $fabricante;

    public function __construct(int $codigo, string $descricao, float $preco, Fabricante $fabricante){
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    // public function __construct(){

    // }

    public function getProduto(){
        return "\n O produto com Código: {$this->codigo} é a {$this->descricao} e custa R$ {$this->preco} e tem o Fabricante {$this->get_fabricante()}";
    }

    public function set_codigo(int $codigo){
        $this->codigo = $codigo;
    }

    public function set_descricao(string $descricao){
        $this->descricao = $descricao;
    }
    public function get_codigo(int $codigo){
        return $this->codigo;
    }

    public function get_descricao(string $descricao){
        return $this->descricao;
    }
    public function get_fabricante(){
        return $this->fabricante->getNome();
    }


}

$f1 = new Fabricante("BICastel");

$p1 = new Produto(1, "Caneta azul", 9.99, $f1);
$p2 = new Produto(2, "Lápis", 2.59, $f1);

$p1->set_descricao("Caneta Vermelha");
$p1->set_codigo(10);

echo "<h1> Aula orientação a objetos em PHP </h1>";
echo "<br>";

echo $p1->getProduto();
echo "<br>";
echo $p2->getProduto();
echo "<br>";
echo "<br>";
var_dump($p1);
echo "<br>";
var_dump($p2);
echo "<br>";
var_dump($f1);


?>