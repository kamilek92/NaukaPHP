<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 17.10.2016
 * Time: 17:29
 */
abstract class Product{


    protected $produkName;
    protected $productID;
    protected $produktPrice;
    protected $producktAvailable;
    protected $produktShioMethod;


    /**
     * Product constructor.
     * @param $produkName
     * @param $productID
     * @param $produktPrice
     * @param $producktAvailable
     * @param $produktShioMethod
     */
    public function __construct($produkName, $productID, $produktPrice, $producktAvailable, $produktShioMethod)
    {
        $this->produkName = $produkName;
        $this->productID = $productID;
        $this->produktPrice = $produktPrice;
        $this->producktAvailable = $producktAvailable;
        $this->produktShioMethod = $produktShioMethod;
    }

    abstract public function getAvaiableProductsNumer();
    abstract public function getShioMethod();

    /**
     * @return mixed
     */
    public function getProdukName()
    {
        return $this->produkName;
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return mixed
     */
    public function getProduktPrice()
    {
        return $this->produktPrice;
    }

    /**
     * @return mixed
     */
    public function getProducktAvailable()
    {
        return $this->producktAvailable;
    }

    /**
     * @return mixed
     */
    public function getProduktShioMethod()
    {
        return $this->produktShioMethod;
    }





}


class LocalProduct extends Product {

    public function getAvaiableProductsNumer()
    {
        return "W magazynie zostało".parent::getProducktAvailable();
    }

    public function getShioMethod()
    {
        // TODO: Implement getShioMethod() method.
    }


    public function reserverProcudtNumer($sum){
        $this->producktAvailable -= $sum;
    }
}


$obj = new LocalProduct("Szynka", 1, 1,1,"Przesyłka");
echo "Liczba produktów". $obj->getProducktAvailable()."<br/>";
