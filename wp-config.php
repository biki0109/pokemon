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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'final' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'X!edqWF8B/.n/ZDxRH{_YM^:<sOJM2#4&a6U%b:,JY+p LH4i>;6c-IzyL[~O}G)' );
define( 'SECURE_AUTH_KEY',  'K2NC$3GzI>Gb6U#M.x9|LvTtSW*)2%~JPmv-K<]86V-3v1)Caa`xr(Wg=*(Tp ,v' );
define( 'LOGGED_IN_KEY',    'VXmLR>7S@m^ur+[lb=Eb.=$FY/c#s4;YGKp}7{Nc5u{qOKRJBaUjD-cy;J9QRvHH' );
define( 'NONCE_KEY',        '5C9<6?#{d|)OvXuV&z |1WsSPAMWs>l<<%VeE;K-47$Q!P`^-u4|CJoQiQf-D- T' );
define( 'AUTH_SALT',        '}a@oeY>BO]}2h^aRW@WN0ct+Ll#c^W!NGO5m^Wxzfvc^PY-k8xX^c@TM(Fts[@(u' );
define( 'SECURE_AUTH_SALT', 'rq_.7,uf0T:YkJ0R8xS$vVGk9:f@XFoeyZT2+#qhIK[&xa.]@1Mc?s).U5xlY-3`' );
define( 'LOGGED_IN_SALT',   '!pI<B{:`VI2jM0>)YdqUKKq|2NC=0h`Zn}k?Q]G3d}p_{4Z4Y0!#$$<6T?}]$mI4' );
define( 'NONCE_SALT',       '%$ISNC020FyFWEnnm-50L)YYs@BI-kB/Ji(/&rO>nMY$e$I:[*/Xat/r:nbWjmz_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
