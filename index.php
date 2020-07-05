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
?>

</body>
</html>

