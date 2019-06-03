<div class="container my-big">
    <h3>Badges</h3>
    <hr>
    <div class="row mt-big">

        <?foreach (["small","normal","big","huge"] as $sz):?>

            <div class="col-md-3">
                <label><?=$sz?></label>
            </div>

            <div class="col-md-9 mb-medium">
                <span class="badge sz-<?=$sz?> color-fluo"><?=$sz?></span>
                <span class="badge sz-<?=$sz?> color-fluo-2">0</span>
                <span class="badge sz-<?=$sz?> color-instagram">1</span>
                <span class="badge sz-<?=$sz?> color-instagram positive">1</span>
                <span class="badge sz-<?=$sz?> color-black">2</span>
                <span class="badge sz-<?=$sz?> color-white">3</span>
                <span class="badge sz-<?=$sz?> color-twitter">10</span>
                <span class="badge sz-<?=$sz?> color-youtube">
                <?=pov()->svg->use("startup-social-youtube")?>
                </span>
            </div>

        <?endforeach;?>


    </div>
</div>