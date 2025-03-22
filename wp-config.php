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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         'Xf|DIk^_$+2&eTej~A={:i] 6/BS=!H)_sjes,L[7<!i[jJe#|{?S Q@{E6;JBLw' );
define( 'SECURE_AUTH_KEY',  '>w!4AbpicU?NffjGfIpF*HcP!$W1~A~|WLnYRUKsy)E}R-a?A]_|R.i&g9#B64f$' );
define( 'LOGGED_IN_KEY',    '4ke?<2/4Swv_ydzrTI)gg#.)j,Yk3fXx(9[`.h!b2^OVsi4r^h%Lr=vr^=%ZG)8{' );
define( 'NONCE_KEY',        't4u=}(?KSY[RQv{8oXph2LO;W2`_0Cuyy!uh8{t`YF5RJ3TwDN)?e_X%X7_ijvH%' );
define( 'AUTH_SALT',        'NOVSW`MgQiw2)k?%8.ZT WJ,}&8n~(2nzDD,zm/jc/b5`=Epv[eX^^<=?n~S/0%1' );
define( 'SECURE_AUTH_SALT', 'L(Zr8KxpAU(9s=jQ+?tzS?![#Slih`&Q#K1tvm 4TaH_~JjK5:NI0?OY5S&nMZ0,' );
define( 'LOGGED_IN_SALT',   'OmLnV^GJuVEvpx0Vzv7l5<m}p[N*..$`SC~]2[LUwY{z{+(Xx#;2k]|<c,~q;/l)' );
define( 'NONCE_SALT',       'PToU#+k -?!ezilcNA}aKhWm7P~,%7]JR>{X0]Bgw=>QWrZ=_)(QyUy)|#[D&$8,' );

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
