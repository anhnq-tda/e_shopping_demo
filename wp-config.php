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
define( 'DB_NAME', 'demo');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

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
define( 'AUTH_KEY',         'Th4<G)QwH+.r]tiWNem*cOK1Q&==xhB-)S*3?(Or?h8D88,nD0Qyd].POXY8b=9r' );
define( 'SECURE_AUTH_KEY',  'Ij+ITUsdKvXb{9-P1dVRZ0gmb/_)_A:`R7T%S*iUF.B(`--K?;guyTm?BU30 i^d' );
define( 'LOGGED_IN_KEY',    'nDU1oUpCo zsQ4N szSN/Y9M806tU1T(@O7pC5i|o.j.QPvasZ5Az=#$-~`J=?oM' );
define( 'NONCE_KEY',        '?>/C*PV{c=zPIj$GNqmY_6f@Ee|;ymDF10R~3O(]};C_#;1i7`2Xn{P>nOt]%6he' );
define( 'AUTH_SALT',        '[v,@krZS43lwUM;]2`=<CPPuB6p[%zg,2K#)wcIard/N[a_s5%5D5J46?T%qrasV' );
define( 'SECURE_AUTH_SALT', '$%SV`Mj2;!-6ISoF_5yNrGIxdF%*XaAX%*gx)>7xn_9rHoUQ*{GXTVG=*T5h0}@=' );
define( 'LOGGED_IN_SALT',   'C>50PIt1=MNh^CV6f.Xr,6trx!:^[$^w,C8Xh}xtujP`<#<8cHxY.e9cR9v<2%Z^' );
define( 'NONCE_SALT',       ';%W>I&Q/RA_2$Pq6H%F,JWwtg;67u&wP8!^q,zFT~59Bca60w_|J/6PqE}0$ nm,' );

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

/** upload */
// define('FS_METHOD','direct');

// define('WP_HOME', 'http://localhost:8000');
// define('WP_SITEURL', 'http://localhost:8000');
