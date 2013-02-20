<?php

/**
 * English language for the "mnml-blog" DokuWiki template
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
$lang["mnmlblog_lnk_print"] = "Printable version";
$lang["mnmlblog_lnk_permrev"] = "Permanent link";
$lang["mnmlblog_lnk_whatlinkshere"] = "What links here";
$lang["mnmlblog_lnk_siteindex"] = "Site index";
$lang["mnmlblog_lnk_upload"] = "Upload file";
$lang["mnmlblog_lnk_newposting"] = "New posting";

//qr code box
$lang["mnmlblog_qrcodebox_qrcode"] = "QR Code: URL of current page";
$lang["mnmlblog_qrcodebox_genforcurrentpage"] = "generated for current page";
$lang["mnmlblog_qrcodebox_urlofcurrentpage"] = "Current page as QR Code (scan for easy mobile access)";

//other
$lang["mnmlblog_search"] = "Search";
$lang["mnmlblog_accessdenied"] = "Access denied";
$lang["mnmlblog_fillplaceholder"] = "Please fill or disable this placeholder";
$lang["mnmlblog_donate"] = "Donate";
$lang["mnmlblog_mdtemplatefordw"] = "mnml-blog template for DokuWiki";
$lang["mnmlblog_recentchanges"] = "Recent changes";

