<!doctype html>
<html lang="en">
<head>
    <title>PHP URL Manipulation sub Page</title>
</head>
<body>

<!--GET and POST is discussed for the first time-->

<!--To get information passed through get varible with ? in url use $_GET[variable name]-->



<button><a href="PHP195_CreatingVariablesInURL.php">click me to go to main page</a></button>

<!--To get information passed through get varible with ? in url use $_GET[variable name]-->

<?php

/*
 * To check if there is any information passed through GET method use isset() inbuild function.
 *
*/

    //echo $_GET["var1"];

    echo "<br>";
    if(isset($_GET["name"]) && isset($_GET["mobile"])){
        echo "Name : $_GET[name] <br> Mobile : $_GET[mobile]";
    }elseif(isset($_GET["name"])){
        echo $_GET["name"];
    }elseif(isset($_GET["mobile"])){
        echo $_GET["mobile"];
    }
    else {
        echo "You didn't pass a variable";
    }

?>

</body>
</html>