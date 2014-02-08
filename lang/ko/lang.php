<?php

/**
 * Korean language for the "mnml-blog" DokuWiki template
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

//links (not all are used by default but may be useful for /user/boxes.php)
$lang["mnmlblog_lnk_print"] = "인쇄용 문서";
$lang["mnmlblog_lnk_permrev"] = "고유 링크";
$lang["mnmlblog_lnk_whatlinkshere"] = "여기를 가리키는 문서";
$lang["mnmlblog_lnk_siteindex"] = "사이트맵";
$lang["mnmlblog_lnk_upload"] = "파일 올리기";
$lang["mnmlblog_lnk_newposting"] = "새 포스트";

//qr code box
$lang["mnmlblog_qrcodebox_qrcode"] = "QR 코드: 현재 문서의 URL";
$lang["mnmlblog_qrcodebox_genforcurrentpage"] = "현재 문서의 생성된 QR 코드";
$lang["mnmlblog_qrcodebox_urlofcurrentpage"] = "현재 문서의 QR 코드 (쉽게 모바일 접근을 하려면 스캔)";

//other
$lang["mnmlblog_search"] = "찾기";
$lang["mnmlblog_accessdenied"] = "접근 거부됨";
$lang["mnmlblog_fillplaceholder"] = "이 자리를 채우거나 비활성화하세요";
$lang["mnmlblog_donate"] = "기부";
$lang["mnmlblog_mdtemplatefordw"] = "도쿠위키를 위한 mnml-blog 템플릿";
$lang["mnmlblog_recentchanges"] = "최근 바뀜";

