<?php

spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    if (empty($className)) {
        echo 'Error: No Class was used';
    }

    // search
    if (strpos($url, 'includes') !== false) {
        $path = '../../src/classes/';
    } else {
        $path = '../src/classes/';
    }

    $extension = '.php';

    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    require_once $fullPath;
}
