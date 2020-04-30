<?php

include_once "carro.php";


$carro = new Carro('1','GOL', 'XXX-0000');
$carro->setId('1');
$carro->setModelo('CR-V');
$carro->setPlaca('XYZ-2398');


echo $carro->getId();
echo $carro->getModelo();
echo $carro->getPlaca();

echo "<br>";

$carro2 = new Carro('1','GOL', 'XXX-0000');
$carro2->toString();

?>