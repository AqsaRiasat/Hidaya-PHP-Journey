<?php
require_once("Author.php");

class Book extends Author {
    private $bookName;
    private $price;
    private $qtyInStock = 0;

    public function __construct($bName, $authName, $authEmail, $authGender, $pr, $qty = 0) {
        parent::__construct($authName, $authEmail, $authGender);
        
        $this->bookName = $bName;
        
        if ($pr > 0) {
            $this->price = $pr;
        } else {
            $this->price = 0;
        }

        if ($qty >= 0) {
            $this->qtyInStock = $qty;
        } else {
            $this->qtyInStock = 0;
        }
    }

    public function getBookName() {
        return $this->bookName;
    }

    public function setBookName($bName) {
        $this->bookName = $bName;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($pr) {
        if ($pr > 0) {
            $this->price = $pr;
        }
    }

    public function getQtyInStock() {
        return $this->qtyInStock;
    }

    public function setQtyInStock($qty) {
        if ($qty >= 0) {
            $this->qtyInStock = $qty;
        }
    }

    public function printBook() {
        echo "'" . $this->bookName . "' by " . $this->getName() . " (" . $this->getGender() . ") @ " . $this->getEmail() . "<br />";
    }

    public function getAuthorName() {
        return $this->getName();
    }
}
?>