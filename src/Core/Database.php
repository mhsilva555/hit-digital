<?php

namespace App\Core;

use App\Config;

class Database
{
    public static $_pdo;

    public static function getInstance()
    {
        if (!isset(self::$_pdo)) {
            $options = array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            );
            self::$_pdo = new \PDO(Config::DB_DRIVER.":dbname=".Config::DB_DATABASE.";host=".Config::DB_HOST, Config::DB_USER, Config::DB_PASS, $options);
        }
        return self::$_pdo;
    }
}
