<?php

/* str_5.php contains a form that asks the user to enter two strings. 
Let us call the first string str1 and the second string str2. 
Edit str_5.php such that it displays "Bingo!" if every character in str1 also appears in str2.  
Otherwise, it displays "Nope :( " */

// add your code here
$str1 = isset($_GET["str1"]) ? $_GET["str1"] : null;
$str2 = isset($_GET["str2"]) ? $_GET["str2"] : null;

function inputNotEmpty($str1, $str2) {
    if (empty($str1) or empty($str2)) {
        return False;
    }
    return True;
}

function charactersInString($str1, $str2) {
    for ($i=0; $i<strlen($str1); $i++) {
        if (!str_contains($str2, $str1[$i])) {
            return False;
        }
    }
    return True;
}

if (inputNotEmpty($str1, $str2)) {
    if (charactersInString($str1, $str2)) {
        echo "Bingo!";
    }
    else {
        echo "Nope :(";
    }
}

?>


<form>

Enter characters: <input name="str1" type="text">
<br/>
In string? : <input name="str2" type="text">
<br/>

<input type="submit">

</form>
