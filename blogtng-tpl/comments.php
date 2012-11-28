<?php

/**
 * "mnml-blog" comment template
 *
 * This template is called from $entry->tpl_comments to display
 * comments. It is used to display a single comment in the list
 * and is called multiple times (once for each shown comment)
 *
 * ATTENTION: this BlogTNG-template is designed for the DowkuWiki-template
 *            "mnml-blog". It may uses styles out of it and may not work with
 *            other DowkuWiki-templates!
 *
 *
 * LICENSE: This file is open source software (OSS) and may be copied under
 *          certain conditions. See COPYING file for details or try to contact
 *          the author(s) of this file in doubt.
 *
 * @license GPLv2 (http://www.gnu.org/licenses/gpl2.html)
 * @author Andreas Haerter <ah@syn-systems.com>
 * @link http://www.dokuwiki.org/template:mnml-blog
 * @link http://www.dokuwiki.org/plugin:blogtng
 */

?>
<div class="blogtng_comment blogtng_comment_status_<?php $comment->tpl_status(); ?>" id="comment_<?php $comment->tpl_cid(); ?>">
    <div>
        <img src="<?php $comment->tpl_avatar(48, 48); ?>" class="avatar" width="48" height="48" alt="" align="left" />
        <div><?php $comment->tpl_hcard(); ?> No. <?php $comment->tpl_number(false); ?> @ <?php $comment->tpl_created(); ?></div>
        <br />
    </div>
    <?php $comment->tpl_comment(); ?>
    <div class="replytocomment">
        <?php $comment->tpl_number(true, "» Reply"); ?>
    </div>
</div>
