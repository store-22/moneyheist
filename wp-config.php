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

//Developement connection
// ** MySQL settings - You can get this info from your web host ** //
//LOCAL SERVER
/** The name of the database for WordPress */
define( 'DB_NAME', 'store_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZoGEb*^5h5 +M]=ZG*}9vWf-!J=mr]b2vwo)>-{D=4Wba% 1?fOGnY3w{$I=gUOV' );
define( 'SECURE_AUTH_KEY',  ':<9A(l2o_7Y*x>{=bb0#<NH<FR+3ebp0h+-Q$z3uUhx$.y29+Cc>?}PF)5Ndrm&d' );
define( 'LOGGED_IN_KEY',    'QVw v:j_}72x-Y2h`Ca/w7G-}rN2E^C{.<^l(|ntubr#0FR6Zsq)ND<=B1Atpfqq' );
define( 'NONCE_KEY',        'B~_!B.5=`+}WvRI~F xhiHGKv.7L._T|ojI?MLH%?j~8G$MThz#wvo=L%9<99D2_' );
define( 'AUTH_SALT',        '__1gt^N(B?KGRP-*<uXeVHRg]>dE9Wq/W#r:;G$=+]<,zjTOe.Rl1|A*V94t6hZ5' );
define( 'SECURE_AUTH_SALT', 'j:AGyyS/nZE:;cdL[xuRp*sPR.`H+UhN2xaT*YTA2#h T]QG>$5-K/K!jhu7,d@.' );
define( 'LOGGED_IN_SALT',   'T=C-:}ZO^;4dLP(eLPe~rOW0${lcS$(6EHV=;@tLN>/I4nru}%e9%qYeUmm[nYGo' );
define( 'NONCE_SALT',       'mePC8T^/18hs!O@z101P698?!A;]Utrx>!@oCQ+6dHMyMmYSkk0VIhZeaqB_(2;n' );

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
define( 'WP_DEBUG', TRUE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
