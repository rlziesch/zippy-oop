<?php
    $dsn = 'mysql:host=xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dk3gu6vztlu6z6ncgit';
    $username = 'gwof063yrr7icqb7';
    $password = 's5wnc12xrptqdc5h';
    
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