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
define( 'DB_NAME', 'tech' );

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
define( 'AUTH_KEY',         '^=m?P:ODK]^yrdu.G^[Sdd=fj(%DoY3DpVK.Sl@NiqIa7v G 3~sWdo@</roQ@e;' );
define( 'SECURE_AUTH_KEY',  'h!e-HQe;cG;8zQ6K:3|4Mp$y1@5aMt/=;p!%hSh1{ZeVORu8!CidY;fTg9+y<<[@' );
define( 'LOGGED_IN_KEY',    ']!k}|Iqlx/OH{5:GS)nG<DJ1MCxjG(GHS|K10C4XfsbqxcpZjOVd^m]( SO,hK@k' );
define( 'NONCE_KEY',        '9~d OgXbO/&{Vr51)[,+W;44}xoG>tA)[`RHA:o?>2<QdI_BiWk-{gV!5-R]dU~e' );
define( 'AUTH_SALT',        '-T AaNj$|i:dEXob[!rQY$f<L#I1fBiYh+]z{mNG+m!d-8 5wT$8nzCs:)U_R<oq' );
define( 'SECURE_AUTH_SALT', 'BYyz+TBCl4Lwy/8(D1Gy;ic4lXW3Y&@?7xbesjut$k0gDR49`NyF$nsWZtU~3LUG' );
define( 'LOGGED_IN_SALT',   'm(d=pYoxr5XI7%<Uq7?r e# Ac*#-%2`/uLv;9CdI.]e.HcOQof_~U6R:LE0EF1C' );
define( 'NONCE_SALT',       'B}Sam15F-hAVa.X^S6n5O/diinbP/*i[Hl/8o~MXs/EO6~K7}t^08y)5_ul,VN,H' );

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
