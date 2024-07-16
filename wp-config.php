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
define( 'AUTH_KEY',          '>IAR5m^v%yG$lu`kJ#*(gF2cZS~yM{SX_<1j$msD2dG!V*4o.^{LO9Vf#[vc#><;' );
define( 'SECURE_AUTH_KEY',   'Y1G_Vp;3dl--p+zz&dis90[)L.0WtWH:CM~u#1!v?3Rj5*v,Uy~/2S*<SW7V45?b' );
define( 'LOGGED_IN_KEY',     '_=XnM{UK0IvzeecoF908P%T4zhy/T@OdNn/r]+?bfk[I,M./I42?y9P~B_ )D%MD' );
define( 'NONCE_KEY',         '%?NnBOfgE2P&6dm#e+T(gE|>U8_=(dgUL^m+^4HKKu<(.NY%eeJ6/$opV75L,TA,' );
define( 'AUTH_SALT',         'yu^x;O$%*#ME>eDhC/}F7Ym?[#X|K8:0GIch*H~c>wv.kvzA;TyqTOxC&K]+YzCv' );
define( 'SECURE_AUTH_SALT',  'z$..{sf}Zm/VZW*dA+<teln/>Dj)PhLrd[{/ Y3 FZFVsRs;>pKOi`s8HKFRNx+f' );
define( 'LOGGED_IN_SALT',    'e*;tf(9E)O_jbU}9+Y|6.mqPP [[#7-q[,4zd}FDp52%AdLDUH, :I#^<W<Z@w~3' );
define( 'NONCE_SALT',        'W??9FT,v32MxxMca*DQtyzhc3pm_&iu/z=y>|d&KfgJ>wg~hwVz$n>`LYZVV2`#u' );
define( 'WP_CACHE_KEY_SALT', '!~JMmmrh!lZc)s`hvp+82by{O~A%#4oEe}IE#G3?CSV`N>@[Br,m0*-02VXEba=,' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
