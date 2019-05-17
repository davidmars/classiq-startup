<?php
use Classiq\Models\JsonModels\ListItem;
/**
 * Permet de définir le style de titre
 * @var Classiq\Models\JsonModels\ListItem $vv
 */
?>
<?=$vv->wysiwyg()
    ->field("invert")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->buttonValueSetter("")
    ->addClass("wide")
    ->setInnerHTML(pov()->svg->use(
        "cq-block-image-texte")
    )
?>
<?=$vv->wysiwyg()
    ->field("invert")
    ->string()
    ->onSavedRefreshListItem($vv)
    ->buttonValueSetter("1")
    ->addClass("wide")
    ->setInnerHTML(pov()->svg->use(
        "cq-block-texte-image")
    )
?>

