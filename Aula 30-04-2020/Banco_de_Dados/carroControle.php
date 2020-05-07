<?php
include_once "carro.php";
include_once "carroDao.php";


$modelo = $_POST["modelo"];
$placa = $_POST["placa"];
$id = $_POST["id"];


$carro = new Carro($id,$modelo,$placa);
$carroDao = new CarroDao();



//$carroDao->apagarCarro($carro);
//$carroDao->atualizaCarro($carro);
//$carroDao->inserirCarro($carro);
//$carroDao->listarCarros();


$carroDao->getCarro($id);












?>