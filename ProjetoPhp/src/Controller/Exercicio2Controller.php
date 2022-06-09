<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio2Controller
{

    public static function exibir(){
        require_once("../src/View/exercicio2.php");
    }

    public static function exibirResultado(){
        $valorQuilo = $_POST["valorquilo"];
        $qtdQuilo = $_POST["qtdquilo"];
        $resultado = $qtdQuilo * $valorQuilo;
        require_once("../src/View/exercicio2.php");
    }

}