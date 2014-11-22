<?php

/** Include Genesis to use with WordPress */
require_once(dirname(__FILE__) . '/../bower_components/genesis-wordpress/src/Genesis.php');

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'l0cSkgHw8Dfw9ls8');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kJ*?cQSMUJqO%t|`p@23|**f~M!gkGU#|A.CAv X3*PE=R<8#k5cZ{u|r|s-U(sD');
define('SECURE_AUTH_KEY',  'u1^+}Mx@az+mo*7%]i=a{jv^sI,z=J-u[#9?7Yh/@^GeA&Bh#0LMpQipmlIE:H=1');
define('LOGGED_IN_KEY',    '?<`6 ncD`uWazY4^~$(^L!j,NyQ^Z-lRNP[y]gu!GU:sqF7E!:lUKN3NIL)!a}y0');
define('NONCE_KEY',        '9PuW,y)Mk|RN)+REosGyW6>YBqAnbT2GNhugth:J+yB?]HL%,7.UF@nXucmsLtgE');
define('AUTH_SALT',        '8<3fd3uB/bfH)4tO|+uNS-|u,I]y$>f,-C`nzgx~?}U{?Yj8+6e8LCYg7f;+]kW4');
define('SECURE_AUTH_SALT', 'UStfm8j/|Qd/TyA9Q!Rqzi+~-9M2|[vIfr.(;EUCM C%u~6[]||{L*SZ#<5(YT!t');
define('LOGGED_IN_SALT',   'R[9|$g^9%i=PoUK4?UsUq=_Qk?ny(- ]IJS|5{5/jP6%.Za+Y_2cZSEn/Pi|*4=>');
define('NONCE_SALT',       '=-o/jYF3UTNuS&,2wk-P,=a~.)F4}GTeAl K{H 3ZQ,iQrD*9@:db7vb87X0<lX.');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', WP_ENV === 'local');

define('WP_POST_REVISIONS', 5);

define('WP_AUTO_UPDATE_CORE', false);

define('FS_METHOD', 'direct');

/*That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if (WP_ENV !== 'www') {
  Genesis::rewriteUrls();
}
