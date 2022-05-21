<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ClientesDAO;
use Aluno\ProjetoPhp\Model\Entity\Clientes;

class ClientesController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_cliente.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setNome($_POST["nome"]);
        $cliente->setEmail($_POST["email"]);
        $cliente->setIdade($_POST["idade"]);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso!";
        }
        else{
            "Erro ao inserir";
        }
    }
}