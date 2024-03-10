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
define( 'DB_NAME', 'curska_db' );

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
define( 'AUTH_KEY',         'Jju69H|]U(UiS($G j`0F.-BL #A($iiYS.!~p BKe)rRN}{+(%}{+5m[J]TsX`C' );
define( 'SECURE_AUTH_KEY',  'J+;=G,G(E;5$mgQ|sO~;zx3-R2aOj)6UI;7E y7cyy7EFPdWw#}6Fm22SJzS^kzj' );
define( 'LOGGED_IN_KEY',    '!X&O~{J] 1,(=3OvZNg8L64c2vbPHnJyA?~|A}7^-(A=v&&/S&<Lwvn%?rG|=3;`' );
define( 'NONCE_KEY',        '@~1F7(nSMzNL*~)>%sIe!r!F)}s:Jn`A{_TsIvuzfA>aFX)CKgYVE~<P@%8L-&t/' );
define( 'AUTH_SALT',        'UW7+9@#Jh;*5H{%,cQITeno}2jA]t,$1lh-bD}nC<gZ) qebVLdpX6|v8Y@V=qH@' );
define( 'SECURE_AUTH_SALT', 'Ap|]c1X*MAJ#XqPp_0USFs;(1la9:enjQ7FJxxN&upzGQnB0souv7xpdeRza7k60' );
define( 'LOGGED_IN_SALT',   'z%|6l(#%/D]#]?J,8ea4qEhpk.~1j6p*(#qsH}yQ?:<e4K&g*@Vw$TNYM,fZ{>;#' );
define( 'NONCE_SALT',       'W}2y98f@-?5%7,(d#HFRb]~4W${C-coA]A-fnUm&&lnmq(0chVnOX I.TroCW8)D' );

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
