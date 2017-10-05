<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'visionsportsclub');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'gus');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Eoxm_qSrzV/{[An`=z4XTv4-0%{8N[Q+.zt>Gcjm*V)/L?UkAI@r7Q)w;ihLYqJ[');
define('SECURE_AUTH_KEY', 'B-<IkI>vYF/T^eFd_}-6682;)hcc}PJ&6{Lsv?BP1^X!rYV1Hh&`sj,h.{%uM8p_');
define('LOGGED_IN_KEY', '0,)L[ipM`on&g^B_@^U>FDe0}yc2+Mt}qYXc?G=m$Rq$}8B72*<knQOE=R4ci{4z');
define('NONCE_KEY', '9!-{Hn+vY/3Ub|t7Bc_9[2^w};<a|X`HWN(o94+[s#y2QFC67sl+-#T9MaUy:4.E');
define('AUTH_SALT', '[6@7]m5V}A-~E3,7sr[W>??k{wSaca_^fxR/X~[;G5,m|M/#).3JN@yzXEAo9a2!');
define('SECURE_AUTH_SALT', 'k:e!ndz lL_~0/2h;p&pKnKCb@!2yuGU;@6`Q7Rlg8)vK1 ^ASKm99:CCtpd5UN|');
define('LOGGED_IN_SALT', 'SFOiJBg?l0aDmHCs+EW@M_`S;0zr7J{N_#GB)3)}rE:RkrhK|6&MR{0d]D_b^&kA');
define('NONCE_SALT', '}N/T58 r=wjIR5e?JOe>Ny?_h6#!{i%879_=UCm)&gH,&#j&qLopWJpOmOQ`s137');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

