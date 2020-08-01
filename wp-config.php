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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '1qaz2wsx' );

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
define( 'AUTH_KEY',         'zNqAzK@dTc)MLf}xI6z%q$=3;8-lf/[^*_u:|(DGDR*C@pcle|y>Qg8Q??|X`SlP' );
define( 'SECURE_AUTH_KEY',  '(jh)2#D=zOm!^B)~ m>%lV[cQa^x/N$M5gH)fhN5SrN;p|CqI1k )U2!r^:y C^U' );
define( 'LOGGED_IN_KEY',    '0-R3)[.)F/bP_2{|~:.Ry^UYv7L#Jvf]25XfHUs@ewAs8ymqVo-kK`wY1QdTw$^?' );
define( 'NONCE_KEY',        '>z[5fEpauIL1=P(,S,u,Q| ^g3^;U~BrN~ !km,.rj3LPaU~is!YUE2y+77W{QBk' );
define( 'AUTH_SALT',        '>SLp{1r?]f5>=@ifi9fS.y+[URF^Q!}eu:YFX6<>pN_,1GE8q{vdR~J}a&8hB<RZ' );
define( 'SECURE_AUTH_SALT', '-,h-eDdt~m:M[+)Oo2]&0=)YNY/Zib(!&[h+}b!R1=QXCmMMe~h$&<QJ)X*[>d?*' );
define( 'LOGGED_IN_SALT',   '$[vk{4Kdf-k^_+X%Y/2`_Fmy|i]!ZNlM82wNB;np@B1OOWVTiJWK~2pfhEb=l%Cl' );
define( 'NONCE_SALT',       '9l|Fu6o&2A`U[}/ Qiq]4[up}b7|9<,$Lbth08UCKnkmsyONcndt;g(g-XdhCC1$' );

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
