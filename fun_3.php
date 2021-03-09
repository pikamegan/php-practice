<?php

/* fun_3.php contains a form that accepts two integers, say min and max. 
Edit fun_3.php such that it displays all the perfect squares between min and max. 
For example, given min=10 and max=110, it displays the perfect squares – 16 25 36 49 64 81 100. */

if(isset($_GET["min"]) && isset($_GET["max"])) {

    $min = $_GET["min"];
    $max = $_GET["max"];

    $result = print_squares($min, $max);

}

    function print_squares ($min, $max) {

       // add your code here
       for ($i=ceil(sqrt($min)); $i<=floor(sqrt($max)); $i++) {
           $result = $i**2;
           echo $result . " ";
           }
    }

?>


<form>

Enter an integer min: <input name="min" type="text">
<br/>
Enter another integer max: <input name="max" type="text">
<br/>

<input type="submit">

</form>
