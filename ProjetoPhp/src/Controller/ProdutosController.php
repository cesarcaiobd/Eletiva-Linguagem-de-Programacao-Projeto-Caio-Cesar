<?php

namespace Aluno\ProjetoPhp\Controller;

use Aluno\ProjetoPhp\Model\DAO\ProdutosDAO;
use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/inserir_produto.php";
    }

    public static function abrirListaProdutos(){
        require_once "../src/View/listar_produtos.php";
    }

    public static function inserirProduto(){
        $produto = new Produtos();
        $produto->setNome($_POST["nome"]);
        $produto->setDescricao($_POST["descricao"]);
        $produto->setValor($_POST["valor"]);
        $dao = new ProdutosDAO();
        if ($dao->inserir($produto)){
            $resposta = true;
        }
        else{
            $resposta = false;
        }
        require_once "::/src/View/listar_produtos.php";
    }
}