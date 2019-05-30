<div class="container my-big">
    <h3 class="">Cards</h3>
    <hr>
    <div class="row">

        <div class="col-md-3">
            <label>ratios</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="row">
                <?foreach (["ratio-1x1","ratio-4x3","ratio-16x9","ratio-2x1",] as $ratio):?>
                    <div class="col-md-6 mb-medium">
                        <div class="card shadow-big <?=$ratio?> shp-rounded">
                            <div class="bg">
                                <img alt="yo" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/93128/IMGL5833.jpg/1000-0-sa/FFFFFF-80-f-nature-0.jpg">
                            </div>
                            <div class="fg fg-white">
                                <h3><?=$ratio?></h3>
                                <a href="#" class="button color-fluo negative">world</a>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>

        <div class="col-md-3">
            <label>vidéo</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="row">
                <div class="col-md-6 mb-medium">
                    <div class="card shadow-big ratio-16x9 shp-rounded">
                        <div class="bg">
                            <video loop="loop" autoplay="autoplay" playsinline="playsinline" muted="muted">
                                <source src="https://interactive-examples.mdn.mozilla.net/media/examples/flower.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="fg fg-white">
                            <h3>vidéo</h3>
                            <p class="text-center"><?=utils()->string->loremIspum(15,20)?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label>fx</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="row">
                <?foreach (
                        [
                                "fx-darken fx-level-75 fx-level-25-hvr",
                                "fx-grayscale fx-level-100 fx-level-0-hvr",
                                "fx-gradient-bottom color-fluo color-fluo-2-hvr fx-level-75-hvr",
                                "fx-gradient-radial color-fluo-2 fx-level-25-hvr",
                                "fx-gradient-hue color-fluo-2 fx-level-100 fx-level-0-hvr",
                                "fx-gradient-hue color-fluo fx-level-100 fx-level-0-hvr",
                                "fx-gradient-colorize color-fluo-2 fx-level-100 fx-level-0-hvr",
                                "fx-gradient-colorize color-fluo fx-level-100 fx-level-0-hvr",

                        ] as $fx):?>
                <div class="col-md-6 mb-medium">
                    <div class="card hvr shadow-big ratio-16x9 shp-rounded">
                        <div class="bg <?=$fx?>">
                            <video loop="loop" autoplay="autoplay" playsinline="playsinline" muted="muted">
                                <source src="https://interactive-examples.mdn.mozilla.net/media/examples/flower.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="fg fg-white ">
                            <h3 class="fg-fluo-hvr text-shadow-flat">FX & Hover</h3>
                            <code class="text-center"><?=$fx?></code>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </div>

        <div class="col-md-3">
            <label>positions</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="row">

                <div class="col-md-6 mb-medium">
                    <div class="card hvr shadow-big ratio-16x9 shp-rounded">
                        <div class="bg"></div>
                        <div class="fg fg-black ">

                            <h3 class="fg-fluo-hvr text-shadow-flat">Default content</h3>


                            <div class="top left">
                                <button class="button shp-rect square sz-small naked negative-hvr color-twitter-hvr"><?=pov()->svg->use("startup-social-twitter")?></button>
                                <code>top left</code>
                            </div>

                            <div class="top right">
                                <button class="button shp-rect square sz-small naked negative-hvr color-black-hvr"><?=pov()->svg->use("startup-caret-down")?></button>
                                <button class="button shp-rect square sz-small naked negative-hvr color-black-hvr"><?=pov()->svg->use("startup-close")?></button>
                            </div>

                            <div class="bottom left right bg-grey-dark fg-white pxy-small text-center">
                                bottom left right
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-medium">
                    <div class="card hvr shadow-big ratio-1x1 shp-rounded">
                        <div class="bg"></div>
                        <div class="fg fg-black ">
                            <h3 class="fg-fluo-hvr text-shadow-flat text-left">Default content</h3>
                            <div class="bottom left">
                                <button class="button shp-rect square sz-small naked negative-hvr color-twitter-hvr"><?=pov()->svg->use("startup-social-twitter")?></button>
                            </div>

                            <div class="bottom right">
                                <button class="button shp-rect square sz-small naked negative-hvr color-black-hvr"><?=pov()->svg->use("startup-caret-down")?></button>
                                <button class="button shp-rect square sz-small naked negative-hvr color-black-hvr"><?=pov()->svg->use("startup-close")?></button>
                            </div>

                            <div class="top left right bg-grey-dark fg-white pxy-small text-center">
                                top left right
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>