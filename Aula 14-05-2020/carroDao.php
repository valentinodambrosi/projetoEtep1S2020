<?php

include_once "conexao.php";


class CarroDao {

    public $conn;


function __construct(){

    $conexao = new Conexao();
    $this->conn = $conexao->getConexao();

}

function __destruct(){

    $this->conn->close();
}


function listarCarros(){

    $sql = "SELECT * FROM CARROS";
    $resultado = $this->conn->query($sql);

    if($resultado->num_rows > 0){

        while($linha = $resultado->fetch_assoc()){


            echo "<tr>";
            echo "<td>" . $linha["id"] . "</td>";
            echo "<td>" . $linha["modelo"] . "</td>";
            echo "<td>" . $linha["placa"] . "</td>";
            echo "<tr>"; 
        }

    } else {

        echo "Sem resultdo";

    }

}


function getCarro($id){

   // $sql = "SELECT * FROM CARROS";

    $sql = "SELECT * FROM CARROS WHERE ID = '" .$id. "'";

    $resultado = $this->conn->query($sql);

    if($resultado->num_rows > 0){

        while($linha = $resultado->fetch_assoc()){

            echo "id:" . $linha["id"] . "<br>";
            echo "modelo:" . $linha["modelo"] . "<br>";
            echo "placa:" . $linha["placa"] . "<br>";


        }

    } else {

        echo "Sem resultdo";

    }

}



function inserirCarro($Carro){

//$sql = "INSERT INTO CARROS (MODELO,PLACA) VALUES ('CRV-V','XPT-1234')";

$sql = "INSERT INTO CARROS (MODELO,PLACA) VALUES ('".$Carro->getModelo()."','".$Carro->getPlaca()."')";

if($this->conn->query($sql) == true ){

    echo "Carro inserido com Sucesso !!! <br>";

} else {


    echo "Não foi possível inserir carro !!!!!<br>";

}



}

function atualizaCarro($Carro){

   
    //$sql = "UPDATE CARROS SET MODELO='UPDATE', PLACA='RRR-XXX'  WHERE ID = 1" ;

    $sql = "UPDATE CARROS SET MODELO='".$Carro->getModelo()."', PLACA='".$Carro->getPlaca()."'  WHERE ID = '".$Carro->getId()."'" ;
    

    
    if($this->conn->query($sql) == true ){
    
        echo "Carro atualizado com Sucesso !!! <br>";
    
    } else {
    
    
        echo "Não foi possível atualizar carro !!!!!<br>";
    
    }




}




function apagarCarro($id){


   
   // $sql = "DELETE FROM CARROS WHERE ID = '1'";

    $sql = "DELETE FROM CARROS WHERE ID = '" .$id.  "'";


    if($this->conn->query($sql) == true ){
    
        echo "Carro apagado com Sucesso !!! <br>";
    
    } else {
    
    
        echo "Não foi possível apagar carro !!!!!<br>";
    
    }



} 









}







?>