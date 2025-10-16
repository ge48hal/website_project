<?php
define( 'WP_CACHE', true );



/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rtmzapkxrlpa_wp331' );

/** Database username */
define( 'DB_USER', 'rtmzapkxrlpa_wp331' );

/** Database password */
define( 'DB_PASSWORD', '6)J1.S!pXtn4(p1]' );

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
define( 'AUTH_KEY',         'ebq3fppbrm2xqhomxqlqc6oxqeosj3ij3ncekkzvdjjxtm79ex76nj0go5kswyp9' );
define( 'SECURE_AUTH_KEY',  'jdvnihml1bqppvrtoa9lhx2jiapxtlefqhyudsi1ygfh9oc21my7ct4sa2ghucdc' );
define( 'LOGGED_IN_KEY',    'lasvkk6obpdiseeklnql7ezpioqajrly2qxngcw8249i8xcypvtyicz5ys4wh4na' );
define( 'NONCE_KEY',        's4vs2atpcomuok02pgo5ajkmmclmrt0ctlj8xqdje4ruad8tif3kxb7jsd7lpg1r' );
define( 'AUTH_SALT',        'hwlmzpztpsvhfknxyckmmoeqmmmtidn0q8jdudspxeiyos7fpynvrkqeg2k7myv5' );
define( 'SECURE_AUTH_SALT', '81ipda6uwcxysn4d3xxv2jkidbh1qfrabrpcbp0etjumnajj7yllycxakgfnvejl' );
define( 'LOGGED_IN_SALT',   'uo3acai8wojfwt9lwvmamkcsfppv2ay0dldv10lypy73arnbrbjono9mouhuj2ml' );
define( 'NONCE_SALT',       'vy1aomke6gtieonxzshieux3dgny3vs34cwbvnm6dfbvnjnumxgqz4f1fjd2mhlh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpkb_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
