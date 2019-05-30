<div class="container my-big">
    <h3>Champs</h3>
    <hr>
    <div class="row mt-big">

        <div class="col-md-3">
            <label>shapes</label>
        </div>
        <?foreach (["shp-normal","shp-rounded","shp-pill"] as $shape):?>
            <div class="col-md-3">
                <code>.<?=$shape?></code>
                <hr class="invisible">
                <input type="text" placeholder="<?=$shape?>"   class="field <?=$shape?>">
                <hr class="invisible">
                <input type="number" placeholder="<?=$shape?>"   class="field <?=$shape?>">
                <hr class="invisible">
                <textarea rows="8" placeholder="<?=$shape?>" class="field <?=$shape?>"></textarea>
                <hr class="invisible">
                <select class="field <?=$shape?>">
                    <option>Hello</option>
                    <option>word</option>
                </select>
                <hr class="invisible">
            </div>
        <?endforeach;?>
        <div class="col-md-3">
            <label>colors</label>
        </div>
        <?foreach (["color-fluo","color-fluo-2","color-grey"] as $color):?>
            <div class="col-md-3">
                <code>.<?=$color?></code>
                <hr class="invisible">
                <input type="text" placeholder="text"   class="field <?=$color?>">
                <hr class="invisible">
                <input type="number" placeholder="number"   class="field <?=$color?>">
                <hr class="invisible">
                <textarea rows="8" placeholder="textarea" class="field <?=$color?>"></textarea>
                <hr class="invisible">
                <select class="field <?=$color?>">
                    <option>Hello</option>
                    <option>word</option>
                </select>
                <hr class="invisible">
            </div>
        <?endforeach;?>

        <div class="col-md-3">
            <label>colors negative</label>
        </div>
        <?foreach (["color-fluo","color-fluo-2","color-grey"] as $color):?>
            <div class="col-md-3">
                <code>.<?=$color?>.negative</code>
                <hr class="invisible">
                <input type="text" placeholder="text"   class="field <?=$color?> negative">
                <hr class="invisible">
                <input type="number" placeholder="number"   class="field <?=$color?> negative">
                <hr class="invisible">
                <textarea rows="8" placeholder="textarea" class="field <?=$color?> negative"></textarea>
                <hr class="invisible">
                <select class="field <?=$color?> negative">
                    <option>Hello</option>
                    <option>word</option>
                </select>
                <hr class="invisible">
            </div>
        <?endforeach;?>


        <div class="col-md-3">
            <label>sizes</label>
        </div>
        <div class="col-md-9">
            <?foreach (["sz-small","sz-big","sz-huge"] as $size):?>
                <code>.<?=$size?></code>
                <hr class="invisible">
                <input type="text" placeholder="text"   class="field <?=$size?>">
                <hr class="invisible">
                <input type="number" placeholder="number"   class="field <?=$size?>">
                <hr class="invisible">
                <textarea rows="8" placeholder="textarea" class="field <?=$size?>"></textarea>
                <hr class="invisible">
                <select class="field <?=$size?>">
                    <option>Hello</option>
                    <option>word</option>
                </select>
                <hr class="invisible">
            <?endforeach;?>
        </div>



    </div>
</div>