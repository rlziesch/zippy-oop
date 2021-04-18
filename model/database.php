<?php

class Database {
//for heroku use
//private static $dsn = 'mysql:host=d6rii63wp64rsfb5.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=c1tnb8hgmd4wamri';
//private static $username = 'inesmq7s1c0vzgbz';
//private static $password= 'b07drpndjah5jczn';

//for local use
private static $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
private static $username = 'root';
private static $db;

private function __construct() {}

public static function getDB() {
    if (!isset(self::$db)) {
        try {
            self::$db = new PDO(self::$dsn,
                                self::$username);
                                //,self::$password);
            } catch (PDOException $e) {
                $error = $e->getMessage();
                include('error.php');
                exit();
            }
        }
        return self::$db;
    }
}   
?>