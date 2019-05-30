<?php
$view->inside("layout/layout", $vv);
?>
<section class="py-big" style="<?=utils()->css->backgroundImageUrl(
        the()->fileSystem->filesystemToHttp("project/img/damier.png"))?>" >

        <?=$view->render("./style-guide/atomes")?>
        <?=$view->render("./style-guide/molecules")?>
        <?=$view->render("./style-guide/organismes")?>

        <h1 class="ghost text-center">Templates</h1>

        <?=$view->render("./style-guide/tips")?>

</section>


