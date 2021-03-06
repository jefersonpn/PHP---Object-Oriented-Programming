<?php

class Produto {

    public $descricao;
    public $preco;
    public $categoria = "Sem categoria";
    public $marca;

    public function ShowDetails() {
        return "Descrição: ". $this->descricao . "<br />".
                "Preço: ". $this->preco . "<br />".
                "Categoria: ". $this->categoria . "<br />".
                "Marca: ". $this->marca . "<br />";

    }
} 

class Pastilha extends Produto {

    Public $categoria = "Freio";
    Public $classificacao;
 
    Public function ShowDetails() {
        return 
               "Descrição: ". $this->descricao . "<br />".
                "Preço: R$". $this->preco . "<br />".
                "Categoria: ". $this->categoria . "<br />".
                "Marca: ". $this->marca . "<br />".
                "Categoria: ". $this->categoria . "<br />".
               "Classificação: ". $this->classificacao . "<br />";

    }
}

$Produto_1 = new Pastilha;
$Produto_1->descricao = "Pastilha Gol G5";
$Produto_1->preco = number_format(10.00, 2);
$Produto_1->marca = "Fras-le";
$Produto_1->classificacao = "Ótima";

echo $Produto_1->ShowDetails() . "<br />";