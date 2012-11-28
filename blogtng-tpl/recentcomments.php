<?php

/**
 * "mnml-blog" recent comments template
 *
 * This template is used in the <blog recentcomments> syntax.
 * It is used to display a single comment in
 * the list and is called multiple times (once for each shown comment)
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
<li><div class="li">
    <?php $comment->tpl_name(); ?>
    on „<a href="<?php $entry->tpl_link("comment_".$comment->data["cid"]); ?>" class="wikilink1"><?php $entry->tpl_title(); ?></a>“
    (<?php $comment->tpl_created("%f"); ?>)
</div></li>

