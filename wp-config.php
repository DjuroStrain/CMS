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
define( 'DB_NAME', 'dom_studentski' );

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
define( 'AUTH_KEY',         'h<xb{Z>wCwXC&ALU8/21t@A5#[|m+[p0^pW*p{()pt=xp#e]romM>yH~W%990R0}' );
define( 'SECURE_AUTH_KEY',  'U(laQ:Q97NG|z]aIAv8k=|n,HO.r@`%t~=?3^+07t$y.L$|yL!1%hs7uJEXD/IvX' );
define( 'LOGGED_IN_KEY',    'z8cHvpCWqZe*YY?JgJ+lb)S~-~8dQCPR{n,?d-K|/ngf@[EX~OebOieAf5&lAo@V' );
define( 'NONCE_KEY',        'N34$@52LP^8%*`qJ{T|?l1/0/OVWe^#}zQmv*rK;2e4EE[oy+eg={PUFX[^;nAYl' );
define( 'AUTH_SALT',        'JJ`^=PJFW@Qx!>DS>TnJ#?.|r!*~.1a]*@5J6uE#{_Ix?R](oEu7B$y]sR?it2&W' );
define( 'SECURE_AUTH_SALT', 'PVbx`?FL8>USo`fo^vM69.=BG0Ee5ZrCO+<O;%5EDM_ZU(&<@KiLu#4|,JW?zX$7' );
define( 'LOGGED_IN_SALT',   '/h^Ra2EfK)#|VgZ43YbACfWw^gP&QS_epI%wRf gi3-k3IIcDS5E2wh^G`@gGcpr' );
define( 'NONCE_SALT',       '(`P`-w`ZDD#)#7Ar1223x^D/>8oD@~RL3q_!2mn/f.0ld2C=pw)tM1!#BNXy9Tsl' );

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
