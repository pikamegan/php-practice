<?php

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