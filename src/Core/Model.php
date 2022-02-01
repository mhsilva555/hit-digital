<?php

namespace App\Core;

use \App\Core\Database;

class Model {

    protected static $pdo;

    public function __construct() {
        self::_checkH();
    }

    public static function _checkH() {
        if (self::$pdo == null) {
            self::$pdo = Database::getInstance();
        } else {
            return self::$pdo;
        }
    }

}
