<?php
include_once "carro.php";
include_once "carroDao.php";


if(isset($_GET["id"])){

    $id = $_GET["id"];

}


$carroDao = new CarroDao();
$carroDao->apagarCarro($id);





?>