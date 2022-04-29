<?php

class Ponto {

    private $x;
    private $y;
    static private $contador;

    function __construct($x, $y){
        $this->setX($x);
        $this->setY($y);
        $contador++;
    }

    function getX(){
        return $this->x;
    }
    function setX($x){
        $this->x = $x;
    }
    function getY(){
        return $this->y;
    }
    function setY($y){
        $this->y = $y;
    }

    static function RetornarContador(){
        return $contador;
    }

    function DistanciaDestePontoAOutro($p){
        $d = sqrt(pow($p->x - $x,2) + pow($p->y - $y,2));
        return $d;
    }

    static function DistanciaDeUmPontoAOutro($p0, $p1){
        $d = sqrt(pow($p0->x - $p1->x,2) + pow($p1->y - $p1->y,2));
        return $d;
    }
}

?>