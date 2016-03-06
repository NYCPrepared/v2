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
define('DB_NAME', 'flospace_wp473');

/** MySQL database username */
define('DB_USER', 'flospace_wp473');

/** MySQL database password */
define('DB_PASSWORD', 'A8P4aJS[5!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'oyosy92gu0lckjt4y1evynjzhygxlq1rbbaitshdvzh7ozg3xasrdfxx5ihyaiem');
define('SECURE_AUTH_KEY',  '1nwtap5fozlgcluqg012wrcgepjott3yn6pd6tdqrj7juuj51g06sxvbfzq8meit');
define('LOGGED_IN_KEY',    'bx2fjkus7kakzgxuqhnhm2dqibds0ri2dg6uyjwseezycs25feljia6tytjivamv');
define('NONCE_KEY',        '6wl2xtayqscwm2ywetnb24afvmkomjfvbqcs7bhrx3aoilazx9cmevc1ymmlyhni');
define('AUTH_SALT',        'jhwo1howy182whpj8wwoupkool93dytvszg6fgrsiox4ju6miyvqoddeloap9ho4');
define('SECURE_AUTH_SALT', '6rlhseohcerlbzkehbuxdhudywcuwdvxiw0g08jsjgexjvxmz4zm5e6f1ezreelb');
define('LOGGED_IN_SALT',   'piszx65ghozyo85jwmhzcz5z9cq0d05ka2qw72sky0owvrdlkx1q91be2awuuchq');
define('NONCE_SALT',       'kkrmwdxavvxwuacpuuqjar2egr9uj9qthathsapcnfv35z3viecee9scawslx7rh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpua_';

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
