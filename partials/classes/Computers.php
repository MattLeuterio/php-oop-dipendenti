<?php

include_once __DIR__ . '/Products.php';

class Computers extends Products {
    public $computerCategory;
    public $brand;
    public $color;
    public $model;

    public function __construct($_cat, $_sector, $_idProd, $_price, $_quant, $_img, $_compCat, $_brand, $_color, $_model) {
        parent::__construct($_cat, $_sector, $_idProd, $_price, $_quant, $_img);
        
        $this->computerCategory = $_compCat;
        $this->brand = $_brand;
        $this->color = $_color;
        $this->model = $_model;
    }
}
