<!doctype html>
<html lang="en">
<head>
    <title>PHP Conditional Statements</title>
</head>
<body>

    <?php

    $var1 = 8;
    $var2 = 9;

    if($var1 == $var2) {
        echo "Valid <br>";
    } elseif($var <= $var2) {
        echo "Partially Valid <br>";
    } else {
        echo "Not Valid <br>";
    }

    if($var1 != var2){
        echo "Valid <br>";
    }

    ?>

</body>
</html>