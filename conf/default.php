<?php

/**
 * Default options for the "mnml-blog" DokuWiki template
 *
 * Notes:
 * - In general, use the admin webinterface of DokuWiki to change the config.
 * - To change the type of a config value, have a look at "metadata.php" in
 *   the same directory as this file.
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
$conf["mnmlblog_headernav"]          = false; //TRUE: use/show header navigation
$conf["mnmlblog_headernav_location"] = ":wiki:navigation_header"; //page/article used to store the header navigation

//sidebar navigation
$conf["mnmlblog_sidebarnav"]          = true; //TRUE: use/show sidebar navigation
$conf["mnmlblog_sidebarnav_location"] = ":wiki:navigation_sidebar"; //page/article used to store the sidebar navigation

//custom copyright notice
$conf["mnmlblog_copyright"]          = true; //TRUE: use/show copyright notice
$conf["mnmlblog_copyright_default"]  = true; //TRUE: use default copyright notice (if copyright notice is enabled at all)
$conf["mnmlblog_copyright_location"] = ":wiki:copyright"; //page/article used to store a custom copyright notice

//search form
$conf["mnmlblog_search"]     = true; //TRUE: use/show search
$conf["mnmlblog_search_pos"] = "sidebar"; //sidebar or headernav

//qr code box
$conf["mnmlblog_qrcodebox"] = true; //TRUE: use/show box with QR Code of current page's URL

//other stuff
$conf["mnmlblog_newpostform_location"]   = ":wiki:create_new_blogpost"; //page/article used to store the form to create a new blog post
$conf["mnmlblog_hideadminlinksfromanon"] = false; //TRUE: hide admin links if client is not an authenticated user (including login link -> you have to call "example.com?do=login" manually)
$conf["mnmlblog_loaduserjs"]             = false; //TRUE: mnml-blog/user/user.js will be loaded

