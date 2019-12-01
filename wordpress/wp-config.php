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
define( 'AUTH_KEY',         'l$>L@U~?~bIu<%[LLfqSvw_hsSpOf>[`o+awO{p9U4f1Q5@F%?bcST||<-7kKXOK' );
define( 'SECURE_AUTH_KEY',  '(:,#e:{r-La}75:6,Kl?-*t&TNrj317:Ddn4W!xzkV6gn=uajWQxWA2*&z(jb73l' );
define( 'LOGGED_IN_KEY',    ':YL~6b90MsF iws9zK3JY;k|La9|9Er3u-]jMktlp7rZE(Jhc#F)5wffL.}rUVk#' );
define( 'NONCE_KEY',        'A,tc.F T_U(x4AESsU|Q_3;8E{FzN8Uu7m< cYZWun]i#._m{7)xqig^Se z:fje' );
define( 'AUTH_SALT',        'g2F!&w+/M:zjtf_`a.]Q0+2{:Yut/. *!lxpzVEywQJ,q;[p8-RB]|.@FYH9:5j=' );
define( 'SECURE_AUTH_SALT', 'v|yo+X84{@COa~H~FAz3p(5E;mH<Zz[kdknF2JjL$|C;pl!||Ns(QT)1^??#FiI[' );
define( 'LOGGED_IN_SALT',   'X4i~toGKG%//<=92En)rFzyZxr3L][<ZnPl uEcA/Y*(:0-QM^]u7 I9H}TC6/vR' );
define( 'NONCE_SALT',       'z}?8y)$T/U5{Gle@Krq5@Qntdv~kL6+=0gj4$H;b)W>wXh!w>&@y>Qh1@vp1&_)2' );

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
