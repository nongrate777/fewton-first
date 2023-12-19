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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'D7Hso5QkGSn1cmlYNBcbkKb/BrEaoIDpa2sjyanpSifNRxzoikYzLhsH8z81nDXSVsjSdP0n3x4anWaqx3IJyA==');
define('SECURE_AUTH_KEY',  'REoVam/rDgxJr+0Z5OwDRg2v3iTaj4PMAfH0L1FwQT5VJFOBsNyjVtQ/vHqp1xBS+YnbqM5yp3Pv+ibqDv2xeQ==');
define('LOGGED_IN_KEY',    'vQ7LW4TDXV+NFSbzyPLDYEQ7vhDjOIuu41iNY7uka7kuFgJiLvWWUHz4SttSTfe2kcM1M/cMWhl6jhG7LMxTYQ==');
define('NONCE_KEY',        'HqbcYGu30XmeGq7XnHnSRYcgPawtL478/WcYN8y5uQI2moEO2iaJR2HcuMsa/RkmT/06hELAQpPOlxCJa8llRg==');
define('AUTH_SALT',        'Eoo58/NsP+HZ+5I0zXkSb8FrdYe0vWSuwnREBSo6hRI6B3GdjS2+PpSMci2GkgcZMsQSdSIwjwwmLejzeVfLZw==');
define('SECURE_AUTH_SALT', 'TUI8HsdIQJiLsdfPUzno0P6BCT9nJqJJ/wA/wciVcytmvVyLsiCmGk3ELpSnAWAyfzjC35MIZDtXmJP6j23Hlg==');
define('LOGGED_IN_SALT',   'UNHyqj07pcgN4dZ8V/nOEsY1mVPyKgXb8DVMOdpTpYul3WzC++5gP8cJKPqd9I9J7pPQluLDOjK6vSi30XHOuw==');
define('NONCE_SALT',       'J8kVIoHTbYSUUM+ByLoTCnc2qUihxx8DBGs/julDay2JVaeeYkKnTRuoSuclT3EX3unS84eBGiGImTaW1EZEhg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'ACF_PRO_LICENSE', 'YzM1NjI5NDE3ODE5YTlkNDQ2NTczOGJlZDM1MTdmZWExZjRmMDUwNWQ3ODk5OTNiODA5MmQy');
define( 'FORCE_SSL_ADMIN', true );
define( 'FORCE_SSL_LOGIN', false );
define( 'ALLOW_UNFILTERED_UPLOADS', true );
define( 'ASSETS_VERSION', time() );

define( 'WPMS_ON', true);
define( 'WPMS_SMTP_PASS', '63vBfMz02SlO37Oz' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
