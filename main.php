<?php

/**
 * Main file of the "mnml-blog" template for DokuWiki
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <ah@syn-systems.com>
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/devel:templates
 * @link http://www.dokuwiki.org/devel:coding_style
 * @link http://www.dokuwiki.org/devel:environment
 * @link http://www.dokuwiki.org/devel:action_modes
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}


/**
 * Stores the name the current client used to login
 *
 * @var string
 * @author Andreas Haerter <ah@syn-systems.com>
 */
$loginname = "";
if (!empty($conf["useacl"])){
    if (isset($_SERVER["REMOTE_USER"]) && //no empty() but isset(): "0" may be a valid username...
        $_SERVER["REMOTE_USER"] !== ""){
        $loginname = $_SERVER["REMOTE_USER"]; //$INFO["client"] would not work here (-> e.g. when
                                              //current IP differs from the one used to login)
    }
}


//get needed language array
include DOKU_TPLINC."lang/en/lang.php";
//overwrite English language values with available translations
if (!empty($conf["lang"]) &&
    $conf["lang"] != "en" &&
    file_exists(DOKU_TPLINC."/lang/".$conf["lang"]."/lang.php")){
    //get language file (partially translated language files are no problem
    //cause non translated stuff is still existing as English array value)
    include DOKU_TPLINC."/lang/".$conf["lang"]."/lang.php";
}


//detect revision
$rev = (int)$INFO["rev"]; //$INFO comes from the DokuWiki core
if ($rev < 1){
    $rev = (int)$INFO["lastmod"];
}


//get boxes config
if (file_exists(DOKU_TPLINC."/user/boxes.php")){ //user defined
   include DOKU_TPLINC."/user/boxes.php";
}
//add box for QR Code of current page's URL (powered by <http://qrserver.com/api/>)
if (tpl_getConf("mnmlblog_qrcodebox")){
    $_mnmlblog_boxes["qrcode"]["headline"] = $lang["mnmlblog_qrcodebox_qrcode"];
    $_mnmlblog_boxes["qrcode"]["xhtml"]    = "<span class=\"qrcode\"><a href=\"http://".(($conf["lang"] !== "de") ? "goqr.me" : "qr-code-generator.de")."/\" target=\"_blank\"><img src=\"".((!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") ? "https" : "http")."://api.qrserver.com/v1/create-qr-code/?data=".urlencode(wl(cleanID(getId()), false, true, "&"))."&#38;size=190x190&#38;margin=0&#38;bgcolor=ffffff\" alt=\"".hsc($lang["mnmlblog_qrcodebox_qrcode"])." ".hsc(tpl_pagetitle(null, true))." (".hsc($lang["mnmlblog_qrcodebox_genforcurrentpage"]).")\" title=\"".hsc($lang["mnmlblog_qrcodebox_urlofcurrentpage"])."\" /></a></span><p class=\"qrsrc\"><a href=\"http://".(($conf["lang"] !== "de") ? "goqr.me" : "qr-code-generator.de")."/\" target=\"_blank\">QR Code</a> by <a href=\"http://qrserver.com/\" target=\"_blank\">QR-Server</a></p>";
}


/**
 * Helper to render the boxes (like a dynamic XHTML snippet)
 *
 * @param array The box data to render within the snippet. Each box is
 *        represented through an subarray:
 *        $array = array("box-id1" => array("headline" => "hello world!",
 *                                          "xhtml"    => "I am <i>here</i>."));
 *        Available keys within the subarrays:
 *        - "xhtml" (mandatory)
 *          The content of the Box you want to show as XHTML. Attention: YOU
 *          HAVE TO TAKE CARE ABOUT FILTER EVENTUALLY USED INPUT/SECURITY. Be
 *          aware of XSS and stuff.
 *        - "headline" (optional)
 *          Headline to show above the box. Leave empty/do not set for none.
 * @author Andreas Haerter <ah@syn-systems.com>
 * @link http://www.wikipedia.org/wiki/Nofollow
 * @link http://www.wikipedia.org/wiki/Cross-site_scripting
 * @link http://www.dokuwiki.org/devel:coding_style
 */
function _mnmlblog_renderBoxes($arr)
{
    //is there something useful?
    if (empty($arr) ||
        !is_array($arr)){
        return false; //nope, break operation
    }

    //array to store the created boxes into
    $boxes = array();

    //handle the box data
    foreach($arr as $div_id => $contents){
        //basic check
        if (empty($contents) ||
            !is_array($contents) ||
            !isset($contents["xhtml"])){
            continue; //ignore invalid stuff and go on
        }
        $interim  = "\n            <div class=\"sidebarbox\" id=\"".hsc($div_id)."\">\n";
        if (!empty($contents["headline"])){
            $interim .= "                <h5 class=\"hspec\">".hsc($contents["headline"])."</h5>\n";
        }
        $interim .= "                <div class=\"level1\">".$contents["xhtml"]."</div>"
                   ."\n            </div>\n\n";
        //store it
        $boxes[] = $interim;
    }
    //show everything created
    if (!empty($boxes)){
        foreach ($boxes as $box){
            echo $box;
        }
    }

    return true;
}

//workaround for the "jumping textarea" IE bug. CSS only fix not possible cause
//some DokuWiki JavaScript is triggering this bug, too. See the following for
//info:
//- <http://blog.andreas-haerter.com/2010/05/28/fix-msie-8-auto-scroll-textarea-css-width-percentage-bug>
//- <http://msdn.microsoft.com/library/cc817574.aspx>
if ($ACT === "edit" &&
    !headers_sent()){
    header("X-UA-Compatible: IE=EmulateIE7");
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo hsc($conf["lang"]); ?>" lang="<?php echo hsc($conf["lang"]); ?>" dir="<?php echo hsc($lang["direction"]); ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php tpl_pagetitle(); echo " - ".hsc($conf["title"]); ?></title>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
<?php
//show meta-tags
tpl_metaheaders();
echo "<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />";

//include default or userdefined favicon
//
//note: since 2011-04-22 "Rincewind RC1", there is a core function named
//      "tpl_getFavicon()". But its functionality is not really fitting the
//      behaviour of this template, therefore I don't use it here exclusively.
if (file_exists(DOKU_TPLINC."user/favicon.ico")){
    //user defined - you might find http://tools.dynamicdrive.com/favicon/
    //useful to generate one
    echo "\n<link rel=\"shortcut icon\" href=\"".DOKU_TPL."user/favicon.ico\" />\n";
}elseif (file_exists(DOKU_TPLINC."user/favicon.png")){
    //note: I do NOT recommend PNG for favicons (cause it is not supported by
    //all browsers).
    echo "\n<link rel=\"shortcut icon\" href=\"".DOKU_TPL."user/favicon.png\" />\n";
}else{
    //default
    echo "\n<link rel=\"shortcut icon\" href=\"".(function_exists("tpl_getFavicon") ? tpl_getFavicon() : DOKU_TPL."images/favicon.ico")."\" />\n";
}

//include default or userdefined Apple Touch Icon (see <http://j.mp/sx3NMT> for
//details)
if (file_exists(DOKU_TPLINC."user/apple-touch-icon.png")){
    echo "<link rel=\"apple-touch-icon\" href=\"".DOKU_TPL."user/apple-touch-icon.png\" />\n";
}else{
    //default
    echo "<link rel=\"apple-touch-icon\" href=\"".(function_exists("tpl_getFavicon") ? tpl_getFavicon(false, "apple-touch-icon.png") : DOKU_TPL."images/apple-touch-icon.png")."\" />\n";
}

//load userdefined js?
if (tpl_getConf("mnmlblog_loaduserjs")){
    echo "<script type=\"text/javascript\" charset=\"utf-8\" src=\"".DOKU_TPL."user/user.js\"></script>\n";
}
?>
<!--[if lt IE 7]><style type="text/css">img { behavior: url(<?php echo DOKU_TPL; ?>js/iepngfix/iepngfix.htc); }</style><![endif]-->
</head>

<body>
<div id="pagewrap"<?php
    if ($ACT !== "show" && //speed up: check most common action first
        ($ACT === "admin" ||
         $ACT === "conflict" ||
         $ACT === "diff" ||
         $ACT === "draft" ||
         $ACT === "edit" ||
         $ACT === "media" ||
         $ACT === "preview" ||
         $ACT === "save")){
        echo " class=\"admin\"";
    } ?>>

    <!-- start header -->
    <div id="tmpl_header">
        <?php
        //include userdefined logo or show text-headline
        echo "<a href=\"".DOKU_BASE."\" name=\"dokuwiki__top\" id=\"dokuwiki__top\" accesskey=\"h\"";
        if (file_exists(DOKU_TPLINC."user/logo.png")){
            //user defined PNG
            echo "><img src=\"".DOKU_TPL."user/logo.png\" id=\"tmpl_header_logo_img\" alt=\"\"/></a>\n";
        }elseif (file_exists(DOKU_TPLINC."user/logo.gif")){
            //user defined GIF
            echo "><img src=\"".DOKU_TPL."user/logo.gif\" id=\"tmpl_header_logo_img\" alt=\"\"/></a>\n";
        }elseif (file_exists(DOKU_TPLINC."user/logo.jpg")){
            //user defined JPG
            echo "><img src=\"".DOKU_TPL."user/logo.jpg\" id=\"tmpl_header_logo_img\" alt=\"\"/></a>\n";
        }else{
            //default
            echo " class=\"tmpl_header_logo_txt\">".hsc($conf["title"])."</a>\n";
        }

        //show header navigation?
        if (tpl_getConf("mnmlblog_headernav")){
            echo "\n       <div id=\"tmpl_header_nav\">\n";
            //we have to show a custom navigation
            if (empty($conf["useacl"]) ||
                auth_quickaclcheck(cleanID(tpl_getConf("mnmlblog_headernav_location")))){ //current user got access?
                //get the rendered content of the defined wiki article to use as custom navigation
                $interim = tpl_include_page(tpl_getConf("mnmlblog_headernav_location"), false);
                if ($interim === "" ||
                    $interim === false){
                    //show creation/edit link if the defined page got no content
                    echo "[&#160;";
                    tpl_pagelink(tpl_getConf("mnmlblog_headernav_location"), hsc($lang["mnmlblog_fillplaceholder"]." (".tpl_getConf("mnmlblog_headernav_location").")"));
                    echo "&#160;]<br />";
                }else{
                   //show the rendered page content
                   echo $interim;
                }
            }
            if (tpl_getConf("mnmlblog_search") &&
                tpl_getConf("mnmlblog_search_pos") === "headernav"){
                echo "\n            <div id=\"tmpl_header_nav_search\" class=\"dokuwiki\">\n";
                tpl_searchform();
                echo "\n            </div>\n";
            }
            echo "            <div class=\"clearer\"></div>\n        </div>\n";
        }
        ?>
        <div class="clearer"></div>
    </div>
    <!-- end header -->


    <!-- start main content area -->
    <div class="dokuwiki">
        <?php html_msgarea(); ?>

        <!-- start left col -->
        <div id="content"<?php echo (($ACT === "media") ? " class=\"mediamanagerfix\"" : ""); ?>>
            <div class="page">


<!-- start rendered page content -->
<?php
//send already created content to get a faster page rendering on the client
tpl_flush();
//show page content
tpl_content(false);
?>
<!-- end rendered page content -->
<div class="clearer"></div>


            </div>
        </div>
        <!-- end left col -->
        <?php
        //send already created content to get a faster page rendering on the client
        tpl_flush();
        ?>

        <!-- start right col -->
        <div id="tmpl_sidebar">
            <?php
            //show sidebar navigation?
            if (tpl_getConf("mnmlblog_sidebarnav")){
                echo "\n            <div class=\"sidebarnav\">\n";
                //we have to show a custom navigation
                if (empty($conf["useacl"]) ||
                    auth_quickaclcheck(cleanID(tpl_getConf("mnmlblog_sidebarnav_location")))){ //current user got access?
              //get the rendered content of the defined wiki article to use as custom navigation
                    $interim = tpl_include_page(tpl_getConf("mnmlblog_sidebarnav_location"), false);
                    if ($interim === "" ||
                        $interim === false){
                        //show creation/edit link if the defined page got no content
                        echo "[&#160;";
                        tpl_pagelink(tpl_getConf("mnmlblog_sidebarnav_location"), hsc($lang["mnmlblog_fillplaceholder"]." (".tpl_getConf("mnmlblog_sidebarnav_location").")"));
                        echo "&#160;]<br />";
                    }else{
                       //show the rendered page content
                       echo $interim;
                    }
                }
                echo "            </div>\n";
            }
            ?>


            <?php
            if (tpl_getConf("mnmlblog_search") &&
                tpl_getConf("mnmlblog_search_pos") === "sidebar"){
                echo  "\n            <div id=\"search\" class=\"sidebarbox\">\n"
                     ."                <h5 class=\"hspec\">".hsc($lang["mnmlblog_search"])."</h5>\n"
                     ."                <div class=\"level1\">";
                tpl_searchform();
                echo "\n                </div>\n            </div>\n";
            }?>

            <?php
            //show boxes, see mnml-blog/user/boxes.php to configure them
            if (!empty($_mnmlblog_boxes) &&
                 is_array($_mnmlblog_boxes)){
                _mnmlblog_renderBoxes($_mnmlblog_boxes);
            }

            //copyright notice
            if (tpl_getConf("mnmlblog_copyright")){
                echo "\n            <div id=\"licenseinfo\">\n                ";
                if (tpl_getConf("mnmlblog_copyright_default")){
                    tpl_license(false);
                }else{
                    if (empty($conf["useacl"]) ||
                        auth_quickaclcheck(cleanID(tpl_getConf("mnmlblog_copyright_location")))){ //current user got access?
                        //get the rendered content of the defined wiki article to use as custom notice
                        $interim = tpl_include_page(tpl_getConf("mnmlblog_copyright_location"), false);
                        if ($interim === "" ||
                            $interim === false){
                            //show creation/edit link if the defined page got no content
                            echo "[&#160;";
                            tpl_pagelink(tpl_getConf("mnmlblog_copyright_location"), hsc($lang["mnmlblog_fillplaceholder"]." (".tpl_getConf("mnmlblog_copyright_location").")"));
                            echo "&#160;]<br />";
                        }else{
                            //show the rendered page content
                            echo $interim;
                        }
                    }
                }
                echo "\n            </div>\n\n";
            }
            ?>

            <div class="clearer"></div>
        </div>
        <!-- end right col -->
        <div class="clearer"></div>

        <div id="tmpl_footer">
            <div id="tmpl_footer_actlinksleft">
                <?php
                echo "[&#160;";
                tpl_actionlink("top");
                if (actionOK("index")){ //check if action is disabled
                    echo "&#160;|&#160;";
                    tpl_actionlink("index");
                }
                echo "&#160;]";
                ?>
            </div>
            <div id="tmpl_footer_actlinksright">
                <?php
                if (!empty($loginname) ||
                    !tpl_getConf("mnmlblog_hideadminlinksfromanon")){
                    echo "[&#160;";
                    tpl_actionlink("login"); //"login" handles both login/logout
                    if (!empty($INFO["writable"])){ //$INFO comes from DokuWiki core
                        echo "&#160;|&#160;";
                        tpl_actionlink("edit"); //"edit" handles edit/create/show
                    }
                    if (!empty($INFO["exists"]) &&
                        actionOK("revisions")){ //check if action is disabled
                        echo "&#160;|&#160;";
                        tpl_actionlink("revisions");
                    }
                    if (!empty($loginname) &&
                        $ACT === "show" &&
                        actionOK("subscribe")){ //check if action is disabled
                        echo "&#160;|&#160;";
                        tpl_actionlink("subscribe");
                    }
                    if ((!empty($INFO["writable"]) || //$INFO comes from DokuWiki core
                         !empty($INFO["isadmin"]) || //purpose of this template are "non-wiki" websites, therefore show this link only to users with write permission and admins
                         !empty($INFO["ismanager"])) &&
                        actionOK("media") && //check if action is disabled
                        function_exists("media_managerURL")) { //new media manager is available on DokuWiki releases newer than 2011-05-25a "Rincewind" / since 2011-11-10 "Angua" RC1
                        echo "&#160;|&#160;";
                        tpl_actionlink("media");
                    }
                    if (!empty($loginname)){
                        echo  "&#160;|&#160;"
                             ."<a href=\"".hsc(wl(cleanID(tpl_getConf("mnmlblog_newpostform_location"))))."\" rel=\"nofollow\">".hsc($lang["mnmlblog_lnk_newposting"])."</a>"; //create "new posting"
                    }else{
                        echo  "&#160;|&#160;"
                             ."<a href=\"".hsc(wl(cleanID(tpl_getConf("mnmlblog_newpostform_location")), array("do" => "login")))."\" rel=\"nofollow\">".hsc($lang["mnmlblog_lnk_newposting"])."</a>"; //show needed login before create "new posting"
                    }
                    if (!empty($INFO["isadmin"]) ||  //$INFO comes from DokuWiki core
                        !empty($INFO["ismanager"])){
                        echo "&#160;|&#160;";
                        tpl_actionlink("admin");
                    }
                    if (!empty($loginname) &&
                        actionOK("profile")){ //check if action is disabled
                        echo "&#160;|&#160;";
                        tpl_actionlink("profile");
                    }
                    echo "&#160;]";
                }else{
                    echo "&#160;";
                }
                ?>
            </div>
            <div class="clearer"></div>
            <div id="tmpl_footer_metainfo">
                <?php
                //Note: do NOT remove the following mnml-blog and/or DokuWiki link/notice. Please respect this. :-)
                echo "<a href=\"http://syn-systems.com/\" target=\"_blank\">mnml-blog</a> on <a href=\"http://www.dokuwiki.org/\" target=\"_blank\">DW</a> under the hood\n";
                if (!empty($loginname)){
                    echo " | ";
                    tpl_pageinfo();
                    echo " | ";
                    tpl_userinfo();
                }
                ?>
            </div>
        </div>

    </div>
    <!-- end main content area -->
    <div class="clearer"></div>
    <?php
    //provide DokuWiki housekeeping, required in all templates
    tpl_indexerWebBug();
    //include web analytics software
    if (file_exists(DOKU_TPLINC."/user/tracker.php")){
        include DOKU_TPLINC."/user/tracker.php";
    }
    ?>

</div>
</body>
</html>
