<?php

abstract class Goods{
    const PROFIT_PERCENT = 10;
    abstract public function totalCost ();
    abstract public function profitCalc();

}

class DigitalGood extends Goods{

    const DIGITAL_GOOD_PRICE = 100;

    private $amount;

    public function __construct($amount)
    {
        self::setAmount($amount);
    }

    public function getPrice() {
        return DIGITAL_GOOD_PRICE;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setAmount($amount=0)
    {
        $this->amount = $amount;
    }

    public function totalCost() {
        return self::DIGITAL_GOOD_PRICE * $this->amount;
    }

    public function profitCalc() {
        return self::DIGITAL_GOOD_PRICE * $this->amount / 100 * parent::PROFIT_PERCENT;
    }
}

class RealGood extends DigitalGood {

    public function getPrice()
    {
        return parent::DIGITAL_GOOD_PRICE * 2;
    }

    public function totalCost()
    {
        return self::DIGITAL_GOOD_PRICE * 2 * parent::getAmount();
    }

    public function profitCalc()
    {
        return parent::DIGITAL_GOOD_PRICE * 2 * parent::getAmount() / 100 * parent::PROFIT_PERCENT;
    }
}

class WeightGood extends Goods {

    private $price;
    private $weigth;

    public function __construct($price, $weight)
    {
        self::setPrice($price);
        self::setWeight($weight);
    }

    public function setPrice($price=0) {
        $this->price = $price;
    }

    public function setWeight($weight=0){
        $this->weigth = $weight;
    }

    public function totalCost() {
        return $this->price * $this->weigth;
    }

    public function profitCalc(){
        return $this->price * $this->weigth / 100 * parent::PROFIT_PERCENT;
    }
}


$obj_digital = new DigitalGood(5);
echo $obj_digital->totalCost ()."<br>";
echo $obj_digital->profitCalc()."<br>";

$obj_real = new RealGood(5);
echo $obj_real->totalCost ()."<br>";
echo $obj_real->profitCalc()."<br>";

$obj_weight = new WeightGood(5,100);
echo $obj_weight->totalCost ()."<br>";
echo $obj_weight->profitCalc()."<br>";


//задание 2 - тут не совсем знал как делать правильно, теперь разобрался.

trait getObj
{
    public static function getObj()
    {
        if (is_null(self::$objSingleton)) {
            self::$objSingleton = new self();
        }
        return self::$objSingleton;
    }
}


class MySingletonPattern
{
    private static $objSingleton;

    private function __construct()
    {
    }

    use getObj;

}

$obj1 = MySingletonPattern::getObj();



