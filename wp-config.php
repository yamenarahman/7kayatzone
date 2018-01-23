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
define('DB_NAME', '7kayatzone_db');

/** MySQL database username */
define('DB_USER', 'piercodes_user');

/** MySQL database password */
define('DB_PASSWORD', 'Piercodes@2018');

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
define('AUTH_KEY',         'JEU45jL5f2O1vJmoVpQDm8NMxg3WlzhqsxUbQ9e7ZdlDMliXbNKKAjv6pDsxo4sF');
define('SECURE_AUTH_KEY',  'MVmEw6IhVWCBZa79IzNsKSBkxea6a6MSkpyrQgblfnpoocoSNxrVbV19zHUYa9ej');
define('LOGGED_IN_KEY',    'cGtjb61v3DAwrXH9zhc8ZMCxpNvm4YRRt0g6iOdwmEpzTqFYKFfO2ZSTK8zjlQYO');
define('NONCE_KEY',        'YeFzioLlQe94LaUrB4BYawA6KMewLYRyS7b0M0sG9t0VUaTvbSYl2yq1mFDBGGVR');
define('AUTH_SALT',        'vSQkFMVPluj6CUFKAXN5DDedgV2V32ZLmKcPsZNbeaMwkhKBqH3bFKQpKSEUViC3');
define('SECURE_AUTH_SALT', 'iTPtjJpdEvEuLxNAFwPXuCXFxiEVDeSp1NQ4th3aeeqTtcv1FxAqVBtRm2xRSVqH');
define('LOGGED_IN_SALT',   'AGngOTVvZ7vHAdnSj0FOumFT2MQy1njJbvE76Yz6C0XtgWUTPtWVWJj95Iakk4QC');
define('NONCE_SALT',       'MPZZglY3ahsqBsPPTxDy5RQDAUSR0UfEaHbJQ2p2S1KLp7sbYplo2wc0YKxrqWk1');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
