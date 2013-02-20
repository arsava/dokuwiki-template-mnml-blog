<?php

/**
 * German language (formal, "Sie") for the "mnml-blog" DokuWiki template
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
 * @author Andreas Haerter <ah@syn-systems.com>
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//links (not all are used by default but may be useful for /user/boxes.php)
$lang["mnmlblog_lnk_print"] = "Druckversion";
$lang["mnmlblog_lnk_permrev"] = "Permanentlink";
$lang["mnmlblog_lnk_whatlinkshere"] = "Links auf diese Seite";
$lang["mnmlblog_lnk_siteindex"] = "Seitenindex";
$lang["mnmlblog_lnk_upload"] = "Hochladen";
$lang["mnmlblog_lnk_newposting"] = "Neuer Eintrag";

//qr code box
$lang["mnmlblog_qrcodebox_qrcode"] = "QR-Code: aktuelle Seiten-URL";
$lang["mnmlblog_qrcodebox_genforcurrentpage"] = "erstellt für aktuelle Seite";
$lang["mnmlblog_qrcodebox_urlofcurrentpage"] = "Aktuelle Seite als QR Code (scannen für einfachen, mobilen Zugriff)";

//other
$lang["mnmlblog_search"] = "Suche";
$lang["mnmlblog_accessdenied"] = "Zugriff verweigert";
$lang["mnmlblog_fillplaceholder"] = "Diesen Platzhalter bitte füllen oder deaktivieren";
$lang["mnmlblog_donate"] = "Spenden";
$lang["mnmlblog_templatefordw"] = "mnml-blog-Template für DokuWiki";
$lang["mnmlblog_recentchanges"] = "Neuste Änderungen";

