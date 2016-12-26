<!doctype html>
<html lang="en">
<head>
    <title>PHP Static Keyword</title>
</head>
<body>

    <?php

        function calc1(){
            // static keyword is used to update and store the value that it last updated.
            static $a = 0; // $a will be 0 only the first time it's accessed. second time it will have the value that it last updated to.
            $a++;
            return $a;

        }

    ?>

<p>This is a simple paragraph</p>

    <?php
        echo calc1();
        echo "<br>";
        echo calc1();
        echo "<br>";
        echo calc1();
        echo "<br>";

    ?>
</body>
</html>