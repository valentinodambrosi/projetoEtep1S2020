<?php
include_once "carro.php";
include_once "carroDao.php";

if(isset($_POST["modelo"])){

    $modelo = $_POST["modelo"];

}

if(isset($_POST["placa"])){

    $placa = $_POST["placa"];

}

if(isset($_POST["id"])){

    $id = $_POST["id"];

}


$carro = new Carro($id,$modelo,$placa);
$carroDao = new CarroDao();
$carroDao->inserirCarro($carro);


//$carroDao->apagarCarro($carro);
//$carroDao->atualizaCarro($carro);
//$carroDao->listarCarros();
//$carroDao->getCarro($id);




?>