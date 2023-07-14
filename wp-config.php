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
define( 'DB_NAME', 'wp_projet_db' );

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
define( 'AUTH_KEY',         '(>;9LqQCyw#R`@sD$0:dw4e^,BHtX={BJ$L[OKR^M)+KSm}= Q |1J i|So==8u9' );
define( 'SECURE_AUTH_KEY',  'M#;Bf?L``?@WotpkP};Y)EK* K%QV)X^!VW8zW {aTd!Pertcw:3;vOrE4D%n-UW' );
define( 'LOGGED_IN_KEY',    'uAkdZ9$%l[LTc;NE07C/r1iYkV5 8]Vn9m&6s0O_39,rooN-53mNVv&Ek~f;:j>F' );
define( 'NONCE_KEY',        'C}UHMn)}d+-7>@iRl0{sI kNHCM@8@R- AGh6Q{I +8({=UL<@/-[=kYsb~xCG,9' );
define( 'AUTH_SALT',        '(o8}z2V|dKS@`jMw*)a9%9$^T^P>m@%CRX~7pJy]e#:Ik_G!Cao@RRBFs:x=]Cu.' );
define( 'SECURE_AUTH_SALT', 'v`2O?!Ifz%2{&/]zq1P5zWb!C]z^b{iiZIr7FL BW1rP&5q5/[bg7SoFUWH8~`,7' );
define( 'LOGGED_IN_SALT',   'W{+cGZTIix_RU%}+kSj,l7A^mK]d0*v)o]{up2^_XTnpcA@/3(T0=3-PDp-l8|.C' );
define( 'NONCE_SALT',       '#=OEk_n%;.R$]p%|tNEsw-pS:^@AM8zAw( })nY+-kh@E|/c}=4Gu!aT22R:h9/W' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
