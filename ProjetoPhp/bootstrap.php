<?php 

//use Aluno\ProjetoPhp\Controller\ExercicioController;

require_once __DIR__."/vendor/autoload.php";

//aqui a gente recupera o que o usuário digitou e qual método http ele utilizou

$method = $_SERVER["REQUEST_METHOD"];
$path = $_SERVER["PATH_INFO"];

//instânciar classe Router
$router = new Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo',function(){
    return 'Olá Mundo!';
});

$router->get('/exemplo','Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

$router->post('/exemplo-resultado','Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');

$router->get('/cliente/novo', 'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioInserir');

$router->post('/cliente/inserir', 'Aluno\ProjetoPhp\Controller\ClientesController::inserirCliente');

$router->get('/clientes', 'Aluno\ProjetoPhp\Controller\ClientesController::abrirListaClientes');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if(!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());