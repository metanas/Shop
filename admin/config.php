<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/Shop/admin/');
define('HTTP_CATALOG', 'http://localhost/Shop/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/Shop/admin/');
define('HTTPS_CATALOG', 'http://localhost/Shop/');

// DIR
$DIR = substr(__DIR__,0,strlen(__DIR__)-6);
define('DIR_APPLICATION', $DIR.'/admin/');
define('DIR_SYSTEM', $DIR.'/system/');
define('DIR_IMAGE', $DIR . '/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', $DIR.'/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '173.249.0.216');
define('DB_USERNAME', 'main');
define('DB_PASSWORD', 'X1CarbonPro');
define('DB_DATABASE', 'shoes');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
