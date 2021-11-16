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
define('AUTH_KEY',         '5vwLKBpU7Ta07gkb/fAQzHIT5kVjreOJDrK7tKV8ECaYy8Kr0ud4RFIptxP8IWOFFgdxMydZlT6DSUD55GGyBA==');
define('SECURE_AUTH_KEY',  'vj7tH4CQxP259h9b/jQQUJQzBUxGLeMPcC6ILPKFE0FwnfHZK9kb+RnH1Jp2ULLmGr+T3m2mjkJh4uKv4kmbIw==');
define('LOGGED_IN_KEY',    'iU8oVJmTYgJ3l2KOPWNIyVYx8jF9omWIoqqoaJTXQAQkALz2pcZpS4sW+r7nzpjAtTouEukyQqTSfjD64ZyB9g==');
define('NONCE_KEY',        't3xUL99tBZfWtAD/bd97UCXL5Z+a06k4SNUibeJSKwo+K6Fuf5a/fGRYNSLkGYDScF11jeqaWCkzITnZygjZPQ==');
define('AUTH_SALT',        'FVStOJArB/zngEk3NJ2aICbEB0d1A+u5TZiF+Mekx/ONBGbOCghMlKixonVKdtg+cRTspW2bu5JmaQaGZgzxzA==');
define('SECURE_AUTH_SALT', 'QFFJ0gqyvtKRxhKc5gfk63FQqunUOUYZvVhvV528ajRBzKx/HAbsVajHZiL9M4QwoLQVGp6iFuhGjf6TsLbUAQ==');
define('LOGGED_IN_SALT',   'G77Ft+/L26xCIH4xjThrGqABXvFKA2mmLioFpZIoLlmKu/vGM2JDhzeKAAgiAwsvcKRzdsU6AIldhujALUcYew==');
define('NONCE_SALT',       'sIiOKiWSXdD010Zf/G1NiFYAGQyENmws51D3BJEoRtL3xxf4LsJ0P48UrcfktCeZc0dXiErXmdto2X+FfUNORA==');

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
