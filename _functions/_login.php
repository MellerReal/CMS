<?php
error_reporting(0);
$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ($url == Config::read('url') . '/_functions/_login.php')
{
    header('Location: ' . Config::read('url'));
}
else
{
    return true;
}

function LoginQuery($code)
{
    mysql_query(mysql_num_rows($code))
}
?>
