<!doctype html>
<html lang="en">
<head>
    <title>Getting Form Data</title>
</head>
<body>

<form action="" method="get"> <!--Default method is get hance method need not mention-->
    <label for="#username">User Name</label>
    <input type="text" id="username" placeholder="Insert Username" name="username">
    <input type="hidden" name="check" value="yes"> <br>
    <label for="#password">Password</label>
    <input type="password" id="password" name="password" placeholder="Password">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>

<?php
    if(isset($_GET['check'])){
        $username = $_GET['username'];
        echo $username;
        echo "<br>";
        $password = $_GET['password'];
        echo $password;
        echo "<br>";

    }
    else {
        echo "No input";
        echo "<br>";
    }
?>