<?php

class Products {
    // Props
    public $category;
    public $sector;
    public $idProduct;
    public $price;
    public $quantity;
    public $image;

    // Constructor
    public function __construct($_cat, $_sector, $_idProd, $_price, $_quant, $_img) {
        $this->category = $_cat;
        $this->sector = $_sector;
        $this->idProduct = $_idProd;
        $this->price = "€" . number_format($_price, 2);
        $this->quantity = $_quant;
        $this->image = $_img;
    }

}