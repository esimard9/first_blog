<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'esimard_wp1');

/** MySQL database username */
define('DB_USER', 'esimard_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'J*Rt0OWVm9PEemk(Ka.87&#1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JxlBhVd7IVZUUennzyUwv4j4VFqSBpTQ3mj4Nh0FCBSg8EgIRdlIWZmRAWnV3HfK');
define('SECURE_AUTH_KEY',  'pmrNwFgVUZ0B76EC6jopj3ZZmkSk4hXt9rEU6eIyJIXBBxlM6xIxcUl2xcN9BPW7');
define('LOGGED_IN_KEY',    'wtAzfN3aek5zREw05IG2Tm8WzpsJ0aAe2UU63OzwG8cWGaU91uffyBbJVqv3AunS');
define('NONCE_KEY',        'L3npwx18uWbI02Abz7Jyi4iFlqZTLmia4Z093Yz8HwPfH25phtXtw9kB1mCYRhhk');
define('AUTH_SALT',        'w4K40sWdOrROjwypM7qanpphYbQw1ajKLemc2CfeovnXRGX9lACkpPKLDVxd5AI7');
define('SECURE_AUTH_SALT', 'J0f7BtY3jeJA1bxgGzVSqJnXonz8ic0wcq6cfo5E5VidEVT1MMWW5Cx54cqjuV1q');
define('LOGGED_IN_SALT',   'sHI8i6T642mwTMwpkA2r6qdox9QeqabBV4XiZqcm9qtCoLYT4qpVl8URpmb9PXLn');
define('NONCE_SALT',       'CtXYinPyNkTkZ4yQomheaPtQYmEDPLh2XjvKPnF7KGOaHw8t9UrSN0hITRZvdiSz');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
