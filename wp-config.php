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
define( 'DB_NAME', 'wesrom' );

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
define( 'AUTH_KEY',         '+yW;7 f}DI]CT5q09 v3-alTe]@7nRD}?*|!Ogt(<ug/0 l%O.wJm0L4s,SVaxQq' );
define( 'SECURE_AUTH_KEY',  'FHje|Ub;?UhV2Ep8Ti$:![WYY-A>4peS$_q560|mfCUv}.$5 a3O`5}h>8wS?hD=' );
define( 'LOGGED_IN_KEY',    'tx>B<y{+M23|,=I/#Eh)gL?dgI))uuB`%17ef0iCRyuJ4i!JiOq,]?)BmM>p1JuL' );
define( 'NONCE_KEY',        'R=1CyU#B1+lRAx+&-L{L-_2%&Qw0`ZcG3#ed*l`l3f4Y2C$C-ZhL6tO9iBCLCH(6' );
define( 'AUTH_SALT',        'U,HDu13_%wS|z)Lbw~{,:uxlS*Gjj5r=,3&!GsrOX(QjJTry,#}7C7:U&#+ 59-w' );
define( 'SECURE_AUTH_SALT', 'B{jNx@~Jmq3s/WP`Y~$=yhJ.}a(~c(5,vr7*eqtK^4iz^4*@wTkZ^^L8_BTA^1PM' );
define( 'LOGGED_IN_SALT',   'Z*Z7g+.u=PMh_uQ}L@/tFD,V,z@@IuPjBaklW:QRHV2ftC:FR(YG~J=`k5GYLJP!' );
define( 'NONCE_SALT',       '/&lr,%Rq}f0/7av 0K&-g+h@oyGUl@oVQ&ZZe0t!b{`;N[QO$j^vVnW=;:y2Z&o}' );

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
