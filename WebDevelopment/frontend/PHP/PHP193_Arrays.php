<!doctype html>
<html lang="en">
<head>
    <title>PHP Arrays</title>
</head>
<body>

    <?php

    // Index array
        $year = array();
        $year[1] = 1991;
        $year[2] = 1992;
        $year[3] = 1993;
        $year[4] = 1994;
        $year[5] = 1995;
        $year[6] = 1996;
        $year[7] = 1997;
        $year[8] = 1998;
        $year[9] = 1999;
        $year[10] = 2000;

        $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];



    //Associative arrays
        $days = array();
        $days['mon'] = "Monday";
        $days['tue'] = "Tuesday";
        $days['wed'] = "Wedesday";
        $days['thu'] = "Thursday";
        $days['fri'] = "Friday";
        $days['sat'] = "Saturday";
        $days['sun'] = "Sunday";


    //Array Identifier
        $vegetables = array('Onion','Tomato','Lady Finger');



    //Associative Identifier
        $employees = array(
            "Manager" => "John",
            "Director" => "Mark",
            "CEO" => "Albert"
        );




        echo $year[1];
        echo "<br>";
        echo $months[1];
        echo "<br>";
        echo $days['mon'];
        echo "<br>";
        echo $vegetables[1];
        echo "<br>";
        echo $employees['Manager'];
        echo "<br>";





    ?>

<p>This is a simple paragraph</p>

    <?php

    //for and foreach loops are used to print arrays

    foreach($months as $month){
        echo "$month <br>";
    }

    $count = count($year);
    echo "$count <br>"; //count() is used to find the number of elements in array


    for($a = 1; $a<=$count; $a++){
        echo "$year[$a] <br>";
    }

    ?>
</body>
</html>