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
define( 'DB_NAME', 'mariadb' );

/** Database username */
define( 'DB_USER', 'linus' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'rD<g>Uw-^NYn9a$WJzv|V%4CqIrcNR;O|PfkJ*sRX_,1z+Q4FcQ%b#i~3{1j8_Fc' );
define( 'SECURE_AUTH_KEY',   'NJS]I2(k#47Q8M4,#EJV;c|A8$Of(,D%9x;vLD2PR>A+Zb+c|e;]cMX[TSxlQw{x' );
define( 'LOGGED_IN_KEY',     '{+LTy!.(Z-G1A@~J78xZW5r%xe/B]ia|kszGiq<]X-O)lJu=L%qTZ199^R/LI-xi' );
define( 'NONCE_KEY',         '= &&4.:gJ`!JIdm6`30kgyA<<3r|{ahXY=l >FQ]b7?yuR1BCp[xnz`Xz!p3.zXX' );
define( 'AUTH_SALT',         'St]i1c:LCT=k8~zEUOOSwx}2FD9a)MB~O?rb)jAS{yqOuKQ(C)vf#^rc|A<4f0EU' );
define( 'SECURE_AUTH_SALT',  'VfX:??0F-$!%{_vr%g+yMc=O^|8QQb}7Ei0lW09X^v,Q]f#^kV)nP<v=LM+na~gP' );
define( 'LOGGED_IN_SALT',    'l)<Fb3tJG_j}neT#EQ5)-+V<fq7Na|hVui> j$;<cS.I+`-XoQ0CN5*c#X#pr?DL' );
define( 'NONCE_SALT',        '|sBh+r_:q7T|xJ4rz^A-(o^7:dZD!|!bPWg6%d)6:p*Ua1tq<>3r$Nq w*pPd+=E' );
define( 'WP_CACHE_KEY_SALT', 'h.s5bnpkV!D$rK {@u)@j]t)[JRZlXDfM0<rBOh|JREZ(ABz<9] Y:N/;!Hl/iEG' );


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

define( 'WP_DEFAULT_THEME', 'Impressionist' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
