<?php
    include 'header.php';
    //now we have access to all the variables in this file
    include_once 'includes/dbh.inc.php';
?>

<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php

    $sql = "SELECT * FROM users WHERE user_first = 'Amanda';";

    //1st param is the db connection
    //2nd is the SQL statement we want to query
    $result = mysqli_query($conn, $sql);

    //this just takes one param
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        //use a while loop so that it will keep spitting out data as long as we have data in the db
        //will fetch all the results from the result above, then assign it equal to the assigned row as an array??
        while($row = mysqli_fetch_assoc($result)){
            //each data result gets a name assigned to it that is equal to the column name in the db
            echo "<p>" . $row['user_uid'] . "</p>";
        }
    }
?>
</body>
</html>

