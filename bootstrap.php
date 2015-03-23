<?php
require 'vendor/autoload.php';
define('APPPATH', __DIR__);

$dsn      = 'mysql:dbname=fw;host=localhost';
$user     = 'root';
$password = '';

\Orm\DB::init($dsn, $user, $password);