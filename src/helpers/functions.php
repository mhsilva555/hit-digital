<?php

use App\Config;

function Url() {
    $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
    $base .= $_SERVER['SERVER_NAME'];
    if($_SERVER['SERVER_PORT'] != '80') {
        $base .= ':'.$_SERVER['SERVER_PORT'];
    }
    $base .= Config::BASE_DIR;

    return $base;
}

function Assets() {
    echo Url() . '/resources';
}
