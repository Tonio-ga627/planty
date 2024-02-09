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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'JEmM6ReR8ztVZzj[$/gB(mgF2;^)Qv94qjj)x#su|%zcn.+1MTB3ao5e/pw*L<#-' );
define( 'SECURE_AUTH_KEY',   'I1H%PvnsfI hJDQ60f1?n/2T9FiTXMoCWFSa.<&pBr~y?PPGKzd_ZS]S6Izt`(oL' );
define( 'LOGGED_IN_KEY',     'YWjz|7(.nBZv5)tR%l3i.iRbgd[RmYE`8@jy7D&VLdpt>pY{OnTQD~7,Sk=YV>4|' );
define( 'NONCE_KEY',         '87.~w) 0$#Q1VI3B]v7SsY;W3>lkqBF#P3YIIXZ-Hc8Ka ]H?QNHEgHm1V.t+V*X' );
define( 'AUTH_SALT',         'l}TiDR2&d]n*d/]=-<upe./YJmK^rFP4Ha]@;1W+ GJKsN6NP!0n*{4*/9>/E[(h' );
define( 'SECURE_AUTH_SALT',  '/4I,bye*5[_sm]nJcn?+[RZl=y`ga9=zf!Ac0#-T2PXC<@*kRjO%@KXy<^.oGsM(' );
define( 'LOGGED_IN_SALT',    '5Fkb%3+9V8y&7%Y}gN-eKM6Nl2Lv7F6;ZZU;-7R2I#z8uLh0<dn,_sCIT<`{,5aV' );
define( 'NONCE_SALT',        '7U@L>&*O6[te:~^P,(ji}:Ez@alHO4]l^-|B``xx!-WzppwcD#=fu`lo*L-p?QZ+' );
define( 'WP_CACHE_KEY_SALT', '6oS]B&EUQ=IGIRwz{!K1^ C%e4;2)VW^-~K&*W).8t/OJdcz/(IC|$=ra<Cq2K#8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
