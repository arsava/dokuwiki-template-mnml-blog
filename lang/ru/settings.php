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
 * @author Дмитрий Ефимов (Dmitriy Efimov)
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/config:lang
 * @link http://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//header navigation
$lang["mnmlblog_headernav"]          = "Показывать навигацию в заголовке?";
$lang["mnmlblog_headernav_location"] = "Если да, использовать эту wiki страницу как навигацию в заголовке:";

//sidebar navigation
$lang["mnmlblog_sidebarnav"]          = "Показывать боковую навигацию?";
$lang["mnmlblog_sidebarnav_location"] = "Если да, использовать эту wiki страницу как боковую навигацию:";

//custom copyright notice
$lang["mnmlblog_copyright"]          = "Показывать уведомление об авторских правах?";
$lang["mnmlblog_copyright_default"]  = "Если да, использовать уведомление по умолчанию для авторских прав?";
$lang["mnmlblog_copyright_location"] = "Если не по умолчанию, использовать эту wiki страницу как уведомление об авторских правах:";

//search form
$lang["mnmlblog_search"]    = "Показывать форму поиска?";
$lang["mnmlblog_search_pos"] = "Если да, позиция формы поиска";

//other stuff
$lang["mnmlblog_newpostform_location"] = "Использовать эту wiki страницу для формы '&lt;blog newform&gt;':";
$lang["mnmlblog_loaduserjs"]           = "Загрузить 'mnml-blog/user/user.js'?";

