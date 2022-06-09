<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio1Controller
{

    public static function exibir(){
        require_once("../src/View/exercicio1.php");
    }

    public static function exibirResultado(){
        $valorPago = $_POST["valorpago"];
        $valorProduto = $_POST["valorproduto"];
        $resultado = $valorPago - $valorProduto;
        require_once("../src/View/exercicio1.php");
    }

}