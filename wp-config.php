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
define( 'DB_NAME', 'wp_host6_db' );

/** Database username */
define( 'DB_USER', 'wp_host6_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_host6_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY',         'V58~(1ihsR&-:|@n@3-v<?8N<vU?aarIm2i<`SJp@yI=;HJfxTE{CF?1<AO(dD;3');
define('SECURE_AUTH_KEY',  'zdE(CKftsO4C?F(s{w%paSaHQ;L?D,wL1fZ1GLCQYt~9$d2%mb)CWKJ6lFX}Ey~A');
define('LOGGED_IN_KEY',    'pMtw §§u40}iDpx=D9Tjr`rQIw_U{Jw65E>xB}avl>qswruWJzlHh5.?F@(E $&/');
define('NONCE_KEY',        ']hL_%h.vBJy}NV^jmf8(1H<~s5L/EH&JhP%vQ.NY@]RftC6Y~o3sf2[2~21_67,b');
define('AUTH_SALT',        '@ITz82h:|WpY5$}7BY_G-kg(YB5^N;4e&ko<6)nW4[q|!ky{Tm.%%La+3Flrb[AE');
define('SECURE_AUTH_SALT', 'uQ8_r@Yy)h=Gs+f^J]X7g)EBv4F§.4Py[etqV_j2§:X8sq|e53R@/;XUxkxw+N^/');
define('LOGGED_IN_SALT',   'gW.4),]`:x7 DuEp9Wm|887jPw,U -mNoMK7%Zf=~>ls;rrG%+`bNj]i^f53EIx=');
define('NONCE_SALT',       'T{I;G4T@J@z9b0<,<Bwb22n/tgQ}KyvCm(FM~6-(1j:(Ek`b]]AQx@KATGQ53@Z<');

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
