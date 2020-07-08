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

    //---LOOPS--//

     //Loop

    //While loop
        $x = 1;
        //will happen as long as the statement is true
        while ($x < 5) {
            echo "<p>hi there</p><br>";
            $x++;
        }

    //Do while loop
        $x = 1;
        //will always write it once first, then it will continue if the statement is true
        do {
            echo "<p>hi there</p><br>";
            $x++;
        }
        while ($x <= 5)

    //For loop
        //first param = initializing counter
        //second param - when to stop looping
        //third param = how many times to increase before looping something out
        for ($x = 0; $x < 10; $x++) {
            echo "<p>Hi</p><br>";
        };

    //For each loop
        $array = array("Ben", "Amanda", "Sam", "Brian", "Britta");
        //refer to an array in the parantheses
        //loops through every time we mention something in the array
        foreach ($array as $loopdata) {
            echo "<p>My name is " .$loopdata. "</p><br>";
        }

    //Custom function
        //it will go looking for the variable outside the function - it can be anywhere in the code, just has to be before the function is called
        function newCalc($x) {
            $newnr = $x * 0.75;
            echo "<p>Here is 75% of your number: ".$newnr. "</p>";
        }
    
        $x = 100;
        newCalc($x);
    
        $a = 10;
        newCalc($a);

    //global and local scopes
        //global scope
        $x = 5;

        function something(){
            //local scope
            $y = 10;
        }

    //Super Globals
    //$_GLOBALS
        //global scope
        $x = 5;

        function something(){
            //local scope
            $y = 10;
            echo $GLOBALS['x']
        }

        //this will print 5
        something();

    //$_POST
    //$_GET

        //the method tells the submit button what to do with the information -->
        //get will pass the info into url, and we can see it in url. post will pass into url, but we can not see it -->
        <form method="GET">
        <input type="hidden" name="name" value="AMANDA">
        <button type="submit">CLICK ME!</button>
        </form>
        </body>

        <?php
        echo $_GET['name']
        ?>

    //$_COOKIE
    //$_SESSION

        //session makes the computer remember who is logged in
        //session ends as soon as you close the browser.
        //cookies have time limits (like 30 days or a month)
        //hackers have an easier time accessing cookies
        //cookies can be used for remembering what kind of clothing someone likes, but NOT LOG IN INFO

        //make a cookie
        //1st param - must have - name of cookie
        //2nd param - value
        //3rd param - expiration time. time() takes the current time (86400 is a day in milliseconds)
        //to destroy a cookie, set the milliseconds to negative (-86400)
        setcookie("name", "Amanda", time() + 86400)

        //set the name equal to amanda
        //because this is in session, hackers will NOT be able to see this
        $_SESSION['name'] = "Amanda";
        $_SESSION['username'] = "amanda92";

        //this prints the username, or whatever variable you had set to session
        echo $_SESSION['username'];

        //this will save the session variable inside the session for all pages
        //you can put this in the header, so every page gets the variable
        session_start();

        // check if logged in
        if (!isset($_SESSION['username'])) {
            echo "You are not logged in";
        } else {
            echo "You are logged in!";
        }
?>

</body>
</html>

