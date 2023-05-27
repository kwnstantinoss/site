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
define( 'DB_NAME', 'wpdatabase' );

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
define( 'AUTH_KEY',         '2D9D+Z0>MgDdp:s{[NaGX@`LoQ0;wU(@Z<)WX(3Gx#l9d/eVw%7<amW@h*+p],Rr' );
define( 'SECURE_AUTH_KEY',  '.8WZ)g`o3!)U0zE?`+IqvPT@8q>yjl=TZ:CBm;fNzP#F-htM%51(SWGu{)1pcW-&' );
define( 'LOGGED_IN_KEY',    ')B#[+x#H <B*La=z?V1]u].*zS17QZLy9DpMm:!T{3?d%}RXd%+1IKe.<87cwZlr' );
define( 'NONCE_KEY',        'FVgZP((1aqIgSaS7:ME?J;z|pj!f&xF_|ty<k6JOGj[xPs](PzhVlSw~Bd;CV`h$' );
define( 'AUTH_SALT',        'E<y$nhH5F9rQc#3eay1eL^cIG!Ws>i!R.pu!@hdPZflB~Ur9]8Fg1<j!3&4$6P${' );
define( 'SECURE_AUTH_SALT', 'RB:qJprmnnG[PMAXwZmxzl{%_xf98)1t}kpU&+br(P|`T gr=>IX[dQnL]+%`,J%' );
define( 'LOGGED_IN_SALT',   '{--u?M3e.r*EAwrB7*MR8LG>W0w*`v(fCYEDAdu?HC,R%yeg1zwUM;;b)j8b(l2V' );
define( 'NONCE_SALT',       'FkpUa)YZ#|_hMB[*Itga^0J@afp_vymmgk}M:?/6PIquV:MBKGGA>Zev0[emPgq2' );

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
