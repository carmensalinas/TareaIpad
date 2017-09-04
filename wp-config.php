<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'carmen');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'root');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ky_u6%5bB}qos@&9`P=SiXIfq dh0In[qsMhtRH:X#i7[|(7/{xEvISOTS)fsbjD');
define('SECURE_AUTH_KEY',  '>KKpJw&Lu^:]A$1QF]_|&w 4usJ2>;V,:j/>$Ga_FVwQi@<U8|4a$<`l{d,t)p4v');
define('LOGGED_IN_KEY',    'UNQTK)>W{/h@Ve@f]rHfPTf2/!$gV=*4Bvjd^eQtDzmfEWSxSSCp_Om2G_?-g+@9');
define('NONCE_KEY',        'i3Ej,?0Ze}$B.IpN(j_|F^!y^W]@25?1aiW^(]hWD$I-uTELW`h]>,R-.NHuc+b=');
define('AUTH_SALT',        'kZ%7xs1Guhe2>gByJ%I7ac0b/R?b|CVAaD>~BJ-b&[c-^8WYkuW)sNq_%[nu4?#H');
define('SECURE_AUTH_SALT', ':%R<G2bK|rJidA!wO@p613t:[0m]H!YY |XZm=DU[Vn6j$w3lum|/IY|WK?G22z}');
define('LOGGED_IN_SALT',   '(fvsmJMJy^8Ao8FR)b }+y^:>b{BF=!K;|ak)G~5;5#ZtbZ)_HQ8u+p:YhOv&-!m');
define('NONCE_SALT',       'M.PXdUWEBi<)P6}*s$9-Ax#Hg>kH!kAf9i.bD}EwSWQ v,lVKepH:5V?X[z+nYI3');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
