<?php

/**
 * User defined box configuration of the "mnml-blog" DokuWiki template
 *
 * If you want to add/remove some boxes, have a look at the comments/examples
 * and the DocBlock of {@link _mnmlblog_renderBoxes()}, main.php
 *
 * To change the non-box related config, use the admin webinterface of DokuWiki.
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


//note: The boxes will be rendered in the order they were defined. Means:
//      first box will be rendered first, last box will be rendered at last.



//examples: uncomment to see what is happening
/*
$_mnmlblog_boxes["example1"]["headline"] = "Hello World!";
$_mnmlblog_boxes["example1"]["xhtml"] = "Blogging with DokuWiki and mnml-blog... <em>rules</em>!";
*/


/*
//subscribe
$_mnmlblog_boxes["syndication"]["headline"] = "Syndiaction/RSS Feed";
$_mnmlblog_boxes["syndication"]["xhtml"] = '<a href="'.DOKU_URL.'feed.php?mode=blogtng&amp;blog=default" rel="nofollow">Subscribe to posts</a>'; //ATTENTION: if not default, replace blog=default with the blogtng-template you are using!
*/


/*
//recent comments
//note: you have to create the page ":wiki:recent_comments" with the following
//      content first:
//<blog recentcomments>
//  blog       default
//  tpl        default
//  limit      10
//  type       comment, linkback
//  nolistwrap 0
//</blog>
//see http://www.dokuwiki.org/plugin:blogtng#blog_recentcomments for more details.
//If not default, replace "default" with the blogtng-template you are using!
$_mnmlblog_boxes["recentcomments"]["headline"] = "Recent Comments";
$_mnmlblog_boxes["recentcomments"]["xhtml"] = tpl_include_page("wiki:recent_comments", false);
*/


/*
//tag cloud
//note: you have to create the page ":wiki:tagcloud" with the following
//      content first:
//<blog tagcloud>
//  blog   default
//  limit  20
//  target start
//</blog>
//see http://www.dokuwiki.org/plugin:blogtng#blog_tagcloud for more details.
//If not default, replace "default" with the blogtng-template you are using!
$_mnmlblog_boxes["tagcloud"]["headline"] = "Tag cloud";
$_mnmlblog_boxes["tagcloud"]["xhtml"] = tpl_include_page("wiki:tagcloud", false);
*/


/*
$_mnmlblog_boxes["example2"]["headline"] = "Some links";
$_mnmlblog_boxes["example2"]["xhtml"] =  "<ul>\n"
                                        ."    <li><a href=\"".wl(cleanID(getId()), array("do" => "backlink"))."\" rel=\"nofollow\">".hsc($lang["mnmlblog_lnk_whatlinkshere"])."</a></li>\n"
                                        ."    <li><a href=\"http://www.example.com\">Example link</a></li>\n"
                                        ."</ul>";
*/


/*
$_mnmlblog_boxes["example3"]["headline"] = "Buttons";
$_mnmlblog_boxes["example3"]["xhtml"] = "<a href=\"http://syn-systems.com/donate/dokuwiki-template-mnml-blog/\" title=\"Donate\" target=\"_blank\"><img src=\"".DOKU_TPL."images/button-donate.gif\" width=\"80\" height=\"15\" alt=\"Donate\" border=\"0\" /></a>";
*/


/*
//public links
$_mnmlblog_boxes["publnk"]["headline"] = "Toolbox";
$_mnmlblog_boxes["publnk"]["xhtml"] =  "<ul>\n"
                                      ."    <li><a href=\"".wl(cleanID(getId()), array("do" => "backlink"))."\">".hsc($lang["mnmlblog_lnk_whatlinkshere"])."</a></li>\n"
                                      ."    <li><a href=\"".wl(cleanID(getId()), array("do" => "index"))."\">".hsc($lang["mnmlblog_lnk_siteindex"])."</a></li>\n"
                                      ."</ul>";
*/


/*
//internal links (for logged in users)
if (!empty($loginname)){ //$loginname comes from main.php
    $_mnmlblog_boxes["userlnk"]["headline"] = "Internal";
    $_mnmlblog_boxes["userlnk"]["xhtml"] = "<ul>\n";
    //edit/create/show source
    if (!empty($INFO["writable"])){ //$INFO comes from DokuWiki core
        if (!empty($INFO["draft"])){
            $_mnmlblog_boxes["userlnk"]["xhtml"] .= "    <li><a href=\"".wl(cleanID(getId()), array("do" => "draft", "rev" => (int)$rev))."\" rel=\"nofollow\">".hsc($lang["btn_draft"])."</a></li>\n"; //language comes from DokuWiki core, $rev comes from main.php
        }else{
            if(!empty($INFO["exists"])){
                $_mnmlblog_boxes["userlnk"]["xhtml"] .= "    <li><a href=\"".wl(cleanID(getId()), array("do" => "edit", "rev" => (int)$rev))."\" rel=\"nofollow\">".hsc($lang["btn_edit"])."</a></li>\n"; //language comes from DokuWiki core, $rev comes from main.php
            }else{
                $_mnmlblog_boxes["userlnk"]["xhtml"] .= "    <li><a href=\"".wl(cleanID(getId()), array("do" => "edit", "rev" => (int)$rev))."\" rel=\"nofollow\">".hsc($lang["btn_create"])."</a></li>\n"; //language comes from DokuWiki core, $rev comes from main.php
            }
        }
    }else{
        $_mnmlblog_boxes["userlnk"]["xhtml"] .= "    <li><a href=\"".wl(cleanID(getId()), array("do" => "edit", "rev" => (int)$rev))."\" rel=\"nofollow\">".hsc($lang["btn_source"])."</a></li>\n"; //language comes from DokuWiki core, $rev comes from main.php
    }

    $_mnmlblog_boxes["userlnk"]["xhtml"] .=  "    <li><a href=\"".wl("", array("do" => "media"))."\" rel=\"nofollow\">".hsc($lang["btn_media"])."</a></li>\n" //language comes from DokuWiki core
                                            ."    <li><a href=\"".wl(cleanID(getId()), array("do" => "revisions"))."\" rel=\"nofollow\">".hsc($lang["btn_revs"])."</a></li>\n" //language comes from DokuWiki core
                                            ."    <li><a href=\"".wl(cleanID(getId()), array("rev" =>(int)$rev))."\" rel=\"nofollow\">".hsc($lang["mnmlblog_lnk_permrev"])."</a></li>\n"; //$rev comes from main.php
    //admin
    if (!empty($INFO["isadmin"]) ||
        !empty($INFO["ismanager"])){
        $_mnmlblog_boxes["userlnk"]["xhtml"] .=  "    <li><a href=\"".wl(cleanID(getId()), array("do" => "admin"))."\" rel=\"nofollow\">".hsc($lang["btn_admin"])."</a></li>\n" //language comes from DokuWiki core
                                                ."    <li><a href=\"".wl(cleanID(getId()), array("do" => "admin", "page" => "blogtng"))."\" rel=\"nofollow\">".hsc($lang["btn_admin"])." (Blog)</a></li>\n"; //language comes from DokuWiki core
    }
    //admin (BlogTNG)
    $_mnmlblog_boxes["userlnk"]["xhtml"] .=  "    <li><a href=\"".wl(cleanID(getId()), array("do" => "profile"))."\" rel=\"nofollow\">".hsc($lang["btn_profile"])."</a></li>\n" //language comes from DokuWiki core
                                            ."</ul>";
}
*/

