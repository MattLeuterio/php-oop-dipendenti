<?php
/**
 * MYCLASS
 */

 class salaryUtilities {
     
    // Methods
    public function annualSalary($sal) {
        if(!is_int($sal)) {
            throw new Exception('Operation unavailable');
        }
        return $sal * 13;
    }
}

$sUtil = new salaryUtilities();

// perform Operation

try {
   echo $sUtil->annualSalary('ciao');
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage() . '<br>';
 

    $host = $_SERVER['HTTP_HOST'];
    $uri =  dirname($_SERVER['PHP_SELF']);
    $page = 'error.php';

    header("Location: http://$host$uri/$page?message={$e->getMessage()}");
}