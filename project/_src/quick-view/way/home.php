<?php
$view->inside("layout/layout", $vv);
?>


<div class="card ratio-2x1 hvr">
    <div class="bg fx-darken fx-level-25 fx-level-50-hvr">
        <img src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/92653/neon_cropped_ok.jpg/0-500-nb/FFFFFF-80.jpg">
    </div>
    <div class="fg">
        <h1>What About Yours ?</h1>
    </div>

</div>

<div class="container text-center py-big">
    <div>
        <h2 class="h1 fg-fluo-2 mb-big">Le premier réseau social d'orientation.</h2>
        <p class="fg-fluo-2 mb-big"><?=utils()->string->loremIspum(50,50)?></p>

        <div class="d-flex flex-column justify-content-center align-items-center">
            <a class="button color-fluo-2 negative shadow-big mb-medium">Se connecter</a>
            <a class="button color-fluo-2">S'inscrire</a>
        </div>

    </div>
</div>

<div class="bg-fluo-2 shp-rounded py-big text-center">
    <div class="container">
        <h2 class="fg-white mb-big">Toi aussi, donne ton avis !</h2>
        <div class="row">
            <?for ($i=0;$i<4;$i++):?>
            <div class="col-md-6 col-xl-3 mb-medium">
                <div class="card shp-rounded shadow-big ratio-4x3">
                    <div class="bg fx-darken fx-level-25">
                        <img src="https://interactive-examples.mdn.mozilla.net/media/examples/plumeria.jpg">
                    </div>
                    <div class="fg">
                        <a class="button color-white transparent mb-small">
                            #sciences
                        </a>
                        <a class="button color-fluo negative">
                            Je donne mon avis
                        </a>
                    </div>
                </div>
            </div>
            <?endfor;?>
        </div>


    </div>
</div>
<div class="bg-fluo shp-rounded py-big text-center">
    <div class="container">
        <h2 class="fg-fluo-2 mb-big">A la une ...</h2>
        <div class="cards-list shadow-big-list shp-rounded-list">
        <?for ($i=0;$i<4;$i++):?>

                <div>
                    <div href="#" class="card hvr ratio-4x3">
                        <div class="bg fx-gradient-bottom color-fluo-2 fx-level-75 fx-level-100-hvr">
                            <img alt="test" src="https://le-drone.com/__cache/robert/img/__db/localhost/glspxueq_drone/dev/uids/57474/LIGHTNING_BOLT_PIX_1-1.jpg/380-214-nb/ffffff-80.jpg">
                        </div>
                        <div class="fg">
                            <div class="top right">
                                <a href="#tag-redaction" class="button square color-fluo-2 negative shp-rounded">
                                    <?=pov()->svg->use("startup-social-instagram")?>
                                </a>
                            </div>
                            <div class="bottom left right text-left pxy-small">
                                <?=pov()->svg->use("startup-social-youtube")
                                    ->addClass("h-medium w-medium fg-white")
                                ?>
                                <h3 class="fsz-4 text-shadow-flat">
                                    Marie, nous parle de son entrée à la fac
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div href="#" class="card hvr ratio-4x3">
                        <div class="bg fx-gradient-bottom color-fluo-2 fx-level-75  fx-level-100-hvr">
                            <img alt="test" src="https://le-drone.com/__cache/robert/img/__db/localhost/glspxueq_dev/theDrone/uids/20265/helenah.jpg/0-500-nb/FFFFFF-80.jpg">
                        </div>
                        <div class="fg">
                            <div class="top right">
                                <a href="#tag-redaction" class="button square color-fluo-2 negative shp-rounded">
                                    <?=pov()->svg->use("startup-social-instagram")?>
                                </a>
                            </div>
                            <div class="bottom left right text-left pxy-small">
                                <h3 class="fsz-4 text-shadow-flat">
                                    Jayci : " Selon moi, les réseaux sociaux, il faut les utiliser comme un tremplin "
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div href="#" class="hvr card ratio-4x3">
                        <div class="bg fx-gradient-bottom color-fluo-2 fx-level-75 fx-level-100-hvr">
                            <img alt="test" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/92907/peacock_1.jpg/0-500-nb/FFFFFF-80.jpg">
                        </div>
                        <div class="fg">
                            <div class="top right">
                                <a href="#tag-redaction" class="button square color-fluo-2 negative shp-rounded">
                                    <?=pov()->svg->use("startup-social-instagram")?>
                                </a>
                            </div>
                            <a href="#" class="button transparent color-white negative-hvr">
                                Intermittent du spectacle
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div href="#" class="hvr card ratio-4x3">
                        <div class="bg fx-gradient-bottom color-fluo-2 fx-level-75 fx-level-100-hvr">
                            <img alt="test" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/92907/peacock_1.jpg/0-500-nb/FFFFFF-80.jpg">
                        </div>
                        <div class="fg">
                            <div class="top right">
                                <a href="#tag-redaction" class="button square color-fluo-2 negative shp-rounded">
                                    <?=pov()->svg->use("startup-social-instagram")?>
                                </a>
                            </div>
                            <div class="bottom left right text-left pxy-small">
                                <h4 class="fsz-4 mb-small text-shadow-flat">
                                    Eloïse Chamalet
                                </h4>
                                <a href="#" class="button sz-small transparent color-white negative-hvr">
                                    Master STAPS Ingénerie
                                </a>
                            </div>
                        </div>
                    </div>
                </div>










        <?endfor;?>
        </div>
    </div>
</div>

