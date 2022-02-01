<?php

namespace App\Controllers;

use App\Models\Update;

class PainelController
{
    public static function sair()
    {
        session_destroy();
        header("Location: ../login");
    }

    public static function update()
    {
        Update::set($_POST['texto']);
    }

    public static function getContent()
    {

    }
}
