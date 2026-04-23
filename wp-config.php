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
define( 'AUTH_KEY',          '4novY]NthI)Au![ B3<#SJ2AE_}(lL<b?:qEtD4%iKgay>[d}Wn{5@8IX$R.:Z?1' );
define( 'SECURE_AUTH_KEY',   'go/]t2i6<?EfRHpp)_qQIvO]TP`SI_5f!]A+hPmSaX+jPYPmMj(5elH2@=PhIN@^' );
define( 'LOGGED_IN_KEY',     '$%C(L|Ccc~Bd@w@*-y%YO(;mgMl%)AYi vm!wg@i/r+V~?v1{YvmZa{BP%lb!YVk' );
define( 'NONCE_KEY',         '+R#Z|?v^ko|=LF X(N|H30W<3CYxE/.Q~I]6R!vOC38:_&A;U*/+35f*O,voJc@q' );
define( 'AUTH_SALT',         'cf4&;v,~ 6yBqD0CvZV_G!O.Jt>NI2J=Utz!mB`:*URx,t_H/>`x9B@m&q.%Hi7#' );
define( 'SECURE_AUTH_SALT',  'nXoL<2KAL[|@W%Bfp3v^D|;eK)+qjqxD8wwc1X[eZQjxz0_V[T:sMnS*dMKo#<og' );
define( 'LOGGED_IN_SALT',    ' a@z:o.#UQU ZZuwesYEE*LLw3IsU5qv?DT?f18FG_4TV}bl}v)RUIq <l&6KO;S' );
define( 'NONCE_SALT',        'xw8#UJhgK~8Slv75KVjNjw6P.[1nXL*!OR*J)^W$F[5gg!ROci-lj(l&@UsUM~lw' );
define( 'WP_CACHE_KEY_SALT', 'A7U-)lox?%8-P=kE?h`at% FAygdt9/hbS/<(q*k_({?Xr*_u/-^If_N91NNbO;b' );


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
