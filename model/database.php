<?php
//$dsn = 'mysql:host=d6rii63wp64rsfb5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=c1tnb8hgmd4wamri';
//$username = 'inesmq7s1c0vzgbz';
//$password= 'b07drpndjah5jczn';

//for local use
//$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
//$username = 'root';

try {
    //establish connection to database, remember to // out password if local
    $db = new PDO($dsn, $username, $password
    );
    // echo "You are connected to the database.";
} //incase of error
    catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include('.view/error.php');
    exit();
}



    
?>