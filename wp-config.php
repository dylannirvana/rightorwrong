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
define( 'DB_NAME', 'rightorwrong' );

/** Database username */
define( 'DB_USER', 'dylan_admin' );

/** Database password */
define( 'DB_PASSWORD', 'shiva' );

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
define( 'AUTH_KEY',         'Zo9V<q)s%p>]y7QaA7p)80A!^cXV)]Zx*Q)2hsnD^E~C._`><eQEvbiH,/2];8hu' );
define( 'SECURE_AUTH_KEY',  'vhDgD)UQY:~rN;rgr),VV)*fxY>[#|%szc5}paXvL6cm;{UXsS3$n:$vZ[.*AL&J' );
define( 'LOGGED_IN_KEY',    ';@p6Hr6|^ PU!oqc#Qpt@~t.0]n$N@wuTRyn> DW [+{mRP*<Sal/?O`OsLa++gg' );
define( 'NONCE_KEY',        'JH(:#G|G5wPF~GB?{a1V+fjbNB;omuHL!XttpV4ri]S@`_|)].V=2;lq^<!(gGAU' );
define( 'AUTH_SALT',        '3gP+rZ( s|aaFZF?qjZ$c/{:9%lFA5n&DIF[G!q?;?n+$;aiROvDu7y7j/3>/hUJ' );
define( 'SECURE_AUTH_SALT', 'KlVxInx2Oj.)Fy}2DzgaV0Kq9QE%=$T39f)e6}6h]txc]<4_imAbCZ0-K_~x~rWe' );
define( 'LOGGED_IN_SALT',   'Hr@ MN%,W_u;6!&P)ls!PLZ5:PL[I>|k/vjiFK3aF(0PW|T[786^3Nr?~n,:ad$-' );
define( 'NONCE_SALT',       '1Nt7t;r!/FNVj`qUc)5`L;`qIVWU),?yPd<M)V=d!:hmA]GY2bEfihQu1@fK:?5-' );

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
