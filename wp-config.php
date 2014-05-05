<?php
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
define('DB_NAME', 'asmeninis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'y+,^E/#$D|fK?@OuJ8h1`O`N0c0ibuHWsPFq2y`M==tz88D;%?ozGrTHL)9$uz3.');
define('SECURE_AUTH_KEY',  'lvWPdq?d#na,D)oCK*I,x6g1qjUSm4L7&{F+UoEg1=>I{{rYn=-j|*w0+yhIp<h|');
define('LOGGED_IN_KEY',    '^n&w5{4CxDWQe^#Ep(dUw|dSn5?QsjkW$smR$)F|oVbEDCli8,hE&qOBn#b_kf9#');
define('NONCE_KEY',        ']AFos6@*N[c6UM_2mZ<J$4Al)*dF6{RG {O?S5e[*A5ww}VP^9)42TY!gY<38O#Z');
define('AUTH_SALT',        'jht1jhZ1+~$G6`24ibI=acQ=6H,* avyDISMWn9`idc${P9i/ETi<-h_$HsKG_Om');
define('SECURE_AUTH_SALT', 'F|NW&O#GPSC}MT8<`=X6n{U,Dn];#*4dmvJ5=$+KDzA@V`J>8.S:]3rB)1HhJ{(H');
define('LOGGED_IN_SALT',   'RR}6g>TFE.iY$ZZNT$w0zG/>)Sc3WMuW5OZz*yFC?dLRTuU-@mQREl4RR^?=swwA');
define('NONCE_SALT',       ',SYq;cZcF%A|lO8zP>b1A <hs8:Z>k.K>ezp>Gklosxpm^Z(88,b%urzZ1?QPEVp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
