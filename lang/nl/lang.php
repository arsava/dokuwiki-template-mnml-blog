<?php

/**
 * Dutch language for the "mnml-blog" DokuWiki template
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

//links (not all are used by default but may be useful for /user/boxes.php)
$lang["mnmlblog_lnk_print"] = "Printversie";
$lang["mnmlblog_lnk_permrev"] = "Permanent link";
$lang["mnmlblog_lnk_whatlinkshere"] = "What links here";
$lang["mnmlblog_lnk_siteindex"] = "Site index";
$lang["mnmlblog_lnk_upload"] = "Bestand opladen";
$lang["mnmlblog_lnk_newposting"] = "Nieuwe blog";

//qr code box
$lang["mnmlblog_qrcodebox_qrcode"] = "QR Code: URL van huidige pagina";
$lang["mnmlblog_qrcodebox_genforcurrentpage"] = "gegenereerd voor huidige pagina";
$lang["mnmlblog_qrcodebox_urlofcurrentpage"] = "Huidige pagina als QR Code (scannen voor makkelijke toegang op mobieltjes)";

//other
$lang["mnmlblog_search"] = "Zoek";
$lang["mnmlblog_accessdenied"] = "Toegang geweigerd";
$lang["mnmlblog_fillplaceholder"] = "Geef waarde voor deze variabele of schakel deze uit";
$lang["mnmlblog_donate"] = "Gift";
$lang["mnmlblog_mdtemplatefordw"] = "mnml-blog sjabloon voor DokuWiki";
$lang["mnmlblog_recentchanges"] = "Recente wijzigingen";

