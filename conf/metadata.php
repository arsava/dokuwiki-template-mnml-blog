<?php

/**
 * Types of the different option values for the "mnml-blog" DokuWiki template
 *
 * Notes:
 * - In general, use the admin webinterface of DokuWiki to change the config.
 * - To change/add configuration values to store, have a look at this file
 *   and the "default.php" in the same directory as this file.
 * - To change/translate the descriptions showed in the admin/configuration
 *   menu of DokuWiki, have a look at the file
 *   "/lib/tpl/mnml-blog/lang/<your lang>/settings.php". If it does not exists,
 *   copy and translate the English one. And don't forget to mail the
 *   translation to us, SYN Systems <dokuwiki@dev.syn-systems.com> :-D.
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <ah@syn-systems.com>
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//header navigation
$meta["mnmlblog_headernav"]          = array("onoff");
$meta["mnmlblog_headernav_location"] = array("string");

//sidebar navigation
$meta["mnmlblog_sidebarnav"]          = array("onoff");
$meta["mnmlblog_sidebarnav_location"] = array("string");

//custom copyright notice
$meta["mnmlblog_copyright"]          = array("onoff");
$meta["mnmlblog_copyright_default"]  = array("onoff");
$meta["mnmlblog_copyright_location"] = array("string");

//search form
$meta["mnmlblog_search"]     = array("onoff");
$meta["mnmlblog_search_pos"] = array("multichoice", "_choices" => array("sidebar", "headernav"));

//qr code box
$meta["mnmlblog_qrcodebox"] = array("onoff");

//other stuff
$meta["mnmlblog_newpostform_location"]   = array("string");
$meta["mnmlblog_hideadminlinksfromanon"] = array("onoff");
$meta["mnmlblog_loaduserjs"]             = array("onoff");

