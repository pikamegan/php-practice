<?php

/* str_3.php contains a form that asks the user to enter a string, say text, and two characters, say start andend. 
Edit str_3.php that searches for a substring in text such that the substring begins with the characterstart and ends with the character end. 
If there is no such substring, display the message "No suchsubstring". 
*/ 

// add your code here
$text = isset($_GET["text"]) ? $_GET["text"] : null;
$start = isset($_GET["start"]) ? $_GET["start"] : null;
$end = isset($_GET["end"]) ? $_GET["end"] : null;

function inputNotEmpty($text, $start, $end) {
    if (empty($text) or empty($start) or empty($end)) {
        return False;
    }
    return True;
}

function hasStartAndEnd($text, $start, $end) {
    if (str_contains($text, $start) and str_contains($text, $end)) {
        return True;
    }
    return False;
}

function returnSubstring($text, $start, $end) {
    $startOfSubstring = strpos($text, $start);
    $endOfSubstring = strpos($text, $end)+1;
    $lengthOfSubstring = $endOfSubstring - $startOfSubstring;

    return substr($text, $startOfSubstring, $lengthOfSubstring);
}

if (inputNotEmpty($text, $start, $end)) {
    if (hasStartAndEnd($text, $start, $end)) {
        $substringToReturn = returnSubstring($text, $start, $end);
        echo "Substring [$substringToReturn] is found<br>";
    }
    else {
        echo "No such substring";
    }
}
else {
    echo "No such substring";
}


?>


<form>

Enter the string : <input name="text" type="text">
<br/>
Enter the start char : <input name="start" type="text">
<br/>
Enter the end char : <input name="end" type="text">
<br/>

<input type="submit">

</form>
