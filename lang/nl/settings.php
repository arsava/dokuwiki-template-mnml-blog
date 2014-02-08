<?php

/**
 * Dutch language for the Config Manager
 *
 * If your language is not/only partially translated or you found an error/typo,
 * have a look at the following files:
 * - /lib/tpl/mnml-blog/lang/<your lang>/lang.php
 * - /lib/tpl/mnml-blog/lang/<your lang>/settings.php
 * If they are not existing, copy and translate the English ones.
 *
 * Don't forget to mail your translation to ARSAVA <dokuwiki@dev.arsava.com>.
 * Thanks! :-D
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Hugo Smet
 * @link https://www.dokuwiki.org/template:mnml-blog
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//header navigation
$lang["mnmlblog_headernav"]          = "Toon selectiebalk in hoofding?";
$lang["mnmlblog_headernav_location"] = "Indien ja, gebruik volgende wiki pagina als hoofding selectiebalk:";

//sidebar navigation
$lang["mnmlblog_sidebarnav"]          = "Toon selectiebalk langs de zijkant?";
$lang["mnmlblog_sidebarnav_location"] = "Indien ja, gebruik volgende wiki pagina als selectiebalk aan de zijkant:";

//custom copyright notice
$lang["mnmlblog_copyright"]          = "Copyright tonen?";
$lang["mnmlblog_copyright_default"]  = "Indien ja, gebruik de verstek waarde voor de copyright?";
$lang["mnmlblog_copyright_location"] = "Indien niet, gebruik volgende wiki pagina als copyright:";

//search form
$lang["mnmlblog_search"]    = "Zoek functie tonen?";
$lang["mnmlblog_search_pos"] = "Indien ja, welke positie";

//qr code box
$lang["mnmlblog_qrcodebox"] = "Toon QR Code van de URL van de huidige wiki pagina (om makkelijk URL op mobieltje te activeren)?";

//other stuff
$lang["mnmlblog_newpostform_location"]   = "Gebruik volgende wiki pagina voor '&lt;blog newform&gt;' formulier:";
$lang["mnmlblog_hideadminlinksfromanon"] = "Verberg alle admin en gebruikers functionaliteit indien de gebruiker niet geauthenticeerd is? Weet dat je het login scherm manueel moet oproepen indien dit actief is (hint: '".DOKU_URL.DOKU_SCRIPT."?do=login').";
$lang["mnmlblog_loaduserjs"]             = "Laad 'mnml-blog/user/user.js'?";

