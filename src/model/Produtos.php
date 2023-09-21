<?php

// namespace: Permite organizar e evitar conflitos de nomes em um código.
// App: É o src.
// model: É a pasta model.
namespace App\model;

class Produtos {

    // Atributos.
    private $id;
    private $nome;
    private $preco;

    function __construct($id, $nome, $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
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
}
