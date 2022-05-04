<?php 

require_once __DIR__."/vendor/autoload.php";

//aqui a gente recupera o que o usuário digitou e qual método http ele utilizou

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//instânciar classe Router
$router = new Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO



//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if(!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}