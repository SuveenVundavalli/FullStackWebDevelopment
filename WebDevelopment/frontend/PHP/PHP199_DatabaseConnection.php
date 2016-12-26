<?php
    $server = "localhost";
    $username = "php_tutorials";
    $password = "12345678";
    $db = "PHP_Tutorials";
    // Connecting to Database
    $conn = mysqli_connect($server,$username,$password,$db);
?>
<!doctype html>
<html lang="en">
<head>
    <title>PHP Database Connection</title>
</head>
<body>

    <?php
    //Selecting All rows from Table Users
    $sql = "SELECT * FROM Users";

    // Connecting and then selecting
    $run = mysqli_query($conn,$sql);

    //Displaying information from database

    while( $rows = mysqli_fetch_assoc($run)){
        echo $rows['Name'];
        echo "<br>";
        echo $rows['Email'];
        echo "<br>";
        echo $rows['Password'];
        echo "<br>";
        echo $rows['Mobile'];
        echo "<br>";
        echo $rows['Date'];
        echo "<br>";

    }


    ?>

</body>
</html>

