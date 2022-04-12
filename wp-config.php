<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brandc01_wp341' );

/** Database username */
define( 'DB_USER', 'brandc01_wp341' );

/** Database password */
define( 'DB_PASSWORD', 'G5.u)6S14p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h0chwhscwubrogoqfwl8u4ritssxk3csmqypp1ot28ygbb7klsos3qxwtqsuklir' );
define( 'SECURE_AUTH_KEY',  '6mafu1qujeayfjqp9t3jigfypctzeezzghwnbduwilqnj8bxfiw2b6hvwvmdfzvs' );
define( 'LOGGED_IN_KEY',    '2hhk82fgklf2zcge1xdi9jkse9bt3nexg1dsq7kogmqw1yxexmzy3zbbzvt8m5im' );
define( 'NONCE_KEY',        'lyzvsxicocodjxxe0tjzpb26vfyh40odqdkaahe7r5oxhxrscfgu0npdxyhi9657' );
define( 'AUTH_SALT',        'pjm6xir9vsu3ggcaes4hqt9sxwqcjfyge6au2owah8n9lgy4vcpnyrphnhyl8m0e' );
define( 'SECURE_AUTH_SALT', '1bx04wma0v5irzklgd3qqnlsfmarspdz4v2dbubsrakvtkfmtqbeqyervglhrjxs' );
define( 'LOGGED_IN_SALT',   'oltiihcj7ujzuwh5u9lgbarbf1yrnaxfwv0yrriqufuq8f5gknkkz2cdoxpdaxw5' );
define( 'NONCE_SALT',       'g4qonjf1q5onycnx4m8iv6fwijw71fdvyhwekmmc2m37wvvc1gyd0er2usbl5z12' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
