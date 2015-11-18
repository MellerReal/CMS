<?php
error_reporting(0);
$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ($url == Config::read('url') . '/_functions/_error.php')
{
    header('Location: ' . Config::read('url'));
}
else
{
    return true;
}

function Err($file, $line)
{
    if ($Err == false)
    {
        $Err = true;
        i('_design/_V' . Config::read('version') . '/' . $file . '_' . $line . '.php');
    }
    else
    {
        return false;
    }
}
?>
