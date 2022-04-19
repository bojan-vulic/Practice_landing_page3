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
define('AUTH_KEY',         '1QgR1gP5QxrZC48IMjUwrKHn5oku+uAdefmjnblsF8zpWTFbSuKZ2PBF6RHWUY4G6HzTgj1YBmF/W/KM2WkE1g==');
define('SECURE_AUTH_KEY',  'gxC5r5S+LbiMruf89BQv3k++as1fIRwGogc1OCGi87TJMbD7RpLOHlQrZy2I7VSgJgDH1UVGXccOfNsom3Dptw==');
define('LOGGED_IN_KEY',    'rjKKM9vZTbLRyXznfXxFem6F3FD4EmPFPtnz+yox/NeOiTHJ66SnuxQOYkASf5BSJUO1YRAg0e2C+bU3sOkqdg==');
define('NONCE_KEY',        'VbsU9EkrVFf068qlQb2ZQd9SA+lSEsCAn24U7S4BUukGlNDbok/2VaRN6c7O5Iy/oBRjX+gL2iu530tlwwEtiw==');
define('AUTH_SALT',        'phEGnBRxZm1sVff4g41kcuhhIP4RQzHNCwx4Bv5DoEmWG32dAQc6e5AZRVxAP8yv5JUJUyfhC/06gHAm9aLvyw==');
define('SECURE_AUTH_SALT', 'A4YcFwSCc+suZZwcS/mK2UnxWnLagEJPyQwavH8B4sAdsoYzgonfI9Wcn6xjm0SRyXZa5kaxtAwi27b2ezaDIQ==');
define('LOGGED_IN_SALT',   'GXmx7VFSQki/rF8yB1U3Slj/wO7fbxyAz5ZOv/cocqeJ2UgNVr/cGlGLRR8nlHTfVn1G1P0Zf4apCFrMsCMhbQ==');
define('NONCE_SALT',       'oTwVfskntEgqgnCEYgqsV5bEbEz9EGyr8ixAmaLX3JQlbVH+3PM1XOPuSy71c/K0kKM/0ANnzsXs2TZvBkD8BA==');

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
