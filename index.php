<?php

class Prodotto{
    public $name;
    public $price;
    public $barCode;
    public $categoria;
    
       
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria)
    {
        $this->name=$_name;
        $this->price=$_price;
        $this->barCode=$_barCode;
        $this->setTarget($_categoria);
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
}



class Cibo extends Prodotto{
    public $fasciaEta;
    public $aBaseDi;
    
         
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  string $_fasciaEta
     * @param  string $_aBaseDi
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria,$_fasciaEta,$_aBaseDi)
    {
        parent::__construct($_name, $_price, $_barCode, $_categoria);
        $this->fasciaEta = $_fasciaEta;
        $this->aBaseDi = $_aBaseDi;
    }

}

class Gioco extends Prodotto{
    public $colore;
    public $peso;
    
     
        
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  string $_colore
     * @param  int $_peso
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria,$_colore,$_peso)
    {
        parent::__construct($_name, $_price, $_barCode, $_categoria);
        $this->colore = $_colore;
        $this->peso = $_peso;
    }

}

class Cuccia extends Prodotto{
    public $lunghezza;
    public $larghezza;
    
     
    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_price
     * @param  int $_barCode
     * @param  string $_categoria
     * @param  int $_lunghezza
     * @param  int $_larghezza
     * @return void
     */
    function __construct($_name, $_price, $_barCode, $_categoria,$_lunghezza,$_larghezza)
    {
        parent::__construct($_name, $_price, $_barCode, $_categoria);
        $this->lunghezza = $_lunghezza;
        $this->larghezza = $_larghezza;
    }

}

$prova = new Prodotto('crocchette',20, 1246465,'cani');
$cibo = new Cibo('crocchette',20, 1246465,'cani','adulto','pollo e tacchino');
var_dump($prova);
var_dump($cibo);
?>