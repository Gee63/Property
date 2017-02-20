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
define('DB_NAME', 'openskxg_wp544');

/** MySQL database username */
define('DB_USER', 'openskxg_wp544');

/** MySQL database password */
define('DB_PASSWORD', '535!p4S!4A');

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
define('AUTH_KEY',         'szktkg1qfk1j6luhajjpg0ewmj8vcwzxx1585fiy9szjuopaoajm2g8bp98lqufy');
define('SECURE_AUTH_KEY',  'hfzupcudkxklprq5bmw7f9zqal1gfxrz5xqhgqsldcitooozqe5s2bjomejwubjh');
define('LOGGED_IN_KEY',    'wulmnwswji1enytjoonep3741jloeld8lpcefus45b0whxbfjy1insojpvt4ya8x');
define('NONCE_KEY',        'fzagib7zgtcgrkwjevpvnd0mdrhudd00l7dhomsjoi953dszqfenwu1qrwh7ftjp');
define('AUTH_SALT',        '753ecc9tx6lsjtpad0gzzg8faeplwub1mdukqpgiissd7s0e7uoibebrmvs5eanw');
define('SECURE_AUTH_SALT', 'cb2dusgprnj3iaqu1oaudl5u3ojfzyc1ci37goch3axpn8s1d0iquj0qwhohpzmo');
define('LOGGED_IN_SALT',   'dy3lmwbf4e0vusdngnsok0hsvu4bvff0erifdskpo5rzonyfm1cgivqmkeaxymnq');
define('NONCE_SALT',       '8qt0arewrk1bytn33yhkby2oqzu21ucrzjgu7pi5nt3mjbqm74cwpiwrb0p6ge79');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpug_';

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
