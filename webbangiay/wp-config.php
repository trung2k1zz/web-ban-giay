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
define( 'DB_NAME', 'epiz_30199179_Andyt' );

/** MySQL database username */
define( 'DB_USER', 'epiz_30199179' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hx2DGZSfeC' );

/** MySQL hostname */
define( 'DB_HOST', 'sql207.epizy.com' );

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
define( 'AUTH_KEY',         'omNc`(.sUO<0UD)(4BJ%;,.2:7Ep}MSpUW7cQs{K~W+Q= .;xK]*I*)I~]2dV)r/' );
define( 'SECURE_AUTH_KEY',  'TmG=Hcb8uR EU%0iWqw9ABV_$S T7m(,Kd)g[EQJ,]zTXFoN-h 5*$D!8SH4ha|0' );
define( 'LOGGED_IN_KEY',    'R5$Klhmx$owllU?6.UbzmZfPqnek~8At`.SdPSmSO)5uv#Up[JwR`X8$MH$Kx^ L' );
define( 'NONCE_KEY',        'f(1xnalX%?=9[P.07DX.H!KGAXn;eJ/OR:Y[{}4}#NF>XZK>6XVmbFu0EVNxQbc6' );
define( 'AUTH_SALT',        '1;x2s9/iMg*_)OJF8(4p,K1Kjw$:=a=)BB].mdS2$/[ sZ6TltuO{6?U>2`v$n<[' );
define( 'SECURE_AUTH_SALT', 'ZS!>b>cKi#?Bs[tIlzmD)oJ<VWEM#A-w(OOS(iMgu.EUJog|Jno++hb;?JbC/udp' );
define( 'LOGGED_IN_SALT',   'B!{Tl3!aT~ioC81m{ic5ve}*Zl}J^e?xjBioTy0FE>|BJ ne+Ai5bQ7dWCGqL]DK' );
define( 'NONCE_SALT',       '[E.c:PE_Yd*=OE=c;Ni=KSG2}Q{*d!H+.Uqj=mn{LMZ>yKzY*Z7k+ ?]p4~LS7a8' );

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
