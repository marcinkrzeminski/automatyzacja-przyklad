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

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

	/**
	 * Settings for local environment loaded if available from wp-config-local.php
	 */

	include dirname( __FILE__ ) . '/wp-config-local.php';
} else {

	/**
	 * Settings for non-local environments, used when wp-config-local.php not available
	 */

// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define( 'DB_NAME', $_SERVER['DB_NAME'] );

	/** MySQL database username */
	define( 'DB_USER', $_SERVER['DB_USER'] );

	/** MySQL database password */
	define( 'DB_PASSWORD', $_SERVER['DB_PASSWORD'] );

	/** MySQL hostname */
	define( 'DB_HOST', $_SERVER['DB_HOST'] );


	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each
	 * a unique prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix = 'nppoezqk_';

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
	define( 'WP_DEBUG', false );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );

}

/**
 * Configuration for all available environments
 */

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GEKQgsvtFFZTU6Gmtad3TApS5SNLpvS6yY7rxtKl');
define('SECURE_AUTH_KEY',  'Q0Zg6X7p6xNbU+VpECvQMqK+6yOEh2Q6/o6xqnTs');
define('LOGGED_IN_KEY',    'cPRqZNhmgwfBc8ZNODroMxwIo/n9GJTLhBBh/mz3');
define('NONCE_KEY',        'yTXxhA74vmWdFCpxlQyvFGOONe5iFzT/4mArrjl2');
define('AUTH_SALT',        'tta685QFgsU1txkCmYRbRgF42vz1VeID1cuZU6hr');
define('SECURE_AUTH_SALT', 'cQLuFGmo9WjWH3U5jaz0QmV8OpXJAAdTVtN9ZxVs');
define('LOGGED_IN_SALT',   'k0BlcPNYtNuXAUplG2qSi37HT7eIGtQhnKy8wF+R');
define('NONCE_SALT',       '8xZhyxRoGU2ZXv2eNFgwtU88+EN7dMN6gbQqmr7E');

/**#@-*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
