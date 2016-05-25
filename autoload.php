<?php

function __autoload($class_name) {
    if (file_exists($path = __DIR__ . '/class/' . $class_name . '.php')) {
        include $path;
    }

    if (file_exists($path = __DIR__ . '/controller/' . $class_name . '.php')) {
        include $path;
    }

    if (file_exists($path = __DIR__ . '/view/' . $class_name . '.php')) {
        include $path;
    }

    if (file_exists($path = __DIR__ . '/modul/' . $class_name . '.php')) {
        include $path;
    }

}