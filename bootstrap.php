<?php
require 'vendor/autoload.php';
define('APPPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('CACHEPATH', APPPATH . 'cache' . DIRECTORY_SEPARATOR);

$dsn      = 'mysql:dbname=fw;host=localhost';
$user     = 'root';
$password = '';

\Orm\DB::init($dsn, $user, $password);