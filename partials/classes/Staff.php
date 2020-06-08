<?php

class Staff {
    // Props
    public $sector;
    public $name;
    public $lastname;
    public $email;
    public $salary;

    // Constructor
    public function __construct($_sec, $_n, $_ln, $_email, $_salary) {
        $this->sector = $_sec;
        $this->name = $_n;
        $this->lastname = $_ln;
        $this->email = $_email;
        $this->salary = '$' . number_format($_salary, 2);
    }
}

