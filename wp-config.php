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
define( 'DB_NAME', 'bin' );

/** Database username */
define( 'DB_USER', 'bin' );

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
define( 'AUTH_KEY',         'bH IFT1p<#h0X[3`Cd>I@~tDC862CFN<jKSry{PEU6;;Ws{Dl{h)Hl[v=!3JJ<?1' );
define( 'SECURE_AUTH_KEY',  'kz;q=4 tyCiPZ)q`I)8+pApu=.)E3UJ[iQFkt1iD<z(>.ut_b@8p@p9reCe|g$GE' );
define( 'LOGGED_IN_KEY',    'tkvRZ ESn&lgji:[CxQAPKFHWf.Loi.= sktTuxY3[F:5O Nv/OF{^%pHH>F<_@z' );
define( 'NONCE_KEY',        '.vx`cQa~h+tGm-d[tj;I1&Ro8Z8T67t/;_$_0% $}NLW+J*~5][I%M6/c<xZ{4+f' );
define( 'AUTH_SALT',        'p:xa9WPCG_LX~utu:g=KR(TS?9Tl3sLMzWbFlj4663RXmzh,PFF1z=GLbODkRH/g' );
define( 'SECURE_AUTH_SALT', 'LytQbz[6+g$V5- }o$?%QS#jqr?k6R}.JO+4IAquwZ%)`38 s|kQ0Ys3Z4<=B Ay' );
define( 'LOGGED_IN_SALT',   'oZ{TiMIMXrYPS-LfoRJ3A~eH(~wn!/gmxvaZ0G#{>ia{zd_3f}!@OYSG%!bE*zo>' );
define( 'NONCE_SALT',       '7OP^<>SDUFcigp2:HTJ^hBR1_ivXb-nKNw`qYRw,x[4,xyo24<_Tkm0E9zV_x/;3' );

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
