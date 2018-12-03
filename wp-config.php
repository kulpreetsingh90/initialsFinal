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
define('DB_NAME', 'initialsFinal');

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
define('AUTH_KEY',         'zs><Z@[vaCw|%J#9,!d:l>&/]`SN$+n{snTZfQc8DYE1FEY%ci5_+yPfDEHSRH:T');
define('SECURE_AUTH_KEY',  'g h$4:B2`;<zCV&m7/|*n5xP~gH]+n#1pZ7WeiStFQg!bFrNQKzU@T<gVk.,)Q2S');
define('LOGGED_IN_KEY',    '(u2@dC%E;m}0obhE9Y}enD}La?eSfvD)_Lb/~TE3%J6VejbfwT#vS$fJ}S0Heo)l');
define('NONCE_KEY',        'Zxaw)kbt~9&5doh,P/U/_yq)OjXkj%jpJ>3tqjZ>e|R7B [21KTwKgjqC/A3XK@K');
define('AUTH_SALT',        'dU~envK?V*TKf7^#wd7[-Hh5/,3{7[r@j1@ZN^YL/_dBz:[ciPBGPl6#@5R8<xZ/');
define('SECURE_AUTH_SALT', '<rb58o#ptVeIq36JxVh:!G<Nk?KKEYvur475z5nD50VaW[Qds=-<TA;u3`Sh;3VI');
define('LOGGED_IN_SALT',   ' 2 /Hef0JwiNx&O%5{C[]JWd.rC!lm:cg(}yMH:-`MtTC<?hEKgAd]X=IW::wj5z');
define('NONCE_SALT',       's=lX#qT84|54 S_+<.j`(-YTJngIH:fF,Cw{v}Je+[+7[Z=Dzv<Mp15#.qMh%Nyk');

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
