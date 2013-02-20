<?php

/**
 * English language for the Config Manager
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

//header navigation
$lang["mnmlblog_headernav"]          = "Show header navigation?";
$lang["mnmlblog_headernav_location"] = "If yes, use following wiki page as header navigation:";

//sidebar navigation
$lang["mnmlblog_sidebarnav"]          = "Show sidebar navigation?";
$lang["mnmlblog_sidebarnav_location"] = "If yes, use following wiki page as sidebar navigation:";

//custom copyright notice
$lang["mnmlblog_copyright"]          = "Show copyright notice?";
$lang["mnmlblog_copyright_default"]  = "If yes, use default copyright notice?";
$lang["mnmlblog_copyright_location"] = "If not default, use following wiki page as copyright notice:";

//search form
$lang["mnmlblog_search"]    = "Show search form?";
$lang["mnmlblog_search_pos"] = "If yes, search form position";

//qr code box
$lang["mnmlblog_qrcodebox"] = "Show box with QR Code of current wiki page URL (for easy URL transfer to mobile browser)?";

//other stuff
$lang["mnmlblog_newpostform_location"]   = "Use following wiki page for the '&lt;blog newform&gt;' form:";
$lang["mnmlblog_hideadminlinksfromanon"] = "Hide all admin and user functionality related links if the client is not an authenticated user? Please note that you have to call the login form manually if this is active (hint: '".DOKU_URL.DOKU_SCRIPT."?do=login').";
$lang["mnmlblog_loaduserjs"]             = "Load 'mnml-blog/user/user.js'?";

