<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'drex.com' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uPzEdUlUcxXqYzMNL339NmzPKsqXceY8nFHUVtekbgSHqey1UfxMHH1MKgPirTcE' );
define( 'SECURE_AUTH_KEY',  'd89gqCEGgEhniC31OsAXUis6W5ioEQLCJYsPDjnyydxXlIQ7uwtvnsZhNynC64yw' );
define( 'LOGGED_IN_KEY',    'CgX8fcG0KxgN9gKnTp3JqDRVjbAs8ec9yWY6ZPotTesWGNwSKqg22doT068fbgEt' );
define( 'NONCE_KEY',        'H8mg6jivHRkfgI7uthYNteoc1W5J4AXpe3saoWuadGacReqsERzMymUX4iEYqfS0' );
define( 'AUTH_SALT',        'OO6tj5J5HQMhboHevzreFHvlRPkAr0ookD0MbZMZxup3rqc0t8w1ZR8mcWOulXvs' );
define( 'SECURE_AUTH_SALT', 'Y0wPl9S5N92wCuLdrF2p0UNb4Y0AK7aQgcepMVs4R1G1S9J7b7Mcf6HuQsdAD8T2' );
define( 'LOGGED_IN_SALT',   'bkhfMPQgX6EmQP5PPaaXM1GTphLbuhB1BgxzLNjecTtyID90OUGQqGYYJoetCZFd' );
define( 'NONCE_SALT',       'BjraZ5JWuD3msG1Omwa6qdGAWwPPpRHgPHgkwfxgxgU7ttG42G8PZN5VkmATpV0N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
