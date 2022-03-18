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
define( 'DB_NAME', 'payna' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);

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
define( 'AUTH_KEY',         'Ik:96 A/5r;U~@}Pt30oh{<8)c|FgmGsOvv(aFkM0TWZTfGsm]Btn2x9Ve[yhaVz' );
define( 'SECURE_AUTH_KEY',  'J*QkHQR^j~s{_7n0z,~[}oX;s3+6D%M^+C_mo=-Gf5VBF-v5b9$jM,=qxk&/4an@' );
define( 'LOGGED_IN_KEY',    'Bj0]}aBZBOj)l-t?Dj}jWrL!rg%|i[m13ffv+QRnC #cS$%/JpcOc[|Wp^y)_pDJ' );
define( 'NONCE_KEY',        '<*C!@]CWPlx2CHOg:>(eng<qsIBPvZ]d;IP`2w[8jlvP;%]iMfKkRf^R{r6I)u%C' );
define( 'AUTH_SALT',        'c>a?m+E0&`[H3un81W[O_>3~A/prm`3:@<^XKj^$U!MKu?!Xk^ln&jSzxVsw kXE' );
define( 'SECURE_AUTH_SALT', 'L6zTCRJRc[f+s?{/=RCm|a/v5y3C|W4&k]_xm@<RSuV=/<bK|F`PM|VLu5Bli r(' );
define( 'LOGGED_IN_SALT',   '~v[8fWWlVQ>*)ps9z@=-szpmnId%Xst7^lNDQ[Qu`L9k%#y_MSdbk3e8$b|mFmL$' );
define( 'NONCE_SALT',       'bVBg=,C(IJPavl=+ofEO;!3$AvX~$`@6Eq9Th8s/i8*#g;:EC7-*RES$QIJT^3aV' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';