<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPPHPHPHP</title>
</head>
<body>

<!-- give form method and action -->
<form method="GET">
    <input name="person" type="text">
    <button>SUBMIT</button>
</form>
    
<?php
    // //echo loads faster
    // echo "Hello world ";
    // //numbers do not have to be in quotations
    // print 123;

    //create a variable
    //set variable to the input value
    //$name = $_GET['person'];
    //need a dot between php code and where a string starts
    //echo $name." is a beautiful amazing person";

    //this is a predetermined function
    //strlen = string length
    echo str_replace("Amanda", "Ben", "Hi Amanda");

    //DATA TYPES

    //String
    $name = 'Coding is life';

    //Integer
    $name = 20;

    //Float
    $name = 20.5784;

    //Boolean
    //can be used for conditional testing
    true = 1
    false = 0

    //Array
    $names = array("Amanda", "Ben", "Sam");
    echo $names['0'];

    //Arithmetic Operators
    echo 5+5;
    echo 8%5 // get remainder after dividing
    echo 5**5 //5 to the power of 5

    //Assignment Operators
    $x = 100;
    $x +- 20; // $x = $x + 20;
    
    echo $x

    //Comparison Operators
    $x = 5;
    $y = 10;

    if ($x > $y) {
        echo "True";
    }
    else {
        echo "False";
    } 

    //Increment/Decrement Operator
    $x = 10;
    echo ++$x;

    //Logical Operators
    //can use 'and' or 'or'
    //|| = or && = and
    //xor one of these must be true, but only one can be true

    $x = 10;
    $y = 20;

    if ($x == $y xor 1 == 1) {
        echo "True";
    }

    //Else if
    $x = 2;

    if ($x == 1) {
        echo "Yay!";
    } 
    else if ($x == 2) {
        echo "Maybe";
    } 
    else if ($x == 3) {
       echo "Probably not";
   } 
    else {
        echo "Nope";
    }

    //Switch
    $x = 8;

    switch ($x) {
        case 1:
            echo "The answer is 1";
        break;
        case 2:
            echo "The answer is 2";
        break;
        case 3:
            echo "The answer is 3";
        break;
        case 4:
            echo "The answer is 4";
        break;
        default:
            echo "There is no answer";
    }
?>

</body>
</html>

