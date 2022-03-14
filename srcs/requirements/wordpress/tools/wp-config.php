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
define( 'DB_PASSWORD', 'cdionna' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_ALLOW_REPAIR', true );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eH-!@twJWaQ;HCQS^=qm*@<!ikK~d;I_8aBej#~)mh?+zYz{NJqcwu62~>3#O=8K');
define('SECURE_AUTH_KEY',  '_YH}:3tbwl3/|l{UllVYB#cgQ+MI>W40&%8]U,xfAf|Px8u:@rl07!-$+m)A^,5U');
define('LOGGED_IN_KEY',    'k=3=HA-KL;)#|{`dX.LoO3$g!#u@kK6XN+ V)}o$ N]Q6!{(e|Au]gzRor]rZQsA');
define('NONCE_KEY',        'i3jb`|u4EeJV%Yn6+Z<U9+%+K4qseUuy)((aG^}YID}op^3fwd,@gMRM_~oq4tfP');
define('AUTH_SALT',        'l.J_i{IZ.:MH?bIk9DZt~=/P%W|I9l?<OWW56{S>+F]mr1R2}+.6ur}vmNN{tEt-');
define('SECURE_AUTH_SALT', '0p6OW(#N?JUf}e{OoJ6CZdhd=|,T6Y1JapR]}-6]n=UL<nm+%Z#JuB835n!6sBD>');
define('LOGGED_IN_SALT',   ':c<@H{k,-4}m2xGkfjSIGE;~tP[B5DdX:}U$FTit>)qx&S]s#*plqV$Ms*ik&x(`');
define('NONCE_SALT',       '.94;X>G9~B eA2w3GzK/jL<mLR^@#TKdgM+(_:cCc5#N~r?Io8sepc*XCFJrM<|U');

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
?>