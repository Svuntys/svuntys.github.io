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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'student_Olli' );

/** MySQL database username */
define( 'DB_USER', 'student_Nazar' );

/** MySQL database password */
define( 'DB_PASSWORD', '112233' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F%%&an+/wr6sk?a-+bHv!ozMpE.ct`Fnjz%R[y}(Z[nYwT[RjjEK~h@wtL~3A^7h' );
define( 'SECURE_AUTH_KEY',  ';>KYx,p)T5nQcSFr7e)o}GTqHRg!hn^]YoV4t.d/]YMh+ iR24xC&(-lp;JuNTx7' );
define( 'LOGGED_IN_KEY',    '8c<|xId[11Q!p1WtwW.%-a2_8+)d8moOKpGsqey185:jc]=5es!V(g2r8iD]lHs<' );
define( 'NONCE_KEY',        't?u*V-WgYP6_Qg:mNl]])8X(UVX@K&~`J9ORRxj=jJj%-[[h?G]yE<GIr5%k:792' );
define( 'AUTH_SALT',        'BY{757qt=h`I`4Iz5bhRrngt&$M|:.T2#0(_V&.5rPEh#SM7]]@4y NF]YNS~+fU' );
define( 'SECURE_AUTH_SALT', '14}^3V GE!i91Cyq(IS}$yTh }vm=<@s<J;6#T`^RCX2Sgum), JlWfR{x8ZNxh^' );
define( 'LOGGED_IN_SALT',   '(9~oRgdI%]rL{Pv[.:oeQ%m0!.O`8Mfme]G6G[Ig!1jD}y2Lc[{y0H_SH{&-|=3Q' );
define( 'NONCE_SALT',       '5$f&&sUF!xg58]Ai.2y^mrM-==cHG}+%K>8{[s4]^5+@v55+ W}PNvlRY1;K2b{L' );

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



define( 'WP_CACHE', true ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
