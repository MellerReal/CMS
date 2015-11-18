<?php
error_reporting(0);
$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
$url = $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if ($url == Config::read('url') . '/_config/_config.php')
{
    header('Location: ' . Config::read('url'));
}
else
{
    return true;
}

class Config
{
    static $Config;

    public static function read($variable)
    {
        return self::$Config[$variable];
    }

    public static function write($variable, $value)
    {
        self::$Config[$variable] = $value;
    }
}

Config::write('version', '1'); //Change this when ever you edit the skin. Else the users might need to clear cache.
Config::write('80/443', 'http://'); // Either http:// if you don't use SSl, Else https://
Config::write('url', 'http://localhost'); // Simple the hotel url, (Does not end with "/")
Config::write('pdo_Hostname', 'localhost');
Config::write('pdo_Username', 'root');
Config::write('pdo_Password', '');
Config::write('pdo_Database', 'test');
?>
