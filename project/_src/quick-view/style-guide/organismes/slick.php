<div class="container my-big">
    <h3 class="">Slick</h3>
    <hr>
    <div class="row">

        <div class="col-md-3">
            <label>default</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="" data-slick='{}'>

                <?for ($i=1;$i<20;$i++):?>
                    <div class="px-small">
                        <div class="card shadow-flat ratio-4x3 shp-rounded">
                            <div class="bg">
                                <img alt="yo" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/93128/IMGL5833.jpg/1000-0-sa/FFFFFF-80-f-nature-0.jpg">
                            </div>
                            <div class="fg fg-white">
                                <h3 class="fsz-2">Slide <?=$i?></h3>
                            </div>
                        </div>
                    </div>
                <?endfor;?>
            </div>
        </div>

        <div class="col-md-3">
            <label>[data-cards-container] >.cards-container-wrapper[data-slick] </label>
            <p>L'idée ici est d'avoir un slider basé sur le même grid system qu'un .cards-list</p>
        </div>
        <div class="col-md-9 mb-big " data-cards-container>
            <div class="cards-container-wrapper" data-slick='{}'>
                <?for ($i=1;$i<20;$i++):?>
                    <div>
                        <div class="card ratio-16x9">
                            <div class="bg">
                                <img alt="yo" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/93128/IMGL5833.jpg/1000-0-sa/FFFFFF-80-f-nature-0.jpg">
                            </div>
                            <div class="fg fg-white">
                                <h3 class="fsz-2">Slide <?=$i?></h3>
                            </div>
                        </div>
                    </div>
                <?endfor;?>
            </div>
        </div>

        <div class="col-md-3">
            <label>.cards-list (simple)</label>
        </div>
        <div class="col-md-9 mb-big ">
            <div class="cards-list">
            <?for ($i=1;$i<=4;$i++):?>
                <div>
                    <div class="card ratio-16x9">
                        <div class="bg">
                            <img alt="yo" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/93128/IMGL5833.jpg/1000-0-sa/FFFFFF-80-f-nature-0.jpg">
                        </div>
                        <div class="fg fg-white">
                            <h3 class="fsz-2">Slide <?=$i?></h3>
                        </div>
                    </div>
                </div>
            <?endfor;?>
            </div>
        </div>



        <div class="col-md-3">
            <label>.slick-single</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="slick-single" data-slick='{}'>
                <?for ($i=1;$i<20;$i++):?>
                    <div class="px-small">
                        <div class="card shadow-flat ratio-4x3 shp-rounded">
                            <div class="bg">
                                <img alt="yo" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/93128/IMGL5833.jpg/1000-0-sa/FFFFFF-80-f-nature-0.jpg">
                            </div>
                            <div class="fg fg-white">
                                <h3 class="fsz-2">Slide <?=$i?></h3>
                            </div>
                        </div>
                    </div>
                <?endfor;?>
            </div>
        </div>

        
    </div>
</div>