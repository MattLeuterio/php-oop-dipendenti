<?php

include_once __DIR__ . '/Products.php';

class Software extends Products {
    public $softwareCategory;
    public $name;
    public $softwareHouse;
    public $os;

    public function __construct($_cat, $_sector, $_idProd, $_price, $_quant, $_img, $_softCat, $_name, $_softHouse, $_os) {
        parent::__construct($_cat, $_sector, $_idProd, $_price, $_quant, $_img);

        $this->softwareCategory = $_softCat;
        $this->name = $_name;
        $this->softwareHouse = $_softHouse;
        $this->os = $_os;
        
    }
}