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
define( 'DB_NAME', 'electronics' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BS/jt^S2WGh;9V*w82-/Q1uFk?{oho5U`eh[:Lvap,oj)p1VAU&eBR@hu]M6_0Z^' );
define( 'SECURE_AUTH_KEY',  '+CBtZ>obB.;,EwF+j<U(}oZVmuw1yKTYDz[3*Id]wD ;1Vn^6<$*.oFjKjva9{?w' );
define( 'LOGGED_IN_KEY',    '0 pOk%D5na{h0h%ArpxO;@;4_^z9A||L:od;h:40 )!qNPzlS/mna&b_GC:<9r3L' );
define( 'NONCE_KEY',        'V`.buJmsl8vz@4M^%WsxU`WQF0Q8I@6e*jD Pn> lnf=Wx44s#XWRI$pKW_1<*l?' );
define( 'AUTH_SALT',        'iQGMx|>pJL-W%l=*_hZ&m.rf&J@~C;b#h xO8_#Vt,Kbk|tEcH&pUe4H{I.Q=6S0' );
define( 'SECURE_AUTH_SALT', 'RXv]QlOrd ^9m_@{=@8A9JRk&5YK[+2ju094u-N!B0]@=eTA0Pb$wv8PIu8I0SO2' );
define( 'LOGGED_IN_SALT',   'RV#PT5$7Yj[?yi.wz];Npfcxj,~8BGmAjx)Y0BC)hs)Q~QG`oATXptU?m]Uoa~2z' );
define( 'NONCE_SALT',       'L7L]bU?Z52-tHm4GV)EL*DE~ F B~3o=%]8{[9Zh#-cJ9QPLf,2A`C*Jp:09Q>C-' );

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
