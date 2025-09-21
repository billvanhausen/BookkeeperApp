<?php

// Site Name
define('SITE_NAME', 'DigitalH Bookkeeper');

// App Paths
define('APP_ROOT', dirname(dirname(__FILE__)."/Bookkeeper")); // Root directory of the application
define('URL_ROOT', '/'); // Base URL of the application
define('URL_SUBFOLDER', ''); // Subfolder if the application is not in the web root

// Database Parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_user');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'your_db_name');
define('DB_PORT', '3306');

// Other Settings
define('DEBUG_MODE', true); // Set to false in production