<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amberleto_wp539' );

/** Database username */
define( 'DB_USER', 'amberleto_wp539' );

/** Database password */
define( 'DB_PASSWORD', 'SW5pu83A-.' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'ylnm4777z9u0mc7hj1wrrwxpb9vlliqufkqk2mmxnrfne3peb9cuogductoolwmt' );
define( 'SECURE_AUTH_KEY',  'w2eistbjlqfbufpx5cv28gybvvav5cb25wcr8da63nedhshjggqorqmy0kjzp8dx' );
define( 'LOGGED_IN_KEY',    'kjhidkt0zlxraw5qkgtf9rlign6ozsfualpactjl9bepuwn5kqxzsgsqmmkrfc5t' );
define( 'NONCE_KEY',        'exm7hitrznximvr41z9qlpbwqaqiksiltgadysh4i3gbf5qgxnirynq5xdmrnipi' );
define( 'AUTH_SALT',        'tckhai6rsgcoes6vpjiantr8zupqv0vgv0udyq2ovlrwwjznsgpdiw0zitxc0iry' );
define( 'SECURE_AUTH_SALT', 'oruoilv6cyj6rducpuifwzl41mh0hkiwfq9pzptlo6zebk1wjldpk0profzcsr7x' );
define( 'LOGGED_IN_SALT',   'pogynov4kyyxqfbftdylwckg7tdzoisrct9jksyx04cawapzyfl1vi9tlglqtohw' );
define( 'NONCE_SALT',       'ggqlwx0twyf3iv4zwi2ee2us5p5qxdempbkzu4q4twqjgn1x1jybdhohvyucjw69' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpsp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
