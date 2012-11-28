<?php

/**
 * Spanish language for the Config Manager
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - "/lib/tpl/mnml-blog/lang/<your lang>/lang.php"
 * - "/lib/tpl/mnml-blog/lang/<your lang>/settings.php"
 * If they are not existing, copy and translate the English ones. And don't
 * forget to mail the translation to us,
 * SYN Systems <dokuwiki@dev.syn-systems.com>. Thanks :-D.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Adrián Rodríguez Vargas <info@adrianrodriguez.es>
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//header navigation
$lang["mnmlblog_headernav"]          = "¿Mostrar categorías de navegación?";
$lang["mnmlblog_headernav_location"] = "En caso afirmativo, usar la siguiente wiki como principal:";

//sidebar navigation
$lang["mnmlblog_sidebarnav"]          = "¿Mostrar barra de navegación?";
$lang["mnmlblog_sidebarnav_location"] = "En caso afirmativo, usar la siguiente página como barra de navegación:";

//custom copyright notice
$lang["mnmlblog_copyright"]          = "¿Mostrar copyright?";
$lang["mnmlblog_copyright_default"]  = "En caso afirmativo, ¿usar el copyright por defecto?";
$lang["mnmlblog_copyright_location"] = "Si no hay por defecto, usar la siguiente página como licencia de copyright:";

//search form
$lang["mnmlblog_search"]    = "¿Mostrar formulario de búsqueda?";
$lang["mnmlblog_search_pos"] = "En caso afirmativo, ¿En que posición quieres mostrarl?";

//other stuff
$lang["mnmlblog_newpostform_location"] = "Usar la siguiente página para el formulario '&lt;blog newform&gt;'";
$lang["mnmlblog_loaduserjs"]           = "¿Cargar 'mnml-blog/user/user.js'?";

