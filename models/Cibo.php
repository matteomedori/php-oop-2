<?php 

include_once __DIR__.'/Prodotto.php';
class Cibo extends Prodotto{
    public $fasciaEta;
    public $aBaseDi;
      

    function __construct($_name, $_price, $_barCode, $_immagine, $_fasciaEta, $_aBaseDi)
    {
        parent::__construct($_name, $_price, $_barCode, $_immagine);
        $this->fasciaEta = $_fasciaEta;
        $this->aBaseDi = $_aBaseDi;
    }


    public function setFasciaEta($_fasciaEta){
        $this->fasciaEta = $_fasciaEta;
    }

    public function setABaseDi($_aBaseDi){
        $this->aBaseDi = $_aBaseDi;
    }

    public function getFasciaEta(){
        return $this->fasciaEta;
    }

    public function getABaseDi(){
        return $this->aBaseDi;
    }
}