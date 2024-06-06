<?php

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dhakahos_sparmat' );

/** Database username */
define( 'DB_USER', 'dhakahos_sparmat' );

/** Database password */
define( 'DB_PASSWORD', '4)Mi[gS-t!pp-798' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-rds.c7wk888a0hzi.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'gla1hhgbgaeik2odzy9xq9qhaeo5kciby46v8kieefrz7cjxdkwc0wtvmhyy88bs' );
define( 'SECURE_AUTH_KEY',  'd4f9sad8fbtqxlrwqeco2kovhhq04mdpwdsslkzs02hybtzptlhq3mh1nsp5s0xy' );
define( 'LOGGED_IN_KEY',    'em9yhbebwmgseasvrsh3jk2ykmb98ushb8dn9oazllelfbnieeeyzcmlpxf9xrqq' );
define( 'NONCE_KEY',        'drtfuntailcmy7ah6q7z8sapxzwhsprypiw0n4hn6fujyxmzggqut9bszigqbswr' );
define( 'AUTH_SALT',        'h90nrpk9um0y4upy4cdpqonpud3vz7kfplvn0umxptixvfukvltdtlyg0sb66hxm' );
define( 'SECURE_AUTH_SALT', 'ziellvobdez7a8uooalkmit2wispi6vxpbwtrdgnfxwgqod38yptt52w66ers5ti' );
define( 'LOGGED_IN_SALT',   'pnukgdj3rptrs4stqkjjjic4ua6kcobodqq2fkw4lk7uo4wym0cl2xiaqvgbnpgj' );
define( 'NONCE_SALT',       'gt2ipyrdwvpet365sq3whmscerqmxjqudrlgwofonsq5ix5jdnabdy7l8nqs3i03' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptv_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
