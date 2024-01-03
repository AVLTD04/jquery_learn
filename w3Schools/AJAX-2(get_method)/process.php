<?php

    $value1 = $_GET['number1'];
    $value2 = $_GET['number2'];
    $action = $_GET['action'];

    // echo "hii0";

    $math ="{$value1} {$action} {$value2}";
    $Answer = eval('return '.$math.';');
    

    echo "The Answer of {$value1} {$action} {$value2} = {$Answer}";

    ?>