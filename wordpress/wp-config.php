<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doancuoiki' );

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
define( 'AUTH_KEY',         'K~`^Ie|D;dl#Th p0cUh;9Yd5QOX8jX-JkL}v4/0M<88O;Gqa(R) F>`}<M$wJ/P' );
define( 'SECURE_AUTH_KEY',  'n`1d:cE2p$svF+vM6A_7.rnL)Thk{?-RWp)LsF_f*ZZL*=2{8,I[.(;}(M8&6r|O' );
define( 'LOGGED_IN_KEY',    'H&u&lc4U^?w!A*zyThlE{XqfmUo6x]C@(Qr<u5_iM(06 gFZ!U~uDqV0L=gnfm|H' );
define( 'NONCE_KEY',        'wu]>D?`kgZ>C1:4,N+VZ?@|61v|]GffQFsb>iOQYY=1BQ0qO-U=jb,,Cg?kVDri?' );
define( 'AUTH_SALT',        'i.wc)(3%ZL!oN}sm>KRvF]>tKr|l<3^xJg#6@D!?MmUk]:t(cL]MwyLQ.E_T=R`J' );
define( 'SECURE_AUTH_SALT', 'o]%y*f}D2eOQ-sz/c`Jql9m) #o:q[{o#Cm65x1yDE:L}}uARDA=!z`5OD:)`W+N' );
define( 'LOGGED_IN_SALT',   'ayNL?p:M{?997k[y)K8n<!!zNPkMnqL~hT)AV4=dZu<tva^tnayX<=<ZSR{Av5#`' );
define( 'NONCE_SALT',       'C]mgT,29{<;tqZB*sh[8=Z<zo?+DfJJIah WE(56?IN*rMGxt|^*J|LIp.B4xBr.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
