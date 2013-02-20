<?php

/**
 * Czech language for the Config Manager
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
 * @author Jan Papež
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//header navigation
$lang["mnmlblog_headernav"]          = "Zobrazit hlavičku navigace?";
$lang["mnmlblog_headernav_location"] = "Pokud ano, použij následující wiki stránku jako hlavičku navigace:";

//sidebar navigation
$lang["mnmlblog_sidebarnav"]          = "Zobrazit boční navigaci?";
$lang["mnmlblog_sidebarnav_location"] = "Pokud ano, použij následující wiki stránku jako boční navigaci:";

//custom copyright notice
$lang["mnmlblog_copyright"]          = "Zobrazit informaci o autorských právech?";
$lang["mnmlblog_copyright_default"]  = "Pokud ano, použít výchozí informaci o autorských právech?";
$lang["mnmlblog_copyright_location"] = "Nezobrazovat výchozí informaci o autorských právech, ale následující wiki stránku:";

//search form
$lang["mnmlblog_search"]     = "Zobrazit vyhledávací formulář?";
$lang["mnmlblog_search_pos"] = "Pokud ano, kde má být formulář umístěn?";

//other stuff
$lang["mnmlblog_newpostform_location"]   = "Použít následující stránku jako formulář '&lt;blog newform&gt;':";
$lang["mnmlblog_hideadminlinksfromanon"] = "Skrýt všechnu administrátorské a uživatelské funkčně zaměřené odkazy, pokud klient není přihlášený uživatel? Pokud bude toto aktivováno, musíte vyvolat přihlášení ručně (ukázka: '".DOKU_URL.DOKU_SCRIPT."?do=login').";
$lang["mnmlblog_loaduserjs"]             = "Načíst soubor 'mnml-blog/user/user.js'?";

