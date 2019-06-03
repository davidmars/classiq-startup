<div class="container my-big">
    <h3 class="">Slick</h3>
    <hr>
    <div class="row">

        <div class="col-md-3">
            <label>ratios</label>
        </div>
        <div class="col-md-9 mb-big">
            <div class="cards-list" data-slick>

                <?foreach (["item 1","item 2","item 3","item 4",] as $item):?>
                    <div>
                        <div class="card shadow-big ratio-4x3 shp-rounded">
                            <div class="bg">
                                <img alt="yo" src="https://le-drone.com/__cache/robert/img/__db/localhost/ledrgnpu_drone/pp/uids/93128/IMGL5833.jpg/1000-0-sa/FFFFFF-80-f-nature-0.jpg">
                            </div>
                            <div class="fg fg-white">
                                <h3><?=$item?></h3>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>

        
    </div>
</div>