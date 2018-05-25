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
define('AUTH_KEY',         'J;Y;V(spCz[K@`:{1.n{3[F1NTNU0<~e$zK&4;kQS.kp|>yk<=j_<k(pXYw:%Vlf');
define('SECURE_AUTH_KEY',  '[f-sd10?`7S*2U0YWzecaFK}i]>@)zW%}j# }L#TBuf9dnPrey2,UA_9D~ _rt02');
define('LOGGED_IN_KEY',    'PT@s#Qt[56Vy3#!$u>Ut^NdK)74hB`HRpZ4h:d&_- 12Mr/zJ/ykq.ZZ[AvJaHeo');
define('NONCE_KEY',        ')61a_t>,9*IL=F29MR3N7g.R]jA]rIp6KW#F|~#|J`?[ZiGq8qPBr14D/iO{(aP;');
define('AUTH_SALT',        '[{x7#xK([pWqx!i+ocym}MM>o<T&hnS9SVtR</.YF@H1O[LJ*},C>c}b`6H?XqLy');
define('SECURE_AUTH_SALT', 'SdEd4tnUoZY#3LwE$u2_JZLg9kp,hBDs.1}3Y%*j;p*59~,:_(!Wnz_@I,`~nRM%');
define('LOGGED_IN_SALT',   'aj|P-G5m_[enj+VWyE-7V~1P+WpvPQ{rUcsPG*.xXokQ0~0rs@FZ{UTH+F4p]8%b');
define('NONCE_SALT',       'b1>SGAI_Wf-=c-]SSdKZ6m8-&{+<|<.(q>vASbd:.?I]WM@cT_q7M;eASfP.*sP7');

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
