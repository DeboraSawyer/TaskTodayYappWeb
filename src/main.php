<?php

include_once __DIR__ . "/../vendor/autoload.php";
//include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;
use App\model\Produtos;
use App\model\Detalhes;
use App\model\Pesquisa;

$user = new Usuario("Brian", 30);

$produto1 = new Produtos(1, "FR1 310",  2.999);
$produto2 = new Produtos(2, "FR SL SEVEN",  5.599);
$produto3 = new Produtos(3, "Canariam Murcielago",  6.999);

$detalhe1 = new Detalhes(1, "FR1 310",  "A linha FR é renomada por sua excelência e conforto de primeira categoria, especialmente projetada para atender aos patinadores que desbravam as ruas e parques, explorando ao máximo o ambiente urbano, incluindo obstáculos, escadas e rampas.<br><br>

Excelência em Conforto e Precisão:
Nossas botas internas são meticulosamente acolchoadas e ajustadas para proporcionar um ajuste firme e confortável, permitindo que você desfrute de patinações mais precisas e de alto desempenho. O conforto é a chave para a sua experiência.<br><br>

Palmilha Premium para Conforto Extra:
A inclusão de uma palmilha de alto desempenho com proteção anti-impacto em toda a sua extensão garante um conforto supremo enquanto você patina. Cada movimento será amortecido para que você possa patinar sem preocupações.<br><br>

Desempenho e Durabilidade Incomparáveis:
Nossa base foi meticulosamente projetada com padrões de qualidade excepcionais, projetada para resistir a manobras de alto impacto e torções. Os rolamentos, feitos de titânio, um material que suporta pressões e temperaturas extremas durante a rotação, garantem um alinhamento perfeito e mínima folga entre as esferas.<br><br>

Velocidade sem Igual com Três Rodas:
As rodas maiores proporcionam uma experiência de patinação mais rápida e suave, tornando a patinação urbana uma brisa. Aproveite este modelo equipado com uma base de três rodas para conquistar velocidade e agilidade incomparáveis.");
$detalhe2 = new Detalhes(1, "FR SL SEVEN", "FR SL SEVEN da FR Skates é a essência da excelência no mundo do Freestyle. Projetado para atletas profissionais em busca de alta qualidade, conforto e desempenho incomparáveis.<br><br>

O FR SL SEVEN apresenta uma bota com liner integrado, proporcionando o máximo de conforto e precisão nas manobras. Com quatro sistemas de ajuste, incluindo presilhas superior e central, cadarço e fita de velcro na ponta, você pode personalizar o ajuste para a perfeição.<br><br>

Sua base exclusiva é verdadeiramente diferenciada, com rodas de 90mm nas pontas e 72mm no centro, e a opção de ajuste de roqueio por parafuso. Com rolamentos ILQ 9 PRO Freestyle de alta qualidade, você experimentará um desempenho excepcional. As rodas FR Street Invaders, com uma dureza de 84A, oferecem conforto e segurança incomparáveis, independentemente do tipo de terreno em que você esteja patinando, seja ele liso ou acidentado.<br><br>

O FR SL SEVEN é a escolha definitiva para atletas sérios que buscam elevar seu jogo no Freestyle. Experimente o melhor em qualidade, conforto e desempenho com este modelo premium da FR Skates.");
$detalhe3 = new Detalhes(1, "Canariam Murcielago", "Canariam Murcielago a personificação da excelência em design e desempenho. Este icônico modelo da Canariam, a marca número #1 da Colômbia, oferece uma experiência completa em preto e branco.<br><br>
        
A essência do Murcielago reside na sua construção de ponta, combinando fibra de carbono e vidro para criar um equipamento de linha profissional incomparável. Desenvolvido com a base Canariam profissional, o modelo GP Ultralight apresenta uma estrutura de alumínio 7075, garantindo durabilidade e leveza excepcionais.<br><br>

As rodas MPC, verdadeiras inovações em si mesmas, compartilham a tecnologia patenteada MTech® Soft Heart, Hard Body™. Isso significa que cada roda possui um anel interno macio combinado com um uretano externo mais rígido, proporcionando flexibilidade para uma aderência superior, além de maior durabilidade e desempenho de deslizamento. A eficiência da tecnologia MTech® aliada ao peso da roda contribui para a manutenção da velocidade máxima.<br><br>

O Canariam Murcielago não é apenas um produto; é uma declaração de excelência no mundo do esporte e da patinação. Experimente a perfeição, experimente o Canariam Murciélago.");

$pesquisa1 = new Pesquisa(1, "FR1 310", 2.999, "");
$pesquisa2 = new Pesquisa(2, "FR SL SEVEN", 5.599, "");
$pesquisa3 = new Pesquisa(3, "Canariam Murcielago", 6.999, "");

echo "<h2>Task Today App</h2>";
echo "Nome: {$user->getNome()} <br> Idade: {$user->getIdade()} anos de idade.<br><br>";
// <hr>: Linha horizontal.
echo "<hr>";

echo "Identificação do Produto: {$produto1->getId()}<br> Nome: {$produto1->getNome()}<br> Preço: R$ {$produto1->getPreco()}<br>";
echo "Descrição do Produto:<br> {$detalhe1->getDescricao()}<br><br>";
echo "<hr>";

echo "Identificação do Produto: {$produto2->getId()}<br> Nome: {$produto2->getNome()}<br> Preço: R$ {$produto2->getPreco()}<br><br>";
echo "Descrição do Produto:<br> {$detalhe2->getDescricao()}<br><br>";
echo "<hr>";

echo "Identificação do Produto: {$produto3->getId()}<br> Nome: {$produto3->getNome()}<br> Preço: R$ {$produto3->getPreco()}<br><br>";
echo "Descrição do Produto:<br> {$detalhe3->getDescricao()}<br><br>";
echo "<hr>";

//echo "Identificação do Produto: <a href=\"{$pesquisa1->getId()}\">{$pesquisa1->getNome()}</a><br><br>";
//echo "Identificação do Produto: <a href=\"{$pesquisa2->getId()}\">{$pesquisa2->getNome()}</a><br><br>";
//echo "Identificação do Produto: <a href=\"{$pesquisa3->getId()}\">{$pesquisa3->getNome()}</a><br><br>";
echo "Identificação do Produto: <a href=\"controller/PesquisaController.php?nome={$pesquisa1->getNome()}\">{$pesquisa1->getNome()}</a><br>";
echo "Identificação do Produto: <a href=\"controller/PesquisaController.php?nome={$pesquisa2->getNome()}\">{$pesquisa2->getNome()}</a><br>";
echo "Identificação do Produto: <a href=\"controller/PesquisaController.php?nome={$pesquisa3->getNome()}\">{$pesquisa3->getNome()}</a><br>";
