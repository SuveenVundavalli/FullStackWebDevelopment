<!doctype html>
<html lang="en">
<head>
    <title>PHP String Functions</title>
</head>
<body>

    <?php

        /*
         * List of all String Functions
         * str_replace(what to replace, with what, where)   -   replaces the string
         * str_word_count(string)                           -   Gives word count
         * st_repeat(string, how many times)                -   Repeats the string given number of times
         * stripos(main string, checking string)            -   Gives the character location of checking string in main string.
         * strtoupper(string)                               -   Converts string to upper case
         * strtolower(string)                               -   Converts string to lower case         *
         * ucfirst(string)                                  -   first letter of sentence capital
         * ucwords(string)                                  -   first letter of word capital
         */


        $str1 = "Hello World";
        $str2 = "I want to become professional web developer. I love web development.";

        echo $str1 . "<br>";
        $str_new =  str_replace("Hello","Hii, ", $str1);
        echo $str_new . "<br>";

        $str_word_count = str_word_count($str1);
        echo "$str_word_count <br>";

        echo str_repeat("$str1 <br>",5) . "<br>";

        echo stripos($str2,"web") . "<br>";

        echo substr($str2, 30, 3) . "<br>";

        echo strtoupper($str2) . "<br>";

        echo strtolower($str2) . "<br>";

        echo ucfirst($str2) . "<br>";

        echo ucwords($str2) . "<br>";


    ?>

<p>This is a simple paragraph</p>

    <?php

    ?>
</body>
</html>