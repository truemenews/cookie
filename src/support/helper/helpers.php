<?php
function parseUrl($url='')
{
    if (!$url) return $url;

    $arr = explode('/',$url);
    if(strpos($url, '.php') !== false || end($arr) == '') array_pop($arr);

    return implode('/',$arr);
}