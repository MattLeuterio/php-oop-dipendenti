<?php

include_once __DIR__ . '/Staff.php';

class AdministrativeEmployee extends Staff {
    //Props
    public $officeLocation;

    // Constructor
    public function __construct($_sec, $_n, $_ln, $_email, $_salary, $_offLoc) {
        parent::__construct($_sec, $_n, $_ln, $_email, $_salary);

        $this->officeLocation = $_offLoc;

    }
}