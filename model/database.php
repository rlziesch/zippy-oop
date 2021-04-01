<?php
$dsn = 'mysql:host=g84t6zfpijzwx08q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=hj1uw7504aalaap8';
$username = 'l1um6e8judhzu9xh';
$password= 'ez5fostyl2bkquz2';
//no $password

try {
    //establish connection to database
    $db = new PDO($dsn, $username, $password);
    // echo "You are connected to the database.";
} //incase of error
    catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include('.view/error.php');
    exit();
}



    
?>