<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         'FrDC:>!#h7O[b}fh,n^qq;Cy9z:uyH6bz0S2f0B 9Y8bdBCz9>j?(RE}KRS ?W2Q' );
define( 'SECURE_AUTH_KEY',  'Jhb..69g7$A|Z|xI)/qu,3}jS85E[Pco#Q?/Q$*tVCQ|-L2JVV&e5|m]w^P8VzWW' );
define( 'LOGGED_IN_KEY',    'Wr)kwl8`,;EIsp=Sd>?_gMS Q]yJJ`)GSR@X*n9V#o^c,]B==.b!TEtMZ`Gr4G/k' );
define( 'NONCE_KEY',        '-E!<p)ZjytNLVbOJm([NX7?~*RfV&82yr1A[o~T#/5jei>n: N2!t5l=5IkIk|^5' );
define( 'AUTH_SALT',        '4QsYR_y}z+7u,d&bJ6rN%*((v+,C]P#9.9@5SR3Hy0Z*$uPk,O,QmnGQG?bb!%z7' );
define( 'SECURE_AUTH_SALT', 'M~)YGu/];>%ch|*T:,1Z3bh `_)s)wXvT8TW%0X Qi#>fpUP:=YuI*!*_)bIRV:k' );
define( 'LOGGED_IN_SALT',   '-,S2uQi?qhqb-$aP94c&9}O-v8?@wz+wBQv/eqE#{X_p/~z>Mn8i5e3`::[iM~G:' );
define( 'NONCE_SALT',       '};,5UWO[KE6Rh~rQD7pe)#e0VqA{8$.~E$@ADlmtie8HiACW8iDk9s`ppGI.L4^>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ditimber';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
