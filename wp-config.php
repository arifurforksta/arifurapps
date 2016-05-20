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
define('DB_NAME', 'arifur');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'N_/_Tr,T9 U|^_?EC%JhKQ9L?Fo{An-&Bpx.!aAAFBV!0Myb4i%[3zj??~rnW}G~');
define('SECURE_AUTH_KEY',  '|x)RNpi m{)dE61jgBhC@l+?5=5|Z8,Bt?_pQM&~LI]`l<dT}Y_+E@fk;/|)]*}.');
define('LOGGED_IN_KEY',    '3!j:M`?MrMYQaxyN$EA&su!_^/{eZ,Jp$czl6)vHiz$_4>U3/qio8J-9y]FrpqYR');
define('NONCE_KEY',        '*hAno6 sUF]k<qLyxmSg?tX[Z+M0@#NS;3};=(bmv4tAGFQntxy,O](0WF-$mlEJ');
define('AUTH_SALT',        '(:iQRw+Nh#8@1&{oZ;od MH$9yXKC!u:(]/s:n(!lBMhO[UJrR51vCBKeBf`Ha8,');
define('SECURE_AUTH_SALT', '!O~,1Q^5h|KLx(xpTB29xOIM1Ra1gK<~GA1P4uzN56iHG<p*:[h]KV2&Gm;?vclP');
define('LOGGED_IN_SALT',   '>l%X__0O*)9bRT]^.:xXQm^r>`)54VHXZedb,H]|f}a$Z|auY$tC_dfu}dMEy7#<');
define('NONCE_SALT',       'V^m|D7(rnr#I=`vxXw*BqVx?E5*8NT?og&p~q5kul/#wq*)^h-L`q}Q1QZB1w@g~');

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
