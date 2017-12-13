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
define('DB_NAME', 'portfolio_bdd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'qevJ&?Z|?4i;E-)e*>FB3sM}Y>poBLHFawF^tg.#)2tX^r]8_:*VT={Cyl}~50.F');
define('SECURE_AUTH_KEY',  'i[9{ wzSMkSc>nPj)&81sY@!:SG4ckI*66Z6t0x3PLEy9~?Eru+!b76e;VD925)H');
define('LOGGED_IN_KEY',    '{iN*rU}istBAJAJISe1#kS>Eq{A`R|l`)p[kd0FmH,[D$ZyAqQDlbo*_6N:6Sv7+');
define('NONCE_KEY',        'o`3RJO^<u&)cmXsnn.70gV1he>0^Ac;VhW##|hJ7A{)]!EFm@gMJ6]Ff#9%:Nv~s');
define('AUTH_SALT',        'C^5(mf%WHRqN6M9R?WsZN|eH,*x7pNztP!3b`-I36uQ+O?QuhgagYC2:K7@=y{C{');
define('SECURE_AUTH_SALT', 'zwCYlrpha35QR-  K1>yr/>88oo=zN6 1ZUq@NIdKz;*oOt#smj.QR.7]jQ+t/]p');
define('LOGGED_IN_SALT',   ')fs<FT9~ R<0kRl$`f:|[0&U%+q$si7s|edrQ4P8L>vZ:g4QG?c9UFs]}Q@{D5c:');
define('NONCE_SALT',       '!i[oXT_N&7@ (i]H%<;1a?rDqQSohU8qL%9BClC(%7J(d[-?zIQo)|bL;M?XRPRn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pf_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
