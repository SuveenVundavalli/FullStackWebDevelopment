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
        echo "
            <table border='1'>
                <thead>
                    <tr>
                        <th>S. No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Mobile</th>
                        <th>Date of birth</th>
                    </tr>
                </thead>
                <tbody>
            
            ";
    while( $rows = mysqli_fetch_assoc($run)){
        echo "
            
            <tr>
                <td>$rows[ID]</td>
                <td>$rows[Name]</td>
                <td>$rows[Email]</td>
                <td>$rows[Password]</td>
                <td>$rows[Mobile]</td>
                <td>$rows[Date]</td>

            </tr>
        ";
    }
    echo "
            </tbody>
            </table>
        ";

    ?>

</body>
</html>

