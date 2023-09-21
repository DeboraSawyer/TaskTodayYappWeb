<?php
// O controller recebe as requisições do usuário.

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;

// Verifica se o parâmetro 'atributo' foi passado pela URL através do método GET.
$atributo = isset($_GET['atributo']) ? $_GET['atributo'] : null;

// isset: Verifica se uma variável ou elemento de array existe.
if (isset($atributo)) {
    if ($atributo === "nome") {
        echo "Nome: " . $atributo;
    } elseif ($atributo === "idade") {
        echo "Idade: " . $atributo;
    } elseif ($atributo === "") {
        echo "Por favor, forneça um atributo na URL.";
    } else {
        echo "Atributo não reconhecido.";
    }
}
