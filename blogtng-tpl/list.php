<?php

/**
 * "mnml-blog" list template
 *
 * This template is used by the <blog list> syntax and can be chosen
 * using the 'tpl' attribute. It is used to display a single entry in
 * the list and is called multiple times (once for each shown entry)
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
<div class="blogtng_list"><?php
    //show headline
    echo "<h1 class=\"hspec\"><a href=\"";
    $entry->tpl_link();
    echo "\" class=\"postdate\">";
    $entry->tpl_created("%Y-%m-%d");
    echo "</a><a href=\"";
    $entry->tpl_link();
    echo "\"> // ".$entry->entry["title"]."</a></h1>";

    //show entry
    $entry->tpl_entry(//included
                      true,
                      //readmore (where to cut valid when using ~~READMORE~~)
                      "syntax",
                      //inc level
                      false,
                      //skip header
                      true);
?>
    <div class="clearer"></div>
    <div class="blogtng_footer">
        <div class="level1">
            <a href="<?php $entry->tpl_link("the__comments"); ?>" class="wikilink1 blogtng_commentlink"><?php $entry->tpl_commentcount($lang["0comments"], $lang["1comments"], $lang["Xcomments"]); //language comes from BlogTNG ?></a> |
            <?php $entry->tpl_created("%Y-%m-%d"); ?>&#160;written&#160;by&#160;<?php $entry->tpl_author(); ?> |
            <a href="<?php $entry->tpl_link(); ?>" class="wikilink1 blogtng_permalink" title="<?php echo hsc($entry->entry["title"]); ?>">Permanentlink</a><br />
            <?php
            if ($entry->has_tags()){
                echo "Tags:"; $entry->tpl_tags("");
            }
            ?>
        </div>
    </div>
</div>
