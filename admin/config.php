<?php
// HTTP
define('HTTP_HOSTNAME', 'http://localhost/lojadaresistencia/');
//define('HTTP_HOSTNAME', 'http://35.189.69.126/lojadaresistencia');
define('HTTP_SERVER', HTTP_HOSTNAME.'admin/');
define('HTTP_CATALOG', HTTP_HOSTNAME);

// HTTPS
define('HTTPS_SERVER', HTTP_HOSTNAME.'admin/');
define('HTTPS_CATALOG', HTTP_HOSTNAME);

//define('HTTPS_SERVER', 'http://35.189.69.126/lojadaresistencia/admin/');
//define('HTTPS_CATALOG', 'http://35.189.69.126/lojadaresistencia/');

define('DIR_BASE', 'C:/xampp/htdocs/lojadaresistencia/');
//define('DIR_BASE', '/var/www/html/lojadaresistencia/');
// DIR
define('DIR_APPLICATION', DIR_BASE.'admin/');
define('DIR_SYSTEM', DIR_BASE.'system/');
define('DIR_IMAGE', DIR_BASE.'image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', DIR_BASE.'catalog/');
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
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'lojadaresistencia');
define('DB_PORT', '3306');
define('DB_PREFIX', '');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
