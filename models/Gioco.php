<?php 
include_once __DIR__.'/Prodotto.php';
class Gioco extends Prodotto{
    private $colore;
    private $peso;
    

    function __construct($_name, $_price, $_barCode, $_immagine, $_colore, $_peso)
    {
        parent::__construct($_name, $_price, $_barCode, $_immagine);
        $this->setColore($_colore);
        $this->setPeso($_peso);
    }


    public function setColore($_colore){
        $this->colore = $_colore;
    }

    public function setPeso($_peso){
        $this->peso = $_peso;
    }

    public function getColore(){
        return $this->colore;
    }

    public function getPeso(){
        return $this->peso;
    }
}