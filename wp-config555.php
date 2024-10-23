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
define( 'DB_NAME', 'shop1' );

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
define( 'AUTH_KEY',         'F$*Ke`C*e/ZoPo{Eo.V?:1i<2R5d.qec #4~-~ LgARp~`{kMW>HiGXK)tr_x,5S' );
define( 'SECURE_AUTH_KEY',  'N%@$ lDSIKB@Fn$tMTKix[h0n/u#RVilK8xmEg+Ua)?G/995@R9>7hv<%~j_&0:l' );
define( 'LOGGED_IN_KEY',    '8-VfZ436J{m+*[/4]3Bh4dobn=SNI~[7Sm|l;=ZC^Yy961LJ>pMIwj )*-oU!$.V' );
define( 'NONCE_KEY',        '`9~[s;$ZMU`G/GaO?)h8=}gMa`lWb-0hX>BzrlT(:i2y@byDj9n=NdGA!KSr^b^S' );
define( 'AUTH_SALT',        'Kyd+-111id]g~MKx6!Ze3hcQ!1 Eo@x[nOKF0SNS2vnacP|.<<9o+l!W0yKhx/K]' );
define( 'SECURE_AUTH_SALT', 'uNHtY&NrMjcS~qjK=E2G_j(-{+P?f%4SC~,Fp)4[]#fkn| *Vw_2)m6w#+Wjo4uI' );
define( 'LOGGED_IN_SALT',   'v92i4TP1Sj7Sz0ER}{4l34K{ P:1WzkBd@*?)3{9lf~nW,G_k<ous@Kv-=]qr=J]' );
define( 'NONCE_SALT',       'Yk)]6fYvfA37UvQ8!;4wZDOU%Y59$S<U?apG_7jh&IjO{}Yj%|L]J;Cz Tzgqo<[' );

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
