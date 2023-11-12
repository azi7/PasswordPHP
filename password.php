<?php

function SimplePassword($str) {
    
    $hasCapital = preg_match('/[A-Z]/', $str);

    
    $hasNumber = preg_match('/\d/', $str);

    
    $hasSymbol = preg_match('/[^\w\s]/', $str);

    
    $doesNotContainPassword = stripos($str, 'password') === false;

    
    $isWithinLengthRange = strlen($str) > 7 && strlen($str) < 31;

    
    $isValidPassword = $hasCapital && $hasNumber && $hasSymbol && $doesNotContainPassword && $isWithinLengthRange;

    
    return $isValidPassword ? 'true' : 'false';
}

// Example usage
$str = "apple!M7";
$result = SimplePassword($str);
echo $result;

?>