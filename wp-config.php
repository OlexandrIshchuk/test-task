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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=CS?R+Y5=)zSIXrr-2/gx,BRnw,Vfy3gekHVLJbcYl,vIwh#H$}`XRd(p:p (oi!' );
define( 'SECURE_AUTH_KEY',  'KnD_y41G.GQ<4pppp-&e8X0dI.#r1;Vs zF3L^oXUVWmwouS!v]7ReHO B{~zAqd' );
define( 'LOGGED_IN_KEY',    '>N{[^b%oob=TlT55jE`1,H]Z8v8gN.~;O<IJK*&;;6n]DEaARZ)= 18(}Oz}w__r' );
define( 'NONCE_KEY',        'Pq=?(NWxaHI5)j4vo^>PU5Z#^4}u^/}DkF>K7/H6N:/eWAlUAC{( ($.ZMi9{HQ$' );
define( 'AUTH_SALT',        'yFjntLJe0NvwCvD(;Eg391=Hbl49m~$[]+lJ2dz(]{s<Lt^%Qv;5uYg4s!j:aYH9' );
define( 'SECURE_AUTH_SALT', 'gQ,~uPlKsm.fS Uy4b=WYSo>q6qgbQX`ERA{W4ekd;to!:=wm+g@hcG@bvZ<7 #:' );
define( 'LOGGED_IN_SALT',   'QB k7YO=goP<>wX!K-1s_Av587tCJ n8a*<o{UP.T/qG1Z~9V&PaqeTy=|;#[ O+' );
define( 'NONCE_SALT',       'tv5mW!A}4J+r.YmQ)#8=J(t<S#Pn6]8^u}RluxxujivM(*>bI|U{t@BsC5[A-1wv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
