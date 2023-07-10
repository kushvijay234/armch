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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'armch' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'q7xl4 yMK1^Sr]6awskJ`gN<#pS&m~sZy?@^r<w@izG7ox.xyU~*VI+Z]_/ZXkSa' );
define( 'SECURE_AUTH_KEY',  'wO-Xq>cz2EF_cOz&Fwxi;41wQ_~^xXQy&Zv%<Ul,_OUg)*@,{QK6bPF+WOjEmZ0 ' );
define( 'LOGGED_IN_KEY',    'eEN0jw)E!9 <.>HO}`H XC)C~3W6Zo}QEmF/kXN>SBM[l/mxRiF|F0<`jb.FJ}}v' );
define( 'NONCE_KEY',        'C-YUDqw$eGm(m+i4Kg_b1v#jqEs%:$`%<O(@`;~)y)JS2}?Hxy 1h;:r:EGpK>l4' );
define( 'AUTH_SALT',        'v*WLbCe=Hw95Ppr$u$O~Ndft#`FR(0#5/R3A-fRa~#)H6GMh|;/a;k5BpLQ[?Kg~' );
define( 'SECURE_AUTH_SALT', '?ydrxhK/n`0N:cU>SxY.F>WRG;&k)wj1k*W9z/3,vq/j-CfFsWw^Gy1nkw)F4}1n' );
define( 'LOGGED_IN_SALT',   'QB{ZwW.3FU*cC!nBvBTX&.LYJOOq)NM#4nrO|;v!ZO]u({6zqkUB2K%I$=R]&R@]' );
define( 'NONCE_SALT',       'ZJ7_H&x(FcA[i.R<k$mb``3^WwqYAz7M$QVzFo4@9]UueFxcT|Wcj,]T%y>[:5A1' );

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
