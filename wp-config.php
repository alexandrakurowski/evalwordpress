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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'alexandra' );

/** MySQL database password */
define( 'DB_PASSWORD', 'alexandra' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?i8YEB:}u/{0*Ur:sV-oxnW.<GY_!8~42x6}h:pPa7__-j;01Lp-F9^I3G8./ge}' );
define( 'SECURE_AUTH_KEY',  'E_{a@k#,sweg0Z+cjh8M[9[98s!B9K`(dB*SaXL?.yK*^md t%EyhoyWBu>,J5^/' );
define( 'LOGGED_IN_KEY',    '.-MhyLQp$V.]}F0(@cLF-inSo/}EIar:6Hiyd8K0uo*-h;H80wMy|kM;[ij:)h6]' );
define( 'NONCE_KEY',        'F1V*pwh?rp/.j[DtqH3VAlpW`*?3E}[R yAH++0Vlvp))A]RuG^h1iMu$,vj7@qV' );
define( 'AUTH_SALT',        'iF8I8iE !okKN&tS!ydbMx!@fdXEEWeTY-2Go9SF|+B~~@17I)+:eR0d&Yn^VEu}' );
define( 'SECURE_AUTH_SALT', 'w&ihG+ ;L!O[H6K74y1iHtm#E,Ubk)r>&9gt=IG+E,5=u{O/=~h:?gl5?:9!iH$b' );
define( 'LOGGED_IN_SALT',   'fLW3hpDckG= 4m9BjjXZJ:9%PjQ)8>he_{J=C:~6P}}.[ko8WlR%43#Og&!B{s R' );
define( 'NONCE_SALT',       'uZb`joWkg0+Yl5_*Su;DHGf#zJ`R)C#>!(uYU+mN}cN,!-U*l_a=)(_,/ebD:i[,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
