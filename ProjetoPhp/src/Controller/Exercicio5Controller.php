<?php


namespace Aluno\ProjetoPhp\Controller;


class Exercicio5Controller
{

    public static function exibir(){
        require_once("../src/View/exercicio5.php");
    }

    public static function exibirResultado(){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        require_once("../src/View/exercicio5.php");
    }

}