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
define( 'DB_NAME', 'nganu_ka_oi' );

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
define( 'AUTH_KEY',         '2pZCjgQL# :|Cd+LA7c/,gl]7YE[.7~&Eim=S!BAtqM9}8WJ*Yt~mKk%Wk=oj/zk' );
define( 'SECURE_AUTH_KEY',  '>i~BB!Ytwf{V3:L0_5x ^<pGRR|nl~!1o,C|`of;R`F$.%~m`B5|g(DDadN*C*) ' );
define( 'LOGGED_IN_KEY',    '&XBko4L#hYq/]<VNU&<&c-*>*)2R9hV<$nFnv4NZ_3z1IY6o24+gU[IBLeB/d7@v' );
define( 'NONCE_KEY',        'r6gE?V8KSd^H}W(]=3UZs4xf4H&ck+Or/8cX/HSK?[jNCt?-Foo$]_,N#PqC}{lY' );
define( 'AUTH_SALT',        'J w!-U_77E1~GknVBjkGaf8Cm^BAwXLRTF,{iR[f)vV)mzd^8iWNJg]Z2TR3e|l6' );
define( 'SECURE_AUTH_SALT', 'dferk1!DCOs;kyavJrX;OO*-n}mk3`]iL&WHOLcjwQADHGrM#L[%V;Sw.nE@$|b_' );
define( 'LOGGED_IN_SALT',   'ZquzS$6b6TTc#3#cU}5NOEjtP4O!Ny-D*Fag0aAlx+_1TbI`QkRvU:> z-`4!(]e' );
define( 'NONCE_SALT',       'OqNU$si%bZo;>T]@$VUc[K[jVM90h)nR!31X[Y0R>sz[i==j14Zgn=&FU{EH9;d<' );

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
