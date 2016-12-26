<!doctype html>
<html lang="en">
<head>
    <title>PHP HTML Specidied Functions</title>
</head>
<body>

    <?php

    // Very important in case of collecting information from customer

        /*
         * htmlspecialchars(strings with html tags)     -   Instead of applying HTML code it displays html code.
         * strip_tags(strings with html tags)           -   Displays html code without applying/displaying any html tags.
         */


        $str1 = "Hello World";
        $str2 = "I want to become <b>professional</b> web developer. I love web development.";

        echo "$str2 <br>";

        echo htmlspecialchars($str2) . "<br>";

        echo strip_tags($str2) . "<br>";


    ?>

<p>This is a simple paragraph</p>

    <?php

    ?>
</body>
</html>