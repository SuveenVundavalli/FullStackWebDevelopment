<!doctype html>
<html lang="en">
<head>
    <title>PHP Include and Require</title>
</head>
<body>

<!--To simply get variable information from one page to other page, use include/require command-->

<!--
When include command is used, even if the page is not available, we can see other blocks of code.
But if we use require, then we cannot use other blocks if required page is not available.
-->

<?php
    include "PHP196_SubPage_Receiver.php";
    echo $Name;
    echo "<br>";
    echo $Mobile_Number;
    echo "<br>";
    echo $Address;
    echo "<br>";

?>

<h2>After include</h2>

<br><br><br><br><br>


<?php
    require "PHP196_SubPage_Receiver.php";
    echo $Name;
    echo "<br>";
    echo $Mobile_Number;
    echo "<br>";
    echo $Address;
    echo "<br>";

?>
<h2>After Require</h2>

</body>
</html>