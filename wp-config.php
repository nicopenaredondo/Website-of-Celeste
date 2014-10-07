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
define('DB_NAME', 'celeste');

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
define('AUTH_KEY',         'c&V,P/vgmg[uJg:Eg49T/uB:r)HJ!M`1XzZ$ar|+D10?A5JN=HTTvSnC;$|6{f{g');
define('SECURE_AUTH_KEY',  'ozsOr)PYr0?;lU:+@R-7vtg?Go9~bf^3h`2GrmRvo[=fEV|+,= 6?1^AsQH*Hruh');
define('LOGGED_IN_KEY',    'ybV|TFq4>YbTVw|vbe.Q%T*mjF#Wv0|9GY%R!;@xLfAHhYwjQqm+|Ju4jZXEl0k=');
define('NONCE_KEY',        'uAJ6%~6_f$1pmA>$TJ3|28C9uf.hB~(e#C}P|x/~,rrqJ>BAD!}-}SMH&kMpnP-Z');
define('AUTH_SALT',        'wbeI>K:o!?PP^746Pj<r^8~L+EBcg=:X`nr2-.ns?U>%H^-a><4IOEnt]V5atJRz');
define('SECURE_AUTH_SALT', '/ #b#K?3y|hjhH`W*.+$#sm`cIvpM;E@r%}D+M4.Tb#85A`Aiz9V|<8:aA=faU}R');
define('LOGGED_IN_SALT',   '~[{>l8X*tL3+(<sm|H+n:@~g,[OmW~!.BA+9Id6_#5!ts#X@yp)D%{O<Ga1qf+8F');
define('NONCE_SALT',       '$[r|6U_sx}8[-]rBo8IDp}?{L=uPdWRsWkM=zB9~+Z|KSuKet!Nfg(jFVPvbmvF*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cab_';

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
