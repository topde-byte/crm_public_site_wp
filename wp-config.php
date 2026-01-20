<?php
define('DB_NAME', getenv('WP_DB'));
define('DB_USER', getenv('WP_USER'));
define('DB_PASSWORD', getenv('WP_PASSWORD'));
define('DB_HOST', getenv('WP_DB_HOST'));
$table_prefix = getenv('WP_DB_TABLE_PREFIX') ?: 'wp_';
define('WP_DEBUG', true);
