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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hx0KtASJnOO4jdlNuYqytU43xMmENAaxuOExoKiR2W84DNkWt2Fh73LvtQZ29tNZzEaTyUQtb4g4g6T6M38+Iw==');
define('SECURE_AUTH_KEY',  'Yw3wjD6Fl3i38CFCmh08S3Cg6d2cGwQpkxksjCJKjJQu4frBECjia88neURYg5dB1xUeo1YsF4n7+5LX52wwDg==');
define('LOGGED_IN_KEY',    'NP5gTvAuLaAzzrmpIfWblf7rCHV8CZjKePWvd/XPPlZp/aNnYJ7ctSnlogwAIRVxJMXh/dIHWZ9hnQ2bNQ0lmg==');
define('NONCE_KEY',        'UE/n4e405f1Rhp/sPgAEkUQ9OMWjM0KYU11k3Tahiu+MCNFOi4zvriuWU3vWXJ0FHB7/cUGTYtTcqJDUzQ64DQ==');
define('AUTH_SALT',        '9+XfSTll9cVGLJA587DBp5KaFN4cmA9cD97uKmFbxh3fBObeLjDBPI32Przg8jgWB3PG3/I0VeSnTHG7JESg5A==');
define('SECURE_AUTH_SALT', 'onc9TmPBj9+esnat25aTc3Hft/Z+EzhixWb+jwCrd0t/bOakIuZ5qWovMOBFhmE5JiPzW92pbyY1SWYs74pgvA==');
define('LOGGED_IN_SALT',   'zl1YJ9mGthlZrLA2mWQciafF8WBZLi6vTQnIiIfteZ4LhAt8v/nRamVKDyVDWvWV9ZmdXf2hmn3YzW6PiEPnbg==');
define('NONCE_SALT',       '5uFNY8+6ZkCXr2uCeGloa+coCeOj448ENM9F2NEngcaYHOKo6h7U4oCtN5W+apzCEPHgAGEmrDpujrOEC9p8FQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
