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
define('DB_NAME', 'joshblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tadila');

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
define('AUTH_KEY',         '-PWCtYAsK aNyx_*IZ@nPH*w^ZDS uk}L;G=V;yy+`J$47RMm?BWo`(],U?};E}7');
define('SECURE_AUTH_KEY',  'hnmw4=f0wymU]<{6h]fajgfX}-~h.Z}?Ju2 -|Mq_R86/~R[O&-4.c[/{Am*WX}n');
define('LOGGED_IN_KEY',    'sYjh+@+@^MIQ+J1T_!cg6<Ib[];woM&,uI8J^q&e^W |AY&Br*-Qa$JUnq@x]=+p');
define('NONCE_KEY',        '7eOn+ 7A^`Gn5V7y)Fl{W%{-lb$qeqIImT!u}JG-KAThOY*XKrl)Zy;P.D`<QjO0');
define('AUTH_SALT',        '.saQom85Rpmqvg{g[/$%*;F)Gl6dRU+~aSF+R+-Cbu:CvvlRo[MYX;%z8`%>(y{U');
define('SECURE_AUTH_SALT', '=:xzr(Q$JC/(_W724)*6Vxt JoA?=d;3:AT&PSZV(]FRpfpF@ .Ywi=u66r,2yap');
define('LOGGED_IN_SALT',   '-q/jkin(EWbPEfG4O8]66]Wf=_r?c2OV%Ul6&#/,e&98@EQM?KXZk:])tpD[wEW@');
define('NONCE_SALT',       'N}v<F|`b^xX|*5n^X*j=oUyzuiKQ#-WsllP@c@A2l,;VrmzIln/$&Uj-q@UBH[>}');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
