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
define( 'DB_NAME', 'fablab' );

/** Database username */
define( 'DB_USER', 'fablab' );

/** Database password */
define( 'DB_PASSWORD', 'Fablab2024@+' );

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
define( 'AUTH_KEY',         'K* nk3M^QM{%pIQy+t`3/<S|~?],9Y1_b*M;};#~ X.Fun0l!P-R_TUWJ,:_ 2ij' );
define( 'SECURE_AUTH_KEY',  'XO6)0]M~fQ%=^s;G#~pt:Q;ClssqnrXe6TmL}6ew0s2%y2 d;*E+T -tMexQ>5Q4' );
define( 'LOGGED_IN_KEY',    '0g:]?^gR[S0B486mI]D]|^[m3tSz.8w6=L]s)bHIi@?vT4-F4Rz1Va6A+C[*,IZ@' );
define( 'NONCE_KEY',        '/b<P@rUFR`vKl6-&t9[M?7hP`Irc$>t{t+M Ch4MJliiR-?mO!NeG</U`i_$g*_C' );
define( 'AUTH_SALT',        'qhGn8D),Y[cYC{^w3]<~lisObo.<o5g6#Tr(*v5*&@6|S^[dVlj?3`4GXeNXh&T3' );
define( 'SECURE_AUTH_SALT', '$+]jqo.SaGSsNee,E4ZYpEC|b5uY.p=fzp.8k@u~ZPm._3NLur9LHx,N?*[u~b`1' );
define( 'LOGGED_IN_SALT',   'ZsAfyVxDnS<bt9*6d!KZH@iweu$>2j;iJO|>2&F~tr^^MEMb(Mbpu-&IM10khrbt' );
define( 'NONCE_SALT',       'J$bg?P<Clf+zm3ZV@Z^7mdS>vpUt0xo105`C5[3%e5j.[B&m<!9TXFTk;I/zAs-p' );

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
