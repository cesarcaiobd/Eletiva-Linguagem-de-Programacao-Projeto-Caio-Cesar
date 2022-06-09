<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio4Controller
{

    public static function exibir(){
        require_once("../src/View/exercicio4.php");
    }

    public static function exibirResultado(){
        $valor = $_POST["valor"];
        require_once("../src/View/exercicio4.php");
    }

}