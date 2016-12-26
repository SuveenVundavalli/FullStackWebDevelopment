<!doctype html>
<html lang="en">
<head>
    <title>PHP Functions</title>
</head>
<body>

    <?php

    $d = 5;
    $e = 6;
    function func1($country){
        global $var1;
        $GLOBALS[''];
        $var1 =  "I live in $country. <br>";
        return $var1;

    }

    echo func1("India");
    echo $var1;

    echo func1("Sweden");

    ?>

<p>This is the simple Paragraph</p>

    <?php
    function calc1($a,$b){
        $c = $a + $b;
        return $c;
    }
    /* Using Global Variables.
    There are two types of declaring global variables.

    1. writing global syntax
    2. All variables are saved in a a global ($GLOBALS) varible in array. We can just simply call it.
    */
    function calc2(){
        global $d;              // First method
        $e = $GLOBALS['e'];    // Second method accessing $e stored in global variable
        $f = $d+$e;
        return $f;
    }

    echo calc1(3,4) . '<br>';
    echo calc2() . '<br>';

    ?>
</body>
</html>