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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '&k%x+L5}.gjH;=o5Kfh5aBCjpA*pWGh(AU`l]-u9kIR5WUMEu4E!WksImRL)fouh' );
define( 'SECURE_AUTH_KEY',  'kts)F?83$fb}puL-OAJ:B+(BicP7!cgfOJ{ O^At _#U_Ej#EsD;]<9xhve}vxtO' );
define( 'LOGGED_IN_KEY',    'Dmq${1cFj9Eg4ve%jkJ;JmWiPMz}`RRn%e7`Y1A86Z$hOx5BNv=VOA0[][@B(/L%' );
define( 'NONCE_KEY',        'a(ARTR1B#E#-mH2[H6TOT@U>bFk1FLrX^^3.+C0dM7=QF_};SJH>QH[iaV+$P_A,' );
define( 'AUTH_SALT',        '`@Lg3B1w!dOa-9?=h==M5vk?ApnglV2<=t-r(WB-!xK S(= i+ptA8hR16jq 3DV' );
define( 'SECURE_AUTH_SALT', '+~Iv}BC(iRt!z_1&|2tLW?}$S)`QUSbGi<`<O Gz^0*gO^>C<.}E9CpqA!AslS,&' );
define( 'LOGGED_IN_SALT',   'fcJ PkD^r,2LbQ3Y*?cz(`30U-/!^C+<Pet8??IAr_.%$u0S6sRcZ9gV{)uR>2WD' );
define( 'NONCE_SALT',       '-Ih3r@UD%.&A~P; o*-`gPu_W@14({@QN[4))lTS_p/hY:BZ^nFkDbNiq.fEl@Vz' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
