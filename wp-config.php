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
define('DB_NAME', 'qmanpower_wp');

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
define('AUTH_KEY',         '6CQQ?Gix{~,r]Y[L)_&|tw9+H|BG4I Y~KBOXX;DnJ_M4<$HOy,]*t&KO%nZut,g');
define('SECURE_AUTH_KEY',  '[`=[-{DbvrQQ)AMUvO1`BZQYFRQ3!I.jl|+CU=p/7TaL.8)z&w8 uYyU}=XCoZX}');
define('LOGGED_IN_KEY',    '9d[T6G?UL_vUIC9pJ5?^L?vkbhmDWt)G) z#~21J}P>l[xb|r`xF_W|7T{F@*{uM');
define('NONCE_KEY',        '{)Jf$/PiFiYPNHV;vn3~A$jh@6T57#EIjmjV`@[^i-X/3tO:_*r:SPv5VLST:{jH');
define('AUTH_SALT',        '8`r)QNm(| {>?[;pL8])L4Nw$RzxI;X3k<sdpigE*pC4$ *O!$uaa5]~W<MBf#@,');
define('SECURE_AUTH_SALT', '{_YUY+8MwWpW~3IAF(qLJt3PC>|}=6S(?.L+Fbqw^BhUH>wzu*@x/mZgOqW#oQPT');
define('LOGGED_IN_SALT',   'FBDi`s/!xcU@AZPm`^]wI9=+Xl+37D?ejsgj}St/T3AMqjyEk2T7d7x6}$JdBJq`');
define('NONCE_SALT',       'HC>UzZl+0=#xoJv3[Cj$xT1r)449ZH- L+Q/raF5:=l6l_:3utv&sbnWKGP!hL64');

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
