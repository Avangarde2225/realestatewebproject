<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'realestatewebproject_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o+oyGGm DEcCn0L;FCNTYjD2/AqoK E2VIx/~Rhg@J=2ZGbi/C?lU02y2rUFi]z)' );
define( 'SECURE_AUTH_KEY',  'VA71TDW.- bM[d5H>1KW1ImL]/4F,HZ51:!q#S|tLYY5{~{hFM6 X|>!&.*>>vew' );
define( 'LOGGED_IN_KEY',    'qNe?+9g,-z{Q: e(A[|N[PLra=?mJhQo:/Q`heS&)ml:n2p7m26cb,l>M_2BleS]' );
define( 'NONCE_KEY',        'Jeo#|:`S--=CSaIQQB8Vz#.vPsoD{A#IcbDabY*{zJTrg>:hK.o&*q6o$]eSCxE[' );
define( 'AUTH_SALT',        'EX!z?vO.eBr!)+WB/ODMP:WNZ!c%i]UMLl*r[HM9)=*2$Rx}billV.C.QoxBA|tW' );
define( 'SECURE_AUTH_SALT', '_WU_?ckc|*c|iVI|$tR-Q@=W~H)$;luioG!p[-uY3mD=TSoJr}(&DUc(P$SjyDF}' );
define( 'LOGGED_IN_SALT',   'x#v2di=f)Zh9i&=kB#tC>L]x/pc&  Kq_lA%5JA{)_Q};y8kN1,|~bqK^<5AV^,x' );
define( 'NONCE_SALT',       'jQOPj*2n-Wo[~/dfvbVp518Px!O,rx_C4(%ju%+25s!lP%`[U@o0+T+K03v+D~KZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
