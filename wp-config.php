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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youssefidrahou' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vEnhAg4hU5vKTwAhnyWdwTevAFuWMuotYcNgAGKJhwRZgxQ2cpjRRIxuztt4wNhX' );
define( 'SECURE_AUTH_KEY',  'oT7WGFF7kO6hesdTuEO2ieZmtWqhAnUuD4VNPsc3TcBmRwL7xB67IJnqa1YoOghF' );
define( 'LOGGED_IN_KEY',    'NHHxMnDLWINT27laPEniRrUnQ0EVzdqC6C1A09Kxtwwbd2xnO50dTiT363bSOSsW' );
define( 'NONCE_KEY',        'ntlygXFHRxQ5q5RaT6gLjUmwecz4hhW727itPssL4Zzq47znIC6bx4wMtG87VPYY' );
define( 'AUTH_SALT',        'iyphK19JkWPcxeJprAGWe7HehBhXwn9Q6qDwta7cG3Qo5QnzZFwTjq45jDeeU2lj' );
define( 'SECURE_AUTH_SALT', 'qrSv2AueaVyv3Ud20WZIbqaVvXtVWSZF4aobTs6tjzKlZWiBQFuVslpQSDHTHgq3' );
define( 'LOGGED_IN_SALT',   'Jin0G4V1kRDoaV8nzJBHZZaLJ9ln6BRPuOnWFnftXgLJqCumjKlO5qSJUdSiBQPw' );
define( 'NONCE_SALT',       'msiulZMS2mEeZ7lYuAKnhh30CG1BLmof4joRpHkGDw1P2Wrj0lGsO0fao8eBnF6j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
