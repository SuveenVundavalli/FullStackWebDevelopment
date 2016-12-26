<!doctype html>
<html lang="en">
<head>
    <title>PHP URL Manipulation Main page</title>
</head>
<body>

<!--GET and POST is discussed for the first time-->

    <?php

    ?>
<!--To pass information from one page to other page through GET method, put question mark (?) and variable data after the url-->
<!--You can also add Spaces in the data-->
<button><a href="PHP195_SubPage_Receiver.php">click me to go to sub page without variable</a></button> <br>
<button><a href="PHP195_SubPage_Receiver.php?name=Suveen">click me to go to sub page with Name</a></button> <br>
<button><a href="PHP195_SubPage_Receiver.php?mobile=8686242020">click me to go to sub page with Mobile Number</a></button> <br>
<button><a href="PHP195_SubPage_Receiver.php?name=Suveen&mobile=8686242020">click me to go to sub page with Name and Mobile Number</a></button> <br>

</body>
</html>