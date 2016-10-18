<?php

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

abstract class Product {
    
    protected $productName;
    protected $productID;
    protected $productPrice;
    protected $productAvailable;
    protected $productShipMethod;
    
    public function __construct($in_productName, $in_productID, $in_productPrice, $in_productAvailable, $in_shipMethod) {
        
        $this->productName = $in_productName;
        $this->productID = $in_productID;
        $this->productPrice = $in_productPrice;
        $this->productAvailable = $in_productAvailable;
        $this->productShipMethod = $in_shipMethod;
        
    }
    
    abstract public function getAvailableProductsNumber();
    abstract public function getShipMethod();
    
    public function getProductName() {
        return $this->productName;
    }
    
    public function getProductID() {
        return $this->productID;
    }
    
    final  public function getProductPrice() {
        return $this->productPrice;
    }
    
    public function getProductInStock() {
        return $this->productAvailable;
    }
    
    public function getShipmentMethod() {
        return $this->productShipMethod;
    }
    
}

class LocalProduct extends Product {
    
    public function getAvailableProductsNumber() {
        
        return "W magazynie pozostało jedynie ".parent::$productAvailable;
        
    }
    
    public function getShipMethod() {
        
        return "Sposób dostarczenia produktu: ".parent::$productShipMethod;
        
    }
    
    public function reserveProductNumber($num) {
        
        // Zapytanie do bazy w sprawie rezerwacji produktów
        $this->productAvailable -= $num;
        
    }
    
//    public function getProductPrice() { BO JEST FINALNA
//        return "Nie znam tej ceny, więc produkt jest bezcenny :)";
//    }
    
}

$obj = new LocalProduct("Szynka wiejska", "#132-465-798", 321.65, 100, "Przsyłka pocztowa");
echo "Liczba produktów przed rezerwacją: ".$obj->getProductInStock()."<br />";
$obj->reserveProductNumber(63);
echo "Liczba produktów po rezerwacji: ".$obj->getProductInStock()."<hr />";
echo "Cena produktu: ".$obj->getProductPrice();


?>