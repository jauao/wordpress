<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'eSb?,A+}VLBZY,4N8uzhm#.QX|smgevkRKJ@<!z]ouibG0a!H`Jx-dVahMF <!:W' );
define( 'SECURE_AUTH_KEY',  '+g]bYi6i`9:!?m8BYcE7F*&qFCYQhgM,S[eJ6p&{+a2V%E@u[BkBP7*>I}iI7d(4' );
define( 'LOGGED_IN_KEY',    '[5uXi=Jgs+)oLXI)C#~l^,ReF&vlk-{BNk:pGisVw$@E+KNl)o{h:aluYfR4k9SZ' );
define( 'NONCE_KEY',        'w#1K A_`gf,WioM)May%yI~za)Xn%/;e5[2jbA;ac,z4d!2Z]/-errOM3^:gnipg' );
define( 'AUTH_SALT',        '5HEgy6z{%#R[_zjb5Gpqyh|(Q~z$y=aHn`%{@^IA*3y)4K7dqN(3WqA7|fRVWRi?' );
define( 'SECURE_AUTH_SALT', 'fs%I&Q)bK(HY37%^vTZ^;:1j#Tw{IWXIrzi6l?YldJ_C:]0pe1,uuSSzph LX0al' );
define( 'LOGGED_IN_SALT',   '$wTCW@tsPH7P3QF0<e(^h UWqw(FVzZcssw+AfvyhpdPMg{ltk?ePbReM &kU#TG' );
define( 'NONCE_SALT',       'i8[CJ%%p&|N!>25!/]uDzIKl*oE>vyIv_*|P-j`M~Id!{lJyz%Gar=nf]*_,H)C.' );

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
