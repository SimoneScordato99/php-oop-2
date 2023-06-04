<?php

class CanGatto extends Prodotti{

    public $caneGatto;
    public $tipo;

    public function __construct($_nome, $_prezzo, $_marca , Tipo $_tipo ,$_caneGatto ){
        parent::__construct($_nome, $_prezzo, $_marca );
        $this->tipo = $_tipo;
        $this->caneGatto = $_caneGatto;

    }

}