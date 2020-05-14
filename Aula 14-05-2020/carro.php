<?php

class Carro {

    private $id;
    private $modelo;
    private $placa;


    function __construct($pId,$pModelo,$pPlaca){

        $this->id=$pId;
        $this->modelo=$pModelo;
        $this->placa=$pPlaca;

    }

    



    function getId(){
        return $this->id;
    }

    function getModelo(){
        return $this->modelo;
    }

    function getPlaca(){
        return $this->placa;
    }


    function setId($pId){
        $this->id=$pId;

    }

    function setModelo($pModelo){
        $this->modelo=$pModelo;

    }

    function setPlaca($pPlaca){
        $this->placa=$pPlaca;

    }

    function toString(){
        echo "id: ".$this->id . "modelo: " .$this->modelo ."placa: ". $this->placa;
       
    }



}



?>