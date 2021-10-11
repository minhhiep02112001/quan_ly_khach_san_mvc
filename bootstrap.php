<?php

use Core\Database;

define('ROOT', __DIR__ . '/');


if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}
$webRoot = $protocol . $_SERVER['SERVER_NAME'];
define('WEB_ROOT', $webRoot);

// @todo auto load /config folder

require_once 'function.php';
require_once 'config/system.php';
require_once 'config/app.php';
require_once 'config/route.php';
require_once 'app/App.php';
require_once 'core/Route.php';
require_once 'core/Controller.php';
require_once 'core/Pagination.php';
require_once 'core/Connection.php';
require_once 'core/QueryBuilder.php';
require_once 'core/Database.php';
require_once 'core/Model.php';
require_once 'core/Request.php';

$db = \Core\Connection::getInstance();
