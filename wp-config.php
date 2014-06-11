<?php

if (!file_exists(__DIR__.'/local-config.php')) {
	die('Local configuration "'.__DIR__.'/local-config.php" is missing!');
}

require_once(__DIR__.'/local-config.php');

if (file_exists(__DIR__.'/local-versions.php')) {
	require_once(__DIR__.'/local-versions.php');
}

if (!defined('LOCAL_CSS_VERSION')) {
	define('LOCAL_CSS_VERSION', '');
}

if (!defined('LOCAL_JS_VERSION')) {
	define('LOCAL_JS_VERSION', '');
}

// Automatically generated from "https://api.wordpress.org/secret-key/1.1/salt/"
// %SECRET_KEYS%

$table_prefix  = DB_TABLE_PREFIX;

define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');
define('WP_CONTENT_URL', WP_HOME.'/wp-content');
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);

define('AUTOSAVE_INTERVAL', 1800);
define('WP_POST_REVISIONS', FALSE);
define('DISABLE_WP_CRON', TRUE);

if (defined('WP_DEVELOPMENT_MODE') && WP_DEVELOPMENT_MODE === TRUE) {
	define('WP_DEBUG', TRUE);
	define('SCRIPT_DEBUG', TRUE);
	define('CONCATENATE_SCRIPTS', FALSE);
	define('EMPTY_TRASH_DAYS', 0);
} else {
	define('WP_DEBUG', FALSE);
	define('EMPTY_TRASH_DAYS', 7);
}

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH.'wp-settings.php');

?>