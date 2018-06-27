<?php

// Get Base URI
$baseUri = str_replace($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME']));
$http = str_replace(array('/', '\\'), '/', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $baseUri . '/');
$catalog = explode('/', $http);
array_pop($catalog);
array_pop($catalog);
$catalog = implode('/', $catalog) . '/';
// HTTP
define('HTTP_SERVER', $http);
define('HTTP_CATALOG', $catalog);
// HTTPS
define('HTTPS_SERVER', $http);
define('HTTPS_CATALOG', $catalog);
// DIR
define('OP_ADMIN', __DIR__);
define('OP_ROOT', dirname(OP_ADMIN));
define('DIR_APPLICATION', OP_ROOT . '/admin/');
define('DIR_SYSTEM',      OP_ROOT . '/system/');
define('DIR_LANGUAGE',    OP_ROOT . '/admin/language/');
define('DIR_TEMPLATE',    OP_ROOT . '/admin/view/template/');
define('DIR_CONFIG',      OP_ROOT . '/system/config/');
define('DIR_IMAGE',       OP_ROOT . '/image/');
define('DIR_CACHE',       OP_ROOT . '/system/cache/');
define('DIR_DOWNLOAD',    OP_ROOT . '/system/download/');
define('DIR_UPLOAD',      OP_ROOT . '/system/upload/');
define('DIR_LOGS',        OP_ROOT . '/system/logs/');
define('DIR_MODIFICATION', OP_ROOT . '/system/modification/');
define('DIR_CATALOG',     OP_ROOT . '/catalog/');


// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'opencart');
define('DB_PREFIX', '');
?>
