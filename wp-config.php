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
define( 'DB_NAME', 'agile77' );

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
define( 'AUTH_KEY',         ']A%fTGw:)afq7vw>U[&19YbkBblI*&+z5N_2ex~PC`V wJ[uDbRoC[8LFQ<5yz0r' );
define( 'SECURE_AUTH_KEY',  '-Lf,}?p=HGzPUV-m:bytTY?-5l6|U31hjLV}@%~WUY9>Tx,*|L|sJSLt?qx2O/bW' );
define( 'LOGGED_IN_KEY',    '[8:d@~?T{aEo<36$a/ybOsTA2[57;HW.B(?qX(1s%b>vwBC+W;jA5_2#-#jOFYSc' );
define( 'NONCE_KEY',        'tZJm&Ecm`,dKa9f%y[_s!>yFT1HvNv,lp2?#Tuya,*Dyu3p3D~%aEVD7h-mpds^]' );
define( 'AUTH_SALT',        'r+`M?i_EBBKqA:LN*Ss9(KSkzZM?/ }ZI8B/6f9hFY7>7XfD6Am)bl(]CUnE~3We' );
define( 'SECURE_AUTH_SALT', 'gU}@bLfEt;wd=@><}_J:b%TYid^CA&UK(AdDGPuM`7/.%fbNlKW_|L&No[Hxa7mp' );
define( 'LOGGED_IN_SALT',   '6&N#C_kmg}U+ +**QX`6zd6H17cxH~(x5$-%2vs.xdnsa8M~yK$;k.Z]NY}_3]]y' );
define( 'NONCE_SALT',       '`mocM#xPF}tYY/ZE#W*hG>u=^#=<{W+eBg|J%+xXMq6g2|OYO7+eeSIBD8>h7~p/' );

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
