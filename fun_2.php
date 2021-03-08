<?php

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