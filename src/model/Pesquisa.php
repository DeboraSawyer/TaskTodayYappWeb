<?php

// namespace: Permite organizar e evitar conflitos de nomes em um código.
// App: É o src.
// model: É a pasta model.
namespace App\model;

class Pesquisa {
    private $id;
    private $nome;
    private $preco;
    private $produto;

    public function __construct($id, $nome, $preco, $produto) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->produto = $produto;
    }

    // Método para obter o ID do produto.
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getProdutos() {
        return $this->produto;
    }
}
