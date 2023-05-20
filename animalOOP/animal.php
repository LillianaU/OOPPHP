<?php

class canimal{

var $ojos = 2;

function patas(){

return "Este animal tiene ".$this->patas." patas y además tiene ".$this->ojos." ojos <BR>";
}
}

$gato = new canimal();

$perro = new canimal();

$gato->patas = 3;

$perro->patas = 4;
echo $gato->patas();

echo $perro->patas();
