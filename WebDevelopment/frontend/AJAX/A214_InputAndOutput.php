<?php
    $countries[] = 'India';
    $countries[] = 'USA';
    $countries[] = 'UK';
    $countries[] = 'Sweden';
    $countries[] = 'Russia';
    $countries[] = 'China';
    $countries[] = 'Brazil';
    $countries[] = 'Canada';
    $countries[] = 'Australia';
    $countries[] = 'Pakistan';
    $countries[] = 'Sri Lanka';

    $SNo = 1;

    foreach($countries as $country) {
        //echo '<br>' . $SNo . ". ". $country;
        //$SNo++;
        if (isset($_REQUEST['var1'])) {
           if($_REQUEST['var1'] == $country){
               echo "<div style = 'color: green;'>". $_REQUEST['var1']. " is in the List.</div>";
            }
        }
    }

?>
