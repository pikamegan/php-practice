<?php

   // add your code here
    $string = isset($_GET["string"]) ? $_GET["string"] : null;

    function cleanInput($string) {
        $cleanString = '';
        $pattern = '/[a-z]/i';
        for ($i=0; $i<strlen($string); $i++) {
            preg_match($pattern, $string[$i], $matches);
            if (isset($matches[0])) {
                $cleanString .= strtolower($matches[0]);
            }
        }
        return $cleanString;
    }

    function isPalindrome($cleanString) {
        for ($i=0; $i<strlen($cleanString); $i++) {
            if ($cleanString[$i] != $cleanString[-$i-1]) {
                return False;
            }
        }
        return True;
    }

    $result = cleanInput($string);
    if (isPalindrome($result)) {
        echo "The string $string is a palindrome<br>";
    }
    else {
        echo "The string $string is not a palindrome<br>";
    }
?>


<form>

    Enter the string : <input name="string" type="text">
    <br/>
    
    <input type="submit">
    
</form>