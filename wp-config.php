<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'sharifdavis.com backup');

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
define('AUTH_KEY',         'T,5u;yOsgscF)jH]r{;xse~A3$DAr`29OLc=liuaDP-[!_53x^nRC:yJ[/dz%,YW');
define('SECURE_AUTH_KEY',  'F1l.Bb}!U1 pi1]|@k2-Rl}]q}Y2H`GKV/r)`z?]Y(pI+@`Mx%.Q7N?{K_!_AZf3');
define('LOGGED_IN_KEY',    '_DbE2Om[<RH[)sKr1upB}1P3J@y9Hq![VIp2Vhma{9]w9EQckxf`+ec:j!>.8waZ');
define('NONCE_KEY',        'GcRlsgc3MDD1mc^q@M4WDiK2/:|:N?*R~/<XTEd=Q0]>@4K%?!GsR[G#Q)lj9^_7');
define('AUTH_SALT',        'eI[Q*J?P =-P!+z-gXwe=Q9OI1rT&[js,GkCvoM)7dT /F0Kw2-Cfx)sz@e.eLb/');
define('SECURE_AUTH_SALT', 'hA;rcTT QHOzE2ts5H QnL#$9Ux~o~WSH8-sw$bUW+e#c7cUcf>.pMLAyG%U p9X');
define('LOGGED_IN_SALT',   '(9E.,bbh7:O:v8d_S(6_n]p.I@SP5Q^zhEo&}aj}psw1#iSP>|TsD:+a5-F?>_u6');
define('NONCE_SALT',       'Ev&wO@+IXZhhd-$)k/u!GtvC98le=!rHS_HB^W-X$K(#&,k.vYzEY[t*:7aCT=}r');

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
