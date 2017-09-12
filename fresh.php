<?php
require "merch.php";

class FreshSupply extends Merchandise { //новые поставки

    public $supply;

    public function __construct($name, $price, $weigth, $supply){
        parent::__construct($name, $price, $weigth);
        $this->supply = $supply;
        $this->show();
    }

    public function show () {
        echo "<hr>Fresh supply: ".$this->supply."!<br>"."1. Name: ".$this->name."<br>"."2. Price: ".$this->price."<br>"."3. Weight: ".$this->weight;
    }
}

new FreshSupply("macbook 12", "$800", "0.6kg", "13/09");
