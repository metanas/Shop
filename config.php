<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/Shop/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/Shop/');

// DIR
define('DIR_APPLICATION', __DIR__.'/catalog/');
define('DIR_SYSTEM', __DIR__.'/system/');
define('DIR_IMAGE', __DIR__ . '/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
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
define('DB_USERNAME', 'Xuser');
define('DB_PASSWORD', 'Falcon9');
define('DB_DATABASE', 'shoes');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');