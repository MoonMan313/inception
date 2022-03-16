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
define( 'DB_USER', 'cdionna' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_ALLOW_REPAIR', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' >S|uSb2;+|NQbccl%1@y#{|@xFnI~PE,DtY1?NUX#f6*AP!DO>T4:zw/$0oTY:3');
define('SECURE_AUTH_KEY',  '*cN{pLn6F1DpwTRcJ,7?1_lk2}!v0[]@(+fadRug:{T  -O91&g@+x%.`vErg,e}');
define('LOGGED_IN_KEY',    '}.-Mw)Q?XartLk+GQu+C&@lbpOq0ZO4}qDpZ1^6a?(Ol,yY+:[$^|].+`y<;qpDi');
define('NONCE_KEY',        '@kg.>;.li~{b#b-rW8+@c~Q7224P`4,1~Tj-2?)[Z*$GTXZ3x(!VE|n<=1BJP|0T');
define('AUTH_SALT',        'AWO%nU694zE8:&&-Ry?;s/fp-h<xD~NMU|m<06u{ylGIS0*O-dpYz_+RwtX$)4H:');
define('SECURE_AUTH_SALT', '0>XqpW34B)5wBuAcs-Zre|8Nd(n@1AvT=hZ|GoHaI@Y}k|3|#O=w=X>g :OKRX3R');
define('LOGGED_IN_SALT',   'Lj|. ~<gM>lcJr;Y^N|s+|5a1g6[zo1qeL>C~L;F9q~Z7u/1c[ XLdbUP.1-m!zN');
define('NONCE_SALT',       '&lSZyS[%?1Z>?/`[EDQ|LOv{B1l_t<.&:q]@cmHgW%A4e_v]vH20%^+{sO -a7,U');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>