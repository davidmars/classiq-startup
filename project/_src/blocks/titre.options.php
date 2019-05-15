<?php
use Classiq\Models\JsonModels\ListItem;
/**
 * Permet de définir le style de titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
?>
<?=$vv->wysiwyg()
    ->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->buttonValueSetter("h1")
?>
<?=$vv->wysiwyg()
    ->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->buttonValueSetter("h2")
?>
<?=$vv->wysiwyg()
    ->field("style")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->buttonValueSetter("h3")
?>
