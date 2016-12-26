<!doctype html>
<html lang="en">
<head>
    <title>PHP Conditional Statements</title>
</head>
<body>

    <?php

    $var1 = 8;
    $var2 = 9;

    // for loop

    for ($var3=1;$var3<=10;$var3++){
        switch($var3){
            case 1 : echo "1 st time for loop <br>";
            break;
            case 2 : echo "2 nd time for loop <br>";
            break;
            case 3 : echo "3 rd time for loop <br>";
            break;
            default : echo "$var3 th time for loop <br>";


        };
    }

    // while loop

    $var4 = 1; // Variable should be declare ealier in case of while loop
    while($var4<=10){
        switch($var4){
            case 1 : echo "1 st time while loop <br>";
                break;
            case 2 : echo "2 nd time while loop <br>";
                break;
            case 3 : echo "3 rd time while loop <br>";
                break;
            default : echo "$var4 th time while loop <br>";


        };
        $var4++;
    }

    // do-while loop

    $var5 = 1;
    do{
        switch($var5){
            case 1 : echo "1 st time do-while loop <br>";
                break;
            case 2 : echo "2 nd time do-while loop <br>";
                break;
            case 3 : echo "3 rd time do-while loop <br>";
                break;
            default : echo "$var5 th time do-while loop <br>";


        };
        $var5++;

    }while($var5<=10)

    ?>

</body>
</html>