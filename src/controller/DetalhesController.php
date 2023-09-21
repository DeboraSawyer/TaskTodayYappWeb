<?php
// O controller recebe as requisições do usuário.

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Detalhes;

// Verifica se o parâmetro 'id' foi passado pela URL através do método GET.
$produto_id = isset($_GET['id']) ? $_GET['id'] : null;

if ($produto_id !== null) {
    // Lista de produtos.
    $produtos = array(
        1 => array("id" => 1, "nome" => "FR1 310", "descricao" => "A linha FR é renomada por sua excelência e conforto de primeira categoria, especialmente projetada para atender aos patinadores que desbravam as ruas e parques, explorando ao máximo o ambiente urbano, incluindo obstáculos, escadas e rampas.<br><br>

        Excelência em Conforto e Precisão:
        Nossas botas internas são meticulosamente acolchoadas e ajustadas para proporcionar um ajuste firme e confortável, permitindo que você desfrute de patinações mais precisas e de alto desempenho. O conforto é a chave para a sua experiência.<br><br>
        
        Palmilha Premium para Conforto Extra:
        A inclusão de uma palmilha de alto desempenho com proteção anti-impacto em toda a sua extensão garante um conforto supremo enquanto você patina. Cada movimento será amortecido para que você possa patinar sem preocupações.<br><br>
        
        Desempenho e Durabilidade Incomparáveis:
        Nossa base foi meticulosamente projetada com padrões de qualidade excepcionais, projetada para resistir a manobras de alto impacto e torções. Os rolamentos, feitos de titânio, um material que suporta pressões e temperaturas extremas durante a rotação, garantem um alinhamento perfeito e mínima folga entre as esferas.<br><br>
        
        Velocidade sem Igual com Três Rodas:
        As rodas maiores proporcionam uma experiência de patinação mais rápida e suave, tornando a patinação urbana uma brisa. Aproveite este modelo equipado com uma base de três rodas para conquistar velocidade e agilidade incomparáveis."),
        2 => array("id" => 2, "nome" => "FR SL SEVEN", "descricao" => "FR SL SEVEN da FR Skates é a essência da excelência no mundo do Freestyle. Projetado para atletas profissionais em busca de alta qualidade, conforto e desempenho incomparáveis.<br><br>

        O FR SL SEVEN apresenta uma bota com liner integrado, proporcionando o máximo de conforto e precisão nas manobras. Com quatro sistemas de ajuste, incluindo presilhas superior e central, cadarço e fita de velcro na ponta, você pode personalizar o ajuste para a perfeição.<br><br>
        
        Sua base exclusiva é verdadeiramente diferenciada, com rodas de 90mm nas pontas e 72mm no centro, e a opção de ajuste de roqueio por parafuso. Com rolamentos ILQ 9 PRO Freestyle de alta qualidade, você experimentará um desempenho excepcional. As rodas FR Street Invaders, com uma dureza de 84A, oferecem conforto e segurança incomparáveis, independentemente do tipo de terreno em que você esteja patinando, seja ele liso ou acidentado.<br><br>
        
        O FR SL SEVEN é a escolha definitiva para atletas sérios que buscam elevar seu jogo no Freestyle. Experimente o melhor em qualidade, conforto e desempenho com este modelo premium da FR Skates."),
        3 => array("id" => 3, "nome" => "Canariam Murcielago", "descricao" => "Canariam Murcielago a personificação da excelência em design e desempenho. Este icônico modelo da Canariam, a marca número #1 da Colômbia, oferece uma experiência completa em preto e branco.<br><br>
        
        A essência do Murcielago reside na sua construção de ponta, combinando fibra de carbono e vidro para criar um equipamento de linha profissional incomparável. Desenvolvido com a base Canariam profissional, o modelo GP Ultralight apresenta uma estrutura de alumínio 7075, garantindo durabilidade e leveza excepcionais.<br><br>
        
        As rodas MPC, verdadeiras inovações em si mesmas, compartilham a tecnologia patenteada MTech® Soft Heart, Hard Body™. Isso significa que cada roda possui um anel interno macio combinado com um uretano externo mais rígido, proporcionando flexibilidade para uma aderência superior, além de maior durabilidade e desempenho de deslizamento. A eficiência da tecnologia MTech® aliada ao peso da roda contribui para a manutenção da velocidade máxima.<br><br>
        
        O Canariam Murcielago não é apenas um produto; é uma declaração de excelência no mundo do esporte e da patinação. Experimente a perfeição, experimente o Canariam Murciélago.")
    );

    // Verifica se o produto com o ID especificado existe.
    if (isset($produtos[$produto_id])) {
        $produto = $produtos[$produto_id];

        // Exibe os detalhes do produto.
        echo "<h1>Detalhes do Produto</h1>";
        echo "<p>ID: " . $produto['id'] . "</p>";
        echo "<p>Nome: " . $produto['nome'] . "</p>";
        echo "<p>Descrição: " . $produto['descricao'] . "</p>";
    } elseif ($produto_id === "") {
        echo "Por favor, forneça o ID do produto na URL.";
    } else {
        echo "Produto não encontrado.";
    }
}
