<?php

namespace App\Controllers;

use App\Models\Login;

class LoginController
{
    public function loginUser()
    {
        $users = Login::get($_POST);
    }
}
