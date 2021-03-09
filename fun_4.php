<?php

    /*
    A sandwich typically consists of cheese, meat or/and vegetables placed in between two slices of bread. 
    Consider a string “remember”, the sub-string “memb” is sandwiched between “re” and its mirror “er” on the other side.  
    In fun_4.php, write a function named get_sandwich that takes in a string and returns the sandwiched string, if any, or None. 

    */

    if(isset($_GET["string"])) {

        $string = $_GET["string"];
        
        echo "Sandwich substring for " . $string . ": " 
                    . get_sandwich($string) . " <br><br>";    
    }

    function hasBread($string) {
        if ($string[0] == $string[-1]) {
                return True;
        }
        return False;
    }

    function getBread($string) {
        $bread = 0;
        for ($i=0; $i<strlen($string); $i++) {
            if ($string[$i] == $string[-$i-1]) {
                $bread += 1;
            }
        }
        return floor($bread/2);
    }

    function get_sandwich($string) {

       // add your code here
       if (hasBread($string)) {
           $length = strlen($string)-(2*getBread($string));
           $sandwich = substr($string, getBread($string), $length);
           return $sandwich;
       }
       else {
           return "None";
       }
    }

?>


<form>

Enter a sandwich string: <input name="string" type="text">
<br/>

<input type="submit">

</form>
