<?php

// die and dump 
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

// base path
function base_path($path)
{
    return BASE_PATH . $path;
}
