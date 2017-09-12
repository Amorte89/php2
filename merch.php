<?php
class Merchandise { //добавление нового товара

    public $name; //название
    public $price; //цена
    public $weight; //вес

    public function __construct($name, $price, $weigth)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weigth;
        $this->newGood();
    }

    public function newGood() {
echo "New goods is stored:<br>"."1. Name: ".$this->name."<br>"."2. Price: ".$this->price."<br>"."3. Weight: ".$this->weight;
    }
};

new Merchandise("macbookpro 15", "$1000", "1kg");
