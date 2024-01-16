<?php 
include_once __DIR__.'/Prodotto.php';
class Gioco extends Prodotto{
    public $colore;
    public $peso;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  string $_immagine
     * @param  string $_tipoDiProdotto
     * @param  string $_colore
     * @param  int $_peso
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria, $_immagine, $_tipoDiProdotto, $_colore,$_peso)
    {
        parent::__construct($_name, $_price, $_barCode, $_categoria, $_immagine, $_tipoDiProdotto);
        $this->colore = $_colore;
        $this->peso = $_peso;
    }

}