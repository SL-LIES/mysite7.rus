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
define( 'AUTH_KEY',         '%0|mr$|$nWxUM+A;]e6H6gr#1.ruX[0&dw[u(C(57A_7mISS^,tq2D#&A)%q1EUQ' );
define( 'SECURE_AUTH_KEY',  'in*rp6%Len}P7IxkZ5,X&`84[;6q#&}!&4>ril7pyYMerV3Ov4uU;ZDERt9I~7|`' );
define( 'LOGGED_IN_KEY',    'KgYUoc9<sp<bMPT6Ikvy0cc75=MIBd}jCPL{4`z<ZHGcV&*,RO48cAb|%P p_T(m' );
define( 'NONCE_KEY',        'Z|{iop*jD#,ed[qFbdYv /Pb_7s*-@X7`C/tCyCoBM 4#q]rJ}c-`{qHq~Xm?x5F' );
define( 'AUTH_SALT',        '|wdZ{WxnG7k-(hkQ(&M[:8,q)QijW6Slo{P 1E]&;`sff,ri2gk27rNou0z.:at/' );
define( 'SECURE_AUTH_SALT', '^<5eG:hXRW5]wRn8Bxa+Lg>CmT-qpSv.hDu0MgiO~)Yk4t]!oZ,,Hs^Qr:hEA[,M' );
define( 'LOGGED_IN_SALT',   'Z;LPH,SR7u@sz]^y4bM -lpq*xn D|TDdMygmZ]:InRAhugV ue%+#~O<oi#MuH7' );
define( 'NONCE_SALT',       'x(^B2u/:tL*`D.Fq)jG2FAZW3S%lV@MbA5*K_H%_C)gQ[itJp1A!hacN/Xl0#^#}' );

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
