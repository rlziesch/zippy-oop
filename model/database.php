<?php
    $dsn = 'mysql:host=xlf3ljx3beaucz9x.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dk3gu6vztlu6z6ncgit';
    $username = 'gwof063yrr7icqb7';
    $password = 's5wnc12xrptqdc5h';
    

    // Heroku connection
    /* 
    $dsn = 'mysql:host=AVeryLongURLprovidedforJawsDBhost;dbname=YourJawsDBdbname';
    $username = 'Your JawsDB username';
    $password = 'Your JawsDB password'; */
    
    try {
        //local development server connection
        //if using a $password, add it as 3rd parameter
        $db = new PDO($dsn, $username, $password);

        // Heroku connection
        //$db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('../view/error.php');
        exit();
    }
?>