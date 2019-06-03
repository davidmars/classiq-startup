<?php
$view->inside("layout/layout", $vv);
?>

<div class="container text-center py-big">

    <img alt="user name"
         class="shp-circle sz-big"
         src="https://le-drone.com/__cache/robert/img/__db/localhost/glspxueq_drone/pp/uids/84640/vignette_serre.jpg/150-150-nb/ffffff-80.jpg">

    <h1 class="fg-fluo-2 h3 py-medium">Killian Bidet</h1>

    <!--tags profil-->
    <div class="fg-fluo-2">
        <a href="#tag" class="underline-hvr"> Etudiant</a> |
        <a href="#tag" class="underline-hvr"> Institut Catholique de Paris</a>
        <br>
        <a href="#tag" class="underline-hvr">Licence Humanité</a>
    </div>

    <!--liens réseaux sociaux-->
    <div class="fg-fluo-2 py-medium">
        <a href="#" class="button naked  sz-small square color-fluo-2 negative-hvr color-instagram-hvr">
            <?=pov()->svg->use("startup-social-instagram")?>
        </a>
        <a href="#" class="button naked  sz-small negative-hvr color-fluo-2 color-facebook-hvr square">
            <?=pov()->svg->use("startup-social-facebook")?>
        </a>
        <a href="#" class="button naked  sz-small negative-hvr color-fluo-2 color-twitter-hvr square">
            <?=pov()->svg->use("startup-social-twitter")?>
        </a>
        <a href="#" class="button naked  sz-small negative-hvr color-fluo-2 color-linkedin-hvr square">
            <?=pov()->svg->use("startup-social-linkedin")?>
        </a>
    </div>

    <!--bio-->
    <div class="py-medium">
        <p>Biographie, <?=utils()->string->loremIspum(60,120)?></p>
    </div>

    <!--stats-->
    <div class="py-medium fg-fluo-2 d-flex align-items-center justify-content-center">
        <div class="ico-label sz-small">
            <b class="ico fsz-1">3</b>
            <b class="label fsz-5">Posts</b>
        </div>

        <hr class="vertical h-medium">

        <div class="ico-label sz-small">
            <?=pov()->svg->use("startup-social-twitter")->addClass("w-medium h-medium")?>
            <b class="label fsz-5">Wayers</b>
        </div>
    </div>

    <div class="py-medium">
        <a href="#suivre" class="button negative color-fluo-2 positive-hvr shadow-big">
            Suivre
        </a>
    </div>

</div>

<div class="bg-fluo shp-rounded py-big text-center">
    <div class="container">
        <div class="cards-list shadow-big-list shp-rounded-list">
        <?for ($i=0;$i<3;$i++):?>

                <div>
                    <div href="#" class="card hvr ratio-4x3">
                        <div class="bg fx-gradient-bottom color-fluo-2 fx-level-75 fx-level-100-hvr">
                            <img alt="test" src="https://le-drone.com/__cache/robert/img/__db/localhost/glspxueq_drone/dev/uids/57474/LIGHTNING_BOLT_PIX_1-1.jpg/380-214-nb/ffffff-80.jpg">
                        </div>
                        <div class="fg">
                            <div class="top right d-flex align-items-center pxy-small hvr2">
                                <h3 class="fsz-5 mr-small text-shadow-flat ">
                                    <a class="underline-hvr2" href="#profile" >Killian Bidet</a>
                                </h3>
                                <img alt="user name"
                                     class="shp-circle sz-small w-medium h-medium"
                                     src="https://le-drone.com/__cache/robert/img/__db/localhost/glspxueq_drone/pp/uids/84640/vignette_serre.jpg/150-150-nb/ffffff-80.jpg">
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

