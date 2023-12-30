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
define( 'DB_NAME', 'footwear' );

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
define( 'AUTH_KEY',         'Mk2q14mTn T*+PadQc;xa#O0{I+rKE3b}IGe]0~!R{^2<W7dSFHA_MOS$zjdp<`D' );
define( 'SECURE_AUTH_KEY',  '3(Rpc?g{C+[q<gP]+YpYX]4WNgGW<G;j{rgkhkcB%8W0]?:6f.HQ*9]]OE&KqX6Z' );
define( 'LOGGED_IN_KEY',    'LZ2^vb`pzl-6%zc>unQbywqGy!WT!DPQs3<4#iE*lL&^#((LL;|9i(UUNvlC.Sk#' );
define( 'NONCE_KEY',        'lzSc|l|Kd+7XFlEwJ&y6|AWx/4qN}_>_AS]=8#1KLo76oR`8D0&yZ/??`l#uk&uf' );
define( 'AUTH_SALT',        '2vaivo_Nj`ASnpOI|iyqZXeeq#oBK$qbWYG:Y7#Lw7N^(8(gO$O%ndT5`en_`eNB' );
define( 'SECURE_AUTH_SALT', 'K[hIt.p:XoN`|WTY6|DCY ln}dY(1hW{};rRa5WEN2Fa)#Bpafr&F6zIos2sJ3}g' );
define( 'LOGGED_IN_SALT',   '?6lrWZ)9w`t~NV4Jt)/4Plz6x#)+Mn[@_MED_ h3iHi.*W)aR?;)qm]K7]B,3`34' );
define( 'NONCE_SALT',       'Ge*_CBlLD!,EiXeDv 4Dtdehkbz/RTvg]X4KHp2N:L|s_Iv5GK+`;KH/$_lMa }z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dev_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
