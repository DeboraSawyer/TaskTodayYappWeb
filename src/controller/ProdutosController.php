<?php
// O controller recebe as requisições do usuário.

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Produtos;

// Verifica se o parâmetro 'id' foi passado pela URL através do método GET.
$produto_id = isset($_GET['id']) ? $_GET['id'] : null;

// $_SERVER: Contém informações sobre o ambiente do servidor web e sobre a requisição HTTP feita pelo cliente.
// $_SERVER['REQUEST_METHOD']: Indica o método HTTP GET.
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Verifica se o parâmetro "id" foi fornecido na URL.
    if (isset($_GET['id'])) {

        // Lista de produtos.
        $produtos = array(
            1 => array("id" => 1, "nome" => "FR1 310", "preco" => 2.999),
            2 => array("id" => 2, "nome" => "FR SL SEVEN", "preco" => 5.599),
            3 => array("id" => 3, "nome" => "Canariam Murcielago", "preco" => 6.999)
        );

        // Verifica se o produto com o ID especificado existe.
        if (isset($produtos[$produto_id])) {
            $produto = $produtos[$produto_id];

            // Exibe os detalhes do produto;
            echo "<h1>Detalhes do Produto</h1>";
            echo "<p>ID: " . $produto['id'] . "</p>";
            echo "<p>Nome: " . $produto['nome'] . "</p>";
            echo "<p>Preço: R$ " . $produto['preco'] . "</p>";
        } elseif ($produto_id === "") {
            echo "Por favor, forneça o ID do produto na URL.";
        } else {
            echo "Produto não encontrado.";
        }
    }
}
