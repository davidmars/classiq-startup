<?php
/** @var Page $vv */
use Classiq\Models\Page;
$view->inside("layout/layout", $vv);
?>

<div class="container py-big">
    <h1>Ceci est la page index.php</h1>
    <?=trad("test")?>
</div>
