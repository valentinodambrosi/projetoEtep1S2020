<?php


//Exemplo de chamada via formulario - carro.html

if(isset($_POST['modelo']))
{
    $modelo = $_POST['modelo'];
    echo "Metodo POST - Modelo:". $modelo . "<BR>" ;
}

if(isset($_POST['placa']))
{
    $placa = $_POST['placa'];
    echo  "Metodo POST - Placa:". $placa . "<BR>" ;
}

//Exemplo de chamada via url - query string
// http://localhost/projetoEtep1S2020/Banco_de_Dados/exemploMetodos.php?modelo=CRV&placa=xxx-000


if(isset($_GET['modelo']))
{
    $modelo = $_GET['modelo'];
    echo  "Metodo GET - Modelo:". $modelo . "<BR>" ;
}

if(isset($_GET['placa']))
{
    $placa = $_GET['placa'];
    echo "Metodo GET - Placa:". $placa . "<BR>" ;
}









?>