<?php
require "merch.php";

class SaleGood extends Merchandise { //товары со скидкой

    public $saleprice;

    public function __construct($name, $price, $weigth, $saleprice){
        parent::__construct($name, $price, $weigth);
        $this->saleprice = $saleprice;
        $this->show();
    }

    public function show () {
        echo "<hr>Goods on sale:<br>"."1. Name: ".$this->name."<br>"."2. Price: ".$this->price." SALE: ".$this->saleprice."!<br>"."3. Weight: ".$this->weight;
    }
}

new SaleGood("macbookpro 13", "$700", "0.7kg", "20%");
