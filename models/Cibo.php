<?php 

include_once __DIR__.'/Prodotto.php';
class Cibo extends Prodotto{
    public $fasciaEta;
    public $aBaseDi;
      
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  string $_immagine
     * @param  string $_tipoDiProdotto
     * @param  string $_fasciaEta
     * @param  string $_aBaseDi
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria,$_immagine, $_tipoDiProdotto, $_fasciaEta,$_aBaseDi)
    {
        parent::__construct($_name, $_price, $_barCode, $_categoria, $_immagine, $_tipoDiProdotto);
        $this->fasciaEta = $_fasciaEta;
        $this->aBaseDi = $_aBaseDi;
    }

}