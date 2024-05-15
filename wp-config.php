<?php
define( 'WP_CACHE', false ); 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "websit19_laundrygrrsik");
/** MySQL database username */
define('DB_USER', "websit19_Laundryfgresik");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024!");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
trim(('wp-salt.php'));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
#define( 'WP_PLUGIN_DIR', '/home/u1571057/public_html/laundrygresik.com/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/u1571057/public_html/laundrygresik.com/wp-content/mu-plugins' );
define( 'AUTH_KEY', '4eAfsuHcix0vzzFTGBth8A6JbT5Rs6aL6U3qFbPwT62Kype8KcU8gNfpKKrq0D2C' );
define( 'SECURE_AUTH_KEY', 'Y9P9vX6KX4eub738hQKa2ypYCWdHgqz9ax9vaIus0Lf8NnCXI7pTMH37MBdxD3fv' );
define( 'LOGGED_IN_KEY', 'BNfeuILsHiudNoNsKPdnwCLIa5I3QSUeBQCogYyPwNMM0FuWQfK1aLxcx1pVJoSC' );
define( 'NONCE_KEY', 'e2V6YdE34oM6iTjvC4QUNXeN2WPvV4y2gCKD3fB36dnEtMGThAWJAp6eh5th5T33' );
define( 'AUTH_SALT', 'hBEYLxNo29g6FS7mymKf2WYpJnzB1Au2VUKegb904pQAUY8FMHsdpPMfsKDeBGae' );
define( 'SECURE_AUTH_SALT', 'fAVd2jmtNCV2h0TAP2mPmGKR17B3jLicNe52yiQVuQYtnhSBB2shVh8adY7eK1T3' );
define( 'LOGGED_IN_SALT', 'nv5fsCdCA3idfGXzwC3cyuf00iemYG2xg8v8WAgbpxFQ4ViC58L8TLVawuzKtmQa' );
define( 'NONCE_SALT', 'mtrUoN71i5AKfTIpJhJB1T9PMynsmIzM9QQ03ED3RYIjKLJTVCTgfUfY0ioaeGeL' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');