<?php
error_reporting(0);
$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ($url == Config::read('url') . '/_functions/_i.php')
{
    header('Location: ' . Config::read('url'));
}
else
{
    return true;
}

function i($to)
{
    if(include($to))
    {
        return true;
    }
    else
    {
        Err('_functions/_i.php', '5');
    }
}
?>
