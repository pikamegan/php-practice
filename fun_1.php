<?php

/* fun_1.php contains a form that accepts two integers, say n and f. 
Edit fun_1.php such that it display swhether f is a factor of n or not. 
You are required to implement a function called is_factor in fun_1.php that takes in 2 parameters n and f and returns True if f is a factor of n and False otherwise
*/

 // add your code here
 $n = isset($_GET["n"]) ? $_GET["n"] : null;
 $f = isset($_GET["f"]) ? $_GET["f"] : null;


 function inputNotEmpty($n, $f) {
    if (empty($n) or empty($f)) {
        return False;
    }
    return True;
 }

 function isFactor($n, $f) {
     if ($n%$f==0) {
         return True;
     }
     return False;
 }

 if (inputNotEmpty($n, $f)) {
    if (isFactor($n, $f)) {
        echo "$f is a factor of $n";
    }
    else {
        echo "$f is not a factor of $n";
    }
 }

?>


<form>

Enter an integer n: <input name="n" type="text">
<br/>
Enter another integer f: <input name="f" type="text">
<br/>

<input type="submit">

</form>
