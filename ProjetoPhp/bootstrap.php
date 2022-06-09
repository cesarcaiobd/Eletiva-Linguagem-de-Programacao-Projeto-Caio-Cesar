<?php

require_once __DIR__.'/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\ProjetoPhp\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

$router->get('/ola-mundo', function(){
    return "Olá Mundo!";
});

$router->get('/exemplo', 
        'Aluno\ProjetoPhp\Controller\ExercicioController::exibir');

$router->post('/exemplo-resultado',
        'Aluno\ProjetoPhp\Controller\ExercicioController::exibirResultado');

//ROTAS EXERCICIO 1

$router->get('/exercicio1', 
        'Aluno\ProjetoPhp\Controller\Exercicio1Controller::exibir');

$router->post('/exercicio1-resultado',
        'Aluno\ProjetoPhp\Controller\Exercicio1Controller::exibirResultado');

//ROTAS EXERCICIO 2

$router->get('/exercicio2', 
        'Aluno\ProjetoPhp\Controller\Exercicio2Controller::exibir');

$router->post('/exercicio2-resultado',
        'Aluno\ProjetoPhp\Controller\Exercicio2Controller::exibirResultado');

//ROTAS EXERCICIO 3

$router->get('/exercicio3', 
        'Aluno\ProjetoPhp\Controller\Exercicio3Controller::exibir');

$router->post('/exercicio3-resultado',
        'Aluno\ProjetoPhp\Controller\Exercicio3Controller::exibirResultado');

//ROTAS EXERCICIO 4

$router->get('/exercicio4', 
        'Aluno\ProjetoPhp\Controller\Exercicio4Controller::exibir');

$router->post('/exercicio4-resultado',
        'Aluno\ProjetoPhp\Controller\Exercicio4Controller::exibirResultado');

//ROTAS EXERCICIO 5

$router->get('/exercicio5', 
        'Aluno\ProjetoPhp\Controller\Exercicio5Controller::exibir');

$router->post('/exercicio5-resultado',
        'Aluno\ProjetoPhp\Controller\Exercicio5Controller::exibirResultado');

//ROTAS CLIENTE

$router->get('/cliente/novo',
'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioInserir');

$router->post('/cliente/inserir',
'Aluno\ProjetoPhp\Controller\ClientesController::inserirCliente');

$router->get('/clientes',
'Aluno\ProjetoPhp\Controller\ClientesController::abrirListaClientes');

$router->get('/cliente/alterar/{id}',
'Aluno\ProjetoPhp\Controller\ClientesController::abrirFormularioAlterar');

$router->post('/cliente/editar/{id}',
'Aluno\ProjetoPhp\Controller\ClientesController::editarCliente');

$router->get('/cliente/excluir/{id}',
'Aluno\ProjetoPhp\Controller\ClientesController::excluirCliente');

//ROTAS PRODUTO

$router->get('/produto/novo',
'Aluno\ProjetoPhp\Controller\ProdutosController::abrirFormularioInserir');

$router->post('/produto/inserir',
'Aluno\ProjetoPhp\Controller\ProdutosController::inserirProduto');

$router->get('/produtos',
'Aluno\ProjetoPhp\Controller\ProdutosController::abrirListaProdutos');

$router->get('/produto/alterar/{id}',
'Aluno\ProjetoPhp\Controller\ProdutosController::abrirFormularioAlterar');

$router->post('/produto/editar/{id}',
'Aluno\ProjetoPhp\Controller\ProdutosController::editarProduto');

$router->get('/produto/excluir/{id}',
'Aluno\ProjetoPhp\Controller\ProdutosController::excluirProduto');

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result){
    http_response_code(404);
    echo "Página não encontrada";
    die();
}

echo $result($router->getParams());