<div class="container my-big">
    <h3>ico-label</h3>
    <hr>
    <div class="row mt-big">

        <?foreach (["small","normal","big","huge"] as $sz):?>

            <div class="col-md-3">
                <label><?=$sz?></label>
            </div>

            <div class="col-md-9 mb-medium d-flex ">

                <span class="ico-label mx-medium sz-<?=$sz?> color-fluo">
                     <?=pov()->svg->use("startup-social-youtube")->addClass("fg-youtube")?>
                    <label>Youtube</label>
                </span>

                <div class="ico-label mx-medium sz-<?=$sz?> color-fluo">
                     <div class="ico bg-fluo fg-white shp-circle">99%</div>
                    <div class="label">Text stuff</div>
                </div>
            </div>

        <?endforeach;?>


    </div>
</div>