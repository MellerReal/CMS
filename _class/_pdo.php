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

class Core
{
    public $core; // handle of the db connexion
    private static $instance;

    private function __construct()
    {
        $dsn = 'pgsql:host=' . Config::read('pdo_Hostname') . ';dbname=' . Config::read('pdo_Database') . ';port=' . Config::read('pdo_Port') . ';connect_timeout=15';
        $this->core = new PDO($dsn, Config::read('pdo_Username'), Config::read('pdo_Password'));
    }

    public static function getInstance()
    {
        if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

}
?>
