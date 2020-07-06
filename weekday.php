<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHPPHPHPHP</title>
</head>
<body>
    
<?php
    //date is already a php function
    $dayofweek = date("w"); //w means the number day of the week (Friday = 5)
    // echo $dayofweek;

    switch ($dayofweek) {
        case 1:
            echo "<p>It is Monday</p>";
        break;
        case 2:
            echo "<p>It is Tuesday</p>";
        break;
        case 3:
            echo "It is Wednesday";
        break;
        case 4:
            echo "It is Thursday";
        break;
        case 5:
            echo "It is Friday";
        break;
        case 6:
            echo "It is Saturday";
        break;
        case 0:
            echo "It is Sunday";
        break;
    }

?>

</body>
</html>

