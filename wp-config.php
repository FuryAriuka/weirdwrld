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
define( 'DB_NAME', 'weirdwrld_db' );

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
define( 'AUTH_KEY',         '4N=nD$@l)Csn{%s|L8:1JvM|wJNf=_E+LtrLL~tP%XdBBUxY^FD#PX,V< (ddR_q' );
define( 'SECURE_AUTH_KEY',  'i=X{.w[X9~4jD},) 4=L5?hg~xmBLw.8#^j%t!|Fgc.kX$,tzt_p_-7{qr.yrv#)' );
define( 'LOGGED_IN_KEY',    'Kf)$rweQJ7fR?}R/.B3j7P?5JV+=F4Ho[tYWSrR>d.3u23[Z;r>}^{C171BY|Qw0' );
define( 'NONCE_KEY',        '0$GC%`dgvPj}wWx%_Vstkou^=BOn[RcS+*wN-3&hLa4b_Lj#3qn;E]<]5cX2<ZNX' );
define( 'AUTH_SALT',        'cWOqg]W1X>NrQ.Sz%PdasU2VW4ym5~#Pd_sab.S9p!E%Z9g+@FYC/]RH5ZE,)(>Y' );
define( 'SECURE_AUTH_SALT', 'i5`n+XOJqt3_?Q`<G6PSPS=zxE)w yfFRxc%o5( >_3G#Y>dABQq<9o;Y#9ckh @' );
define( 'LOGGED_IN_SALT',   'Qs}UHs!!WUWd:Ekum$F~c9KASy/WExN.*UYCX&<7Lnn>yR)b.d.1[i+8RVug$k&p' );
define( 'NONCE_SALT',       '8ewZah,ivuRo!?GSgWV}isI}:.FI~G]PH[f<!|f~:pz4x@:,?Dq=#spx}SKM*AEj' );

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
