<?php

/* tr_4.php contains a form that requests the user to enter a string. 
Edit str_4.php so that it displays the message “The string <input string> is apalindrome” if the input string is a palindrome, 
else print the message “The string <input string> is not apalindrome”.  
str_4.php  should ignore digits, empty spaces or any special characters in the input stringwhen evaluating for a palindrome. */

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
