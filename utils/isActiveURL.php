<?php
function isActiveURL($url)
{
    $currentURL = $_SERVER['REQUEST_URI'];
    return strpos($currentURL, $url) !== false ? 'bg-primary/10 text-primary' : '';
}

?>