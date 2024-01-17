<?php

require_once __DIR__.'/../traits/Name.php';
class Prodotto{
    use Name;
    // private $name;
    private $price;
    private $barCode;
    private $categoria;
    private $immagine;
    private $tipoDiProdotto;
    

    // constructor

    function __construct($_name, $_price, $_barCode, $_immagine)
    {
        $this->name=$_name;
        $this->price=$_price;
        $this->barCode=$_barCode;
        $this->immagine=$_immagine;
    }

    // setters

    // public function setName($_name){
    //     $this->name = $_name;
    // }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setBarCode($_barCode){
        $this->barCode = $_barCode;
    }

    public function setCategoria($_categoria){
        if($_categoria === 'cani' || $_categoria === 'gatti'){
            $this->categoria = $_categoria;
        }
    }

    public function setImmagine($_immagine){
        $this->immagine = $_immagine;
    }

    public function setTipoDiProdotto($_tipoDiProdotto){
        if($_tipoDiProdotto === 'cibo' || $_tipoDiProdotto === 'cuccia' || $_tipoDiProdotto === 'gioco'){
            $this->tipoDiProdotto = $_tipoDiProdotto;
        }
    }

    // getters

    // public function getName(){
    //     return $this->name;
    // }

    public function getPrice(){
        return $this->price;
    }

    public function getBarCode(){
        return $this->barCode;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getImmagine(){
        return $this->immagine;
    }

    public function getTipoDiProdotto(){
        return $this->tipoDiProdotto;
    }
}