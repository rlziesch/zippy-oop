<?php

class Database {
//for heroku use
private static $dsn = 'mysql:host=u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=ijirs3sxwmlg17ox';
private static $username = 'ykxvv83rr9wo0imm';
private static $password= 'ofiehgihgtoorgr3';
private static $db;

//for local use
//private static $dsn = 'mysql:host=localhost;dbname=zippyusedautos';
//private static $username = 'root';
//private static $db;

private function __construct() {}

public static function getDB() {
    if (!isset(self::$db)) {
        try {
            self::$db = new PDO(self::$dsn,
                                self::$username,
                                self::$password);
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