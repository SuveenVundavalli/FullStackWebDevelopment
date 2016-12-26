<?php
    echo "Hello World from PHP";
    echo '<br>';
    echo '<br>';
    print "The second line from PHP";

    $names[] = "Mark";
    $names[] = "John";
    $names[] = "Shaun";
    $names[] = "Harry";
    $names[] = "Walton";
    $names[] = "Lara";

    $SNo = 1;

    foreach($names as $name){
        echo '<br>';
        if($_REQUEST['var1']==$name){
            echo $SNo . ". " . $name . ' is an important Name<br>';
        } else {
            echo $SNo . ". " . $name . '<br>';
        }
        $SNo++;
    }
echo '<br>';
if(isset($_REQUEST['var2'])) {
    echo "We have some " . $_REQUEST['var2'] . '. We will eat them.';
}