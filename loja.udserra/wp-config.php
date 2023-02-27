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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'loja.udserra' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZNn;@ZC@jJaMF#Fc_Wrn:}3;+H!hnkP1w^u<?ql1Gp 3;Q]5}g[23?[(*ZPv+@i}');
define('SECURE_AUTH_KEY',  'FFx^(WYYTbYlz-9<7Lk ~sgtujv72`D2_QvJ.-%dIi9NxkzJ-Qulup}xd=/Pb=4-');
define('LOGGED_IN_KEY',    'd+xNd,Ny JO/mEuS.~r|^Hx1V&4 .F@)!EcT.I2Kb&rA5X~IyiXO/!AxAs1%e#^h');
define('NONCE_KEY',        '9oARC(nsz<pqy5y_d;A7WrGW%9=_]QJ+bgu`3IBUs]w-S=qV{dPre`<+9nE7YaZ:');
define('AUTH_SALT',        '<buB$}:lN.]T=FZK){=^tnT7%lNwYT8a|VtVU,r!ysvM5aROhNHD+BKCnpb^+sx2');
define('SECURE_AUTH_SALT', 'Xxv1,iy8z![^3,+561Q4<,?A%Y&Gx`T&|Ts,5%=H,dg>>F3n-Ed3|[^K$izts%B#');
define('LOGGED_IN_SALT',   '/NX;(OR`+P4cHZ)<YUNI@P|Ph&B3)f~DZ^<&X&!AHfwz:gDdLHcxI|_nIm >Du Y');
define('NONCE_SALT',       '+D[Eqm8~riOL!*!b]S:l=jaly7|{z7h+9xK~Y(><3yNW>`*r=z2R5/S%-g&ux7LP');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
