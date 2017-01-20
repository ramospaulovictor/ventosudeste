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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '~n$+bu`~L0Clu{qt+j??Y)e;JD1RFAV_z*cnxF5.i[5^)BWbTMlPuk/}#S#r3ye%');
define('SECURE_AUTH_KEY',  'd|bd|5rf@Huf8@*Df#;S4fC.7(uz?U,[-dj2v:%y65{,G6H?8pzc5jQz,?x2sghy');
define('LOGGED_IN_KEY',    'Db?v<Dby$!LQRJ|bc1e[p^N59zu:BSqHOaQjB^sZljH[#uFo+!_QsIC!Lgp09OmY');
define('NONCE_KEY',        ':N9~26l^ByQep/5+7gtdAMiC dVA|!L.zv5 <28-wj^lMyA_G{]+%!6?+cMDh:Tk');
define('AUTH_SALT',        '@BsZv&~W{tF@(|>^uRe<%s1l$*,g@<dTQIWT,1{Q2Cedi)7vi(sO0E,1[O$4i_wK');
define('SECURE_AUTH_SALT', 'M!NefUG6*.9XBsA)&?deNLjDJ2K1DaC5P!+%k.g#2yq;rBy|R9>y~CrWa3qjsQT5');
define('LOGGED_IN_SALT',   'l}I#Ba.y8Y4wR(zedL!<+E?>[tiK)BgE2I_GB{!yF-**mSiE O(7H^*tP-jOUu#m');
define('NONCE_SALT',       'FE2iZ)9Ln>Kizw7Q<)qW3jrsF|r$~|w6j[AR/JfC&e!I[.znLIPa):^-$uT3D6?B');

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
