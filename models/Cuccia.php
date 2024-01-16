<?php 
include_once __DIR__.'/Prodotto.php';
class Cuccia extends Prodotto{
    public $lunghezza;
    public $larghezza;
    
     
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  string $_immagine
     * @param  string $_tipoDiProdotto
     * @param  int $_lunghezza
     * @param  int $_larghezza
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria, $_immagine, $_tipoDiProdotto, $_lunghezza,$_larghezza)
    {
        parent::__construct($_name, $_price, $_barCode, $_categoria, $_immagine, $_tipoDiProdotto);
        $this->lunghezza = $_lunghezza;
        $this->larghezza = $_larghezza;
    }

}