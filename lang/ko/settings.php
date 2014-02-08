<?php

/**
 * Korean language for the Config Manager
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
 * @author Myeongjin <aranet100@gmail.com>
 * @link https://www.dokuwiki.org/template:mnml-blog
 * @link https://www.dokuwiki.org/config:lang
 * @link https://www.dokuwiki.org/devel:configuration
 */


//check if we are running within the DokuWiki environment
if (!defined("DOKU_INC")){
    die();
}

//header navigation
$lang["mnmlblog_headernav"]          = "머리글 둘러보기를 보여줄까요?";
$lang["mnmlblog_headernav_location"] = "만약 보여준다면 머리글 둘러보기로 다음 위키 문서 사용:";

//sidebar navigation
$lang["mnmlblog_sidebarnav"]          = "사이드바 둘러보기를 보여줄까요?";
$lang["mnmlblog_sidebarnav_location"] = "만약 보여준다면 사이드바 둘러보기로 다음 위키 문서 사용:";

//custom copyright notice
$lang["mnmlblog_copyright"]          = "저작권 알림을 보여줄까요?";
$lang["mnmlblog_copyright_default"]  = "만약 보여준다면 기본 저작권 알림을 사용하겠습니까?";
$lang["mnmlblog_copyright_location"] = "기본 알림을 사용하지 않는다면 저작권 알림으로 다음 위키 문서 사용:";

//search form
$lang["mnmlblog_search"]    = "검색 양식을 보여줄까요?";
$lang["mnmlblog_search_pos"] = "만약 보여준다면 검색 양식 위치";

//qr code box
$lang["mnmlblog_qrcodebox"] = "(모바일 브라우저에 쉽게 URL 전송을 위해) 현재 위키 문서 URL의 QR 코드로 된 상자를 보여줄까요?";

//other stuff
$lang["mnmlblog_newpostform_location"]   = "'&lt;blog newform&gt;' 양식에 대해 다음 위키 문서 사용:";
$lang["mnmlblog_hideadminlinksfromanon"] = "클라이언트가 인증된 사용자가 아니면 모든 관리자와 사용자 기능과 관련된 링크를 숨길까요? 이 기능이 활성이면 수동으로 로그인 양식을 호출해야 함에 주의하세요. (힌트: '".DOKU_URL.DOKU_SCRIPT."?do=login')";
$lang["mnmlblog_loaduserjs"]             = "'mnml-blog/user/user.js'를 불러올까요?";

