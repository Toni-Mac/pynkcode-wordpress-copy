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
define('DB_NAME', 'pynk_code');

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
define('AUTH_KEY',         'j^um)J!xqjmD7_WGCjoM7!7+Lt%[-T&?O9}W6Ajz;,9s*@AgHgRcWRia1a=kYnbc');
define('SECURE_AUTH_KEY',  'Hd`/2=D@]Fv<V3Sk;hM[8$2%,O3p@_c/M[`9>TA~vk=}*v@zuE[H)q`h@j|#9G#o');
define('LOGGED_IN_KEY',    '=+.!oG_anLO:*`+NFtJc~n0OG;btq0Vp9flog&a&&Ws:M6.jQA$yhIcnGd,f]>@u');
define('NONCE_KEY',        '{UA(L*>XHrs]/:K):d5Gt$U,,V-<<bXb*%}}=>K0~t2.ES<Dp^(~UOcQ}%OUdm%=');
define('AUTH_SALT',        'q.lLW^H)5RPbRVQm2j#*UE 0DgmPfSp{Rn=zskCBEtX>ogWta]igrX)iLdR&dU1+');
define('SECURE_AUTH_SALT', '+A86X?6#vAGnhB^GzgYT(#pDl(sU`>*<puT==3g@K1LI3fOwq:X_b>CWRB[zD9|W');
define('LOGGED_IN_SALT',   '@5l1{ Cz^RT0xE:u#dU{H^cW`v,b?:Zlsx}a;N^I.P~kx6_JdSa3h!7,us%.h%K$');
define('NONCE_SALT',       'X*A6?h1#wmfdKWp)Gy{k;5jCA(uX]MhCssKH>zwX|T|x|]k^+-QFj/sY,HGsh*>.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pc_';

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
