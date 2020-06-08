<?php

include_once __DIR__ . '/Staff.php';

class RetailEmployee extends Staff {
    //Props
    public $shopLocation;

    // Constructor
    public function __construct($_sec, $_n, $_ln, $_email, $_salary, $_shopLoc) {
        parent::__construct($_sec, $_n, $_ln, $_email, $_salary);

        $this->shopLocation = $_shopLoc;

    }
}