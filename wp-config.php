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
define( 'DB_NAME', 'wp-databases' );

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
define( 'AUTH_KEY',         ']K%<uo`>72%AT.[4w=a(`0WzL?BT3oWN+4.Yu*H  yxB AgHzo}J, vZ,Q)@hpuB' );
define( 'SECURE_AUTH_KEY',  '<&gLt ;Q8HilqxASvK;uhe[AvEPA6<a<cN!=hJcP, W3FN)B/q40V:I9N)MwoQik' );
define( 'LOGGED_IN_KEY',    '{&ocvm2dy=hEP<{mD%vaC<ml7TF~Og)4#Gwuc:T$|;fVOu!S(P[RXD#**i!{749s' );
define( 'NONCE_KEY',        'k:5D-$_#EO}zY`_ce(`DCBA=SiO^cEXIVw.kW@tia@-EnLIL/nI;__o#o*#]G40d' );
define( 'AUTH_SALT',        '<eRalyoN[KB;b,?X#hLWhVt,_];T2:|Fv$y2x$.TNtmx!?@+^~iIu=l5jR@P2V8>' );
define( 'SECURE_AUTH_SALT', 'tY $B.k6n# OE~_|2L2c{gmwLJ$gk< :.rORai{54)AQUCz=Wn&p#B`!8C|&)IU}' );
define( 'LOGGED_IN_SALT',   '4T-|3@nh=np~$=|4E.NQ[qRD}XY0X-0u(qIT<<I:v=3A}u*TL&Y^m36aQB*{xE}c' );
define( 'NONCE_SALT',       'n?M^S9/$q,^jS<g/a_$()3LZ:M9og|;5!LG[Y@w=jR|pwhPY;xE/y&MgK,wk[@)1' );

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
