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
define( 'DB_NAME', 'baza' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '<wHT0HV3#p.j3BK2_i}3yfO[Lat?(js$xU#&v6&>?OzW>t,[nhA$oKwstSscn_I7' );
define( 'SECURE_AUTH_KEY',  'Tdo|>%vj&8;<fP(~F$W.t!hn6qEJqjN2y~Bu?&6#C_9T39i p/+N7ay*C*80kLaq' );
define( 'LOGGED_IN_KEY',    '%,,4F]KHTGla>wjg UKxcO2wx%|N<UXN8Zytg6`Ztwjb7tQANZ3LP B[P`2b):n ' );
define( 'NONCE_KEY',        ')YE70D>}m~kDS7;v0j-`cRGJR?q>E+l+^hi#xNnH|.Zh<mce=2~;4Ua|<4yWS.z>' );
define( 'AUTH_SALT',        '#z!a1%1* ![]dL_&41(V#~Lg((:@#Xp|M.1p=xIgTiMxL4~wCHn&$o<eWyQIqdK/' );
define( 'SECURE_AUTH_SALT', '8S{6`VMFI$-_P`[{tEFzoK?z9kFH,cv9zTE~85ieH(!]}Ug&bOVxL^@n+Kbu;49h' );
define( 'LOGGED_IN_SALT',   'ZVJYchOgh|6[cH}Kh@.z~/Q+9y[@Jm#hI5!#{1Dq~BpCdjZuEH%&+1Rm8~8`N^@5' );
define( 'NONCE_SALT',       '}l[fX;B(0^OQwD-[l{o+wr_^k::kGSOqbvYKb#,k,51Rd@}r97T~#y*}o#_eeBy1' );

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
