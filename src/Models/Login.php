<?php

namespace App\Models;

use App\Core\Database;

class Login extends Database
{

    public static function get($params)
    {
        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        self::getInstance();

        $query = self::$_pdo->query("SELECT * FROM users WHERE user = '{$user}' AND password = '{$pass}'");
        $read = $query->fetch(\PDO::FETCH_ASSOC);

        if(is_array($read) AND count($read) > 0):
            $_SESSION['login'] = true;
            header('Location: ./painel');
        else:
            header('Location: ./login');
        endif;

        return $read;
    }

}
