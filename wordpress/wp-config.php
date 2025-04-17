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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywebsite' );

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
define( 'AUTH_KEY',         ' 8xuN =y-I>I} 8J!)*4:8oNgjWF2ZnjBoT;kJ/eTx_&;mEt_!Y;h@O@ccl$h6]X' );
define( 'SECURE_AUTH_KEY',  'f%%q},aA$Z%RfeG-G`O8<FD%9r|axTvaCLuQm*m#=>!yX:R*!Pl%C%$v~[/D~Z)x' );
define( 'LOGGED_IN_KEY',    'Apw0mQgsEjS4oa8fmc{;I`JdKG{sES5 ;,!&7N#03pvfmPFJ+y<XXAd`Jpz?{>8^' );
define( 'NONCE_KEY',        'C]<)o}ZP+PY2,SS|3pjkXt!M{1r;CV/wMOB>PV&5,y!Dx8KbQ<2nd&uEP$*+w$Jr' );
define( 'AUTH_SALT',        'ObOP~aTV?r|?)6RDMlH{W+X5<H8dh~.vOkxS[-:,8INM.<gN.h+T>D,&$AX]gM#i' );
define( 'SECURE_AUTH_SALT', '_`RzQ){{a? ZDox$r0-|X2&-YTiF;Bn#, e~Tq/E;0):E3yJX:U}tQ]L m!b}L1}' );
define( 'LOGGED_IN_SALT',   '{r:7I <m>UpN39?yQu:v){T6b8!B9Ayb]k$qOAhlb,W!s|+qFxTOVqHbdU`U1P<^' );
define( 'NONCE_SALT',       'Vt>4}8&k{Yh).k2~2YrGuyFuoZtfl1R)aZi!@uR?T3X&=3(>D#p-lzu;0I^..7RR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
