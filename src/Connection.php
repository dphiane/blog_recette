<?php

namespace App;
use PDO;

class Connection{

    public static function getPDO(): PDO
    {
    $dns = "mysql:dbname=food_blog;host=localhost:3307";
    $user= "root";
    $pwd= "root";
        return new PDO($dns,$user, $pwd, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}