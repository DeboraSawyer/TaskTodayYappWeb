<?php
// O controller recebe as requisições do usuário.

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Pesquisa;
use App\model\Produtos;

// Verifica se o parâmetro 'noome' foi passado pela URL através do método GET.
$nome = isset($_GET['nome']) ? $_GET['nome'] : null;

// Lista de produtos.
$produtos = array(
    1 => array("id" => 1, "nome" => "FR1 310", "preco" => 2.999),
    2 => array("id" => 2, "nome" => "FR SL SEVEN", "preco" => 5.599),
    3 => array("id" => 3, "nome" => "Canariam Murcielago", "preco" => 6.999)
);

// Verifica se o parâmetro 'nome' foi passado.
if ($nome !== null) {
    // Pesquisa o produto pelo nome.
    $produtoEncontrado = null;
    foreach ($produtos as $produto) {
        if (strcasecmp($produto['nome'], $nome) == 0) {
            $produtoEncontrado = $produto;
            break;
        }
    }

    // Verifica se o produto com o nome fornecido foi encontrado.
    if ($produtoEncontrado !== null) {
        // Responde ao navegador com os detalhes do produto.
        echo "ID: " . $produtoEncontrado['id'] . "<br>";
        echo "Nome: " . $produtoEncontrado['nome'] . "<br>";
        echo "Preço: R$ " . $produtoEncontrado['preco'];
    } else {
        echo "Produto não encontrado.";
    }
} else {
    echo "Por favor, forneça um nome para pesquisar.";
}
