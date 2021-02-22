<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2ySE0pf/wDH++qgBK279S2egnQ/CnGb7FG12Zfj2JERwBSkygvXYi2QIaEi/jxFypRTWRvr7FPM53gHD5i4+oQ==');
define('SECURE_AUTH_KEY',  'PVWcO7D3xk/miI2qmVjMAgUGtO/f4hWw2xhd0R4s0LR8eo5zd80iILBXc/DgI3yBdF2qBvV6GmJYINob7DE93g==');
define('LOGGED_IN_KEY',    'jsa1FPCEdxTWeA+SCIUvejYvBLEkUONjLM44AzZbZrASChpBX82Q3ZYE6bvCJhdlS0tslyDLKw39kcyNGBJiAg==');
define('NONCE_KEY',        'GrUX/q3mlMQwVAhQwFWGghKxv+pn6s8fTx+G68DriZytPMpf9UO6FVnKrfqeFo/rT6rZLjAriuR1XnsZr1j8fw==');
define('AUTH_SALT',        '6U4gft1XkAhCZh77heo2z4W8um64m3W5U8QPKRohy6xisI4cXFPjEyzYpFLz4uhuL1WVBgcyR7NuQ8MHHZGbkg==');
define('SECURE_AUTH_SALT', 'R/slvRdRFvCc6Povdxap4veS6dvacWwxAl/ySnN+YAfTFtPHN+RHHQpWH3jxRSXr40cFpa4Sp0c9hz1MYfCmfw==');
define('LOGGED_IN_SALT',   'vQsaKLaKg84lSNqYAMeENx6p54QJTVWz+fJ2L0dPCdYIXLgaPzE0gmi+Eg9a63ZVx++B0tf8kdDtVhTkcxLmYQ==');
define('NONCE_SALT',       'Xka5NIjPsvg8qejko8MfiXVuaO2PSOReDjYOnOCHcnCeKP7ksFrbP9thLt1aRxqlUOZeWxSW1QZ9ZTqdXZ5tJw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
