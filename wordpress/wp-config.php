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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tema' );

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
define( 'AUTH_KEY',         'h/nzoy6[RbepD8I1]#-42e,?DC/I hO+j$4)eIHq Q%O&ffM!L[dxhG,]+=;6{mf' );
define( 'SECURE_AUTH_KEY',  '><cO~SqaC_7e.`op#+eg`,7NPL0Jn_/VNp!b?#FII:00XfZ(Nuuk[X$@S}5Q~:r2' );
define( 'LOGGED_IN_KEY',    'Bgw[u)u(rLHm30.F~)JD@iKXXl(ap` >N}y}vEG66iCM_,m5wGS$fQ $}tKyJ7P2' );
define( 'NONCE_KEY',        '$,*SOTZ$>S$MrNkw}D.`-LM;$~6^>g=q05W#]P3n,8 |(lTS$Z}eaK?`O}[(ez3C' );
define( 'AUTH_SALT',        's+Z)#. OJe)qEHP?n][Y0g^?D0&20EeoUgvhVuWh0Q}}O|w?`z.%si7x{J`+}$]S' );
define( 'SECURE_AUTH_SALT', 'a%|o~7I+jGQm[8/o9p`?~Z%cPdE58^^1&,b46ON/M+ElI-`CC #.H!>cfb+Z@xTh' );
define( 'LOGGED_IN_SALT',   'CF%,8!}5^o&?3@3UQ$),W&TWo@[`u7=@Y.;q}Z~C-8=fOGp4et{;$a7*+l=?3ko8' );
define( 'NONCE_SALT',       'y_!_:BfeC=T;63K;./X#{B<TyU? Q<`7~1:`uD^X:4w+c7ru]AA3#YaNfsr8,xqc' );

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
