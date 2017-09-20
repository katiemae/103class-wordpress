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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'x4i>qu,`2<*ZWaARg>]*-|0qrl$Wy2W%={=u%=1~o`EOS7v`m}aw5!TV8??0:K]*');
define('SECURE_AUTH_KEY',  'NKbZoEi9TERH~L;Hc,nQ+JvIn/v:a;HVBFA$,a@!p?ic?x7#]02?ut,FAdGedqJ9');
define('LOGGED_IN_KEY',    ':pe^Aig?J]e@vH*XM&_3e.d{>~.scWIOLz<X$cGvJJ]`#M<g%/Y(zS/}C<wS?.0Z');
define('NONCE_KEY',        '>SeE?N;0RQ}q3-,Nx#,vey{mT=yD~QHolekA1n+xRP6U!5XR7=??OSI(5?#d5N6+');
define('AUTH_SALT',        '9RDP@{&$IQ%]cB@ai@[iI,[@)Zj;{q8DvVO^r6*m!x5dud%PT eC$%48e@=?]Q;^');
define('SECURE_AUTH_SALT', 'h1!*#>2Ji@b`nkgr-k!> Wh&>W6i+q3CblwD$MOR%roK6&PnvMm$jU`!!:s{dV{_');
define('LOGGED_IN_SALT',   'In`8MUnyulwIdZC%59,Zjw[%1s}/`RB]VK3q0zHx90kH!=O78|yOg5sZ. :rInV&');
define('NONCE_SALT',       '1B*3:xRM. $Z.jw4~08hA,8)rjwF%;]LDTZXlrH0_Nlk56XU*@{92-R7/>79Cg5.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
