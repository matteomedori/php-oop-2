<?php

class Prodotto{
    public $name;
    public $price;
    public $barCode;
    public $categoria;
    public $immagine;
    public $tipoDiProdotto;
    
       
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  string $_immagine
     * @param  string $_tipoDiProdotto
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria, $_immagine, $_tipoDiProdotto)
    {
        $this->name=$_name;
        $this->price=$_price;
        $this->barCode=$_barCode;
        $this->immagine=$_immagine;
        $this->setTarget($_categoria);
        $this->setTipoDiProdotto($_tipoDiProdotto);
    }
    
    /**
     * setTarget
     *
     * @param  string $_categoria
     * @return void
     */
    public function setTarget($_categoria){
        if($_categoria === 'cani' || $_categoria === 'gatti'){
            $this->categoria = $_categoria;
        }

    }
    
    /**
     * setTipoDiProdotto
     *
     * @param  string $_tipoDiProdotto
     * @return void
     */
    public function setTipoDiProdotto($_tipoDiProdotto){
        if($_tipoDiProdotto === 'cibo' || $_tipoDiProdotto === 'cuccia' || $_tipoDiProdotto === 'gioco'){
            $this->tipoDiProdotto = $_tipoDiProdotto;
        }

    }
}