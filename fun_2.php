<?php

/* fun_2.php contains a form that accepts two integers, say m and n. 
Edit fun_2.php such that it displays the sum of the powers from m^0 to m^n (i.e, m^0 + m^1 + m^2 + ... + m^n). 
In fun_2.php, you are required to define a function named sum_of_powers that takes in 2 parameters m and n 
and computes the sum of the powers from m^0 to m^n and returns the sum */

// add your code here
$m = isset($_GET["m"]) ? $_GET["m"] : null;
$n = isset($_GET["n"]) ? $_GET["n"] : null;

function sumOfPowers($m, $n) {
    $sum = 0;
    for ($i=0; $i<=$n; $i++) {
        $sum += $m**$i;
    }
    return "Sum of all powers is $sum";
}

echo sumOfPowers($m, $n);

?>


<form>

Enter an integer m: <input name="m" type="text">
<br/>
Enter another integer n: <input name="n" type="text">
<br/>

<input type="submit">

</form>
