<?php

/**
 * "mnml-blog" RSS feed template
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
 * @TODO everything
 */

?>
<?php echo $entry->get_entrycontent() ?>

<p>
    <small>
        This blog post was created <?php $entry->tpl_created("on %Y-%m-%d at %H:%M")?> by
        <?php $entry->tpl_author()?>.
        <?php if ($entry->has_tags()):?>
        It is tagged with <?php $entry->tpl_tagstring("")?>.
        <?php endif ?>
    </small>
</p>
