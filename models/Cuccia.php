<?php 
include_once __DIR__.'/Prodotto.php';
class Cuccia extends Prodotto{
    public $lunghezza;
    public $larghezza;

    function __construct($_name, $_price, $_barCode, $_immagine, $_lunghezza, $_larghezza)
    {
        parent::__construct($_name, $_price, $_barCode, $_immagine);
        $this->setLunghezza($_lunghezza);
        $this->setLarghezza($_larghezza);
    }


    public function setLunghezza($_lunghezza){
        $this->lunghezza = $_lunghezza;
    }

    public function setLarghezza($_larghezza){
        $this->larghezza = $_larghezza;
    }

    public function getLunghezza(){
        return $this->lunghezza;
    }

    public function getLarghezza(){
        return $this->larghezza;
    }
}