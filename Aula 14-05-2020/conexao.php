<?php

class Conexao {


public $servidor = "localhost";
public $usuario = "root";
public $senha = "";
public $banco = "projetoetep";
public $conn;



function __construct() {

    $this->conn = new mysqli($this->servidor, $this->usuario, $this->senha, $this->banco );
    if($this->conn->connect_error){

        die("Conexao falhou .........");

    }


}

function getConexao(){

    return $this->conn;

}








}   







?>
