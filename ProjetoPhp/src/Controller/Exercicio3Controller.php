<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio3Controller
{

    public static function exibir(){
        require_once("../src/View/exercicio3.php");
    }

    public static function exibirResultado(){
        $valor = $_POST["valor"];
        if ($valor > 10) echo "o valor é maior que 10"
        else echo "o valor é menor que 10"
        require_once("../src/View/exercicio3.php");
    }

}