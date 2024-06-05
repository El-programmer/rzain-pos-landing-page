<?php
$segments = explode('/', $_SERVER['REQUEST_URI']);

$lang = isset($segments[1]) ? $segments[1] : 'en';

if(!in_array($lang , ['ar','en']))
    $lang = "en";

$translations = include("lang/$lang.php");
function translate($text) {
    global $translations;
    return isset($translations[$text]) ? $translations[$text] : $text;
}


include "home.php";