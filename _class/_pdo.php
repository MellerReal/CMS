<?php
error_reporting(0);
$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ($url == Config::read('url') . '/_class/_pdo.php')
{
    header('Location: ' . Config::read('url'));
}
else
{
    return true;
}

if ($m_d = new PDO('mysql:host=' . Config::read('pdo_Hostname') . ';dbname=' . Config::read('pdo_Database'), Config::read('pdo_Username'), Config::read('pdo_Password')))
{
    return true;
}
else
{
    Err('_class/_pdo.php', '14');
    
}
?>
