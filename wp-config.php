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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '&_l|+AG,9<?y%jn|HG/V.:Bh_|MHtgJCpBb{EIHjze;tQd vRNZz1:{WSi:#,h$+' );
define( 'SECURE_AUTH_KEY',  'IHEQ/%I(]xtBY&9utr,)Pr0$TH<D0/cKbEh,n|O(v@x-_8n&%*)~8#71vKr2PN1H' );
define( 'LOGGED_IN_KEY',    '!:GIPJP_~C~RcY/h<uA7bi.LPETH_GLAG@E^g@R|&pmL(*JWV,!)`{TPel(d;[|h' );
define( 'NONCE_KEY',        'U:*/Np2hU0j `/bZ{v>#)y70ZU!7`7%-L/nRUI&<00~[xJBJZ7heprW1WEp,Ba@{' );
define( 'AUTH_SALT',        'ZP6x%?H~4]q~1qNDXDe2%1W<V2#WO,ZGn~$S`B)6Qj%SoO5nR`=M1iLwFzpj8i9_' );
define( 'SECURE_AUTH_SALT', 'YVwT(3rjt&,1@kS!rSD(lEy-nAsA*pFsiDiM+^mVIROBkeeMJwi06*-@}pUlSY5B' );
define( 'LOGGED_IN_SALT',   '-SUu]:.<]}qSERC6q=u!Q`nc#(6LlhxC3<[n`B83}2-%47Se6BxflFeh9L-OusW=' );
define( 'NONCE_SALT',       'V$U`eCIOw@%AK5?EzRD%VJDwjFde_x^ZwA{&Zg?y`COrk3tiy^&<n?vHzE,OcF!s' );

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


