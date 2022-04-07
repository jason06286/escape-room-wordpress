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
define( 'DB_NAME', 'escape-room-wordpress' );

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
define( 'AUTH_KEY',         '`]6cF?ZifUR1xP&]BNPqu%y2OF5*S,i/A$^)c5_V$Cs>xLmEmUwyQ-VywRm4fOXd' );
define( 'SECURE_AUTH_KEY',  'e|_p{mr99bGI.!t79T<HTEA`,`BW4%>wC^nnb#g21kO5?)FPeugY]T4~3kkcI~b ' );
define( 'LOGGED_IN_KEY',    'm}y{N|W2?jZOIzW~[PDo3z3@I89$.?45FujB:n0;<T:=R`NYEaG-.DK/;B~.D6V>' );
define( 'NONCE_KEY',        '+oA5),aPgg1t+BKysc{M,llhlO;kRw`]&V*!<wja[&Za11E_Dc=K6^cw36.l^$` ' );
define( 'AUTH_SALT',        '*}#w[5au!*m-5Ki?mnw)0ba9Q)^V9~m[>Tgh*he>OI:SZdKDII~8tpWdA(1EW*tm' );
define( 'SECURE_AUTH_SALT', 'yJ.9Ys/RId-M?[.xHt:LvmDTxre5qKg5ZKuo>UV<>_7s-9!1wo@`WO2>IrP;l;#u' );
define( 'LOGGED_IN_SALT',   '&Q]iq}WK7 8>dHmCX8yXf`hQhFT P[^o`pAT,w+(cfhN.G$Yn6C3JA`,INjoqo58' );
define( 'NONCE_SALT',       '7^Wr$v&`[8K6 |L4RRSfjehC*>!t;EP07p^-h+0CT8*?%R)?WV8v0[:}ac]#b)zv' );

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
