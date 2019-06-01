<div class="container my-big">
    <h3 class="">Typographie</h3>
    <hr>
    <div class="row">

        <div class="col-md-3">
            <label>h1</label>
        </div>
        <div class="col-md-9 mb-big">
            <h1>Titre 1 <small>small</small></h1>
        </div>

        <div class="col-md-3">
            <label>h2</label>
        </div>
        <div class="col-md-9 mb-big">
            <h2>Titre 2 <small>small</small></h2>
        </div>

        <div class="col-md-3">
            <label>h3</label>
        </div>
        <div class="col-md-9 mb-big">
            <h3>Titre 3 <small>small</small></h3>
        </div>

        <div class="col-md-3">
            <label>h4</label>
        </div>
        <div class="col-md-9 mb-big">
            <h4>Titre 4 <small>small</small></h4>
        </div>

        <div class="col-md-3">
            <label>h5</label>
        </div>
        <div class="col-md-9 mb-big">
            <h5>Titre 5 <small>small</small></h5>
        </div>

        <div class="col-md-3">
            <label>label</label>
        </div>
        <div class="col-md-9 mb-big">
            <label>Label <small>small</small></label>
        </div>

        <div class="col-md-3">
            <label>body text</label>
        </div>
        <div class="col-md-9 mb-big">
            Texte par défaut<br>
            <?=utils()->string->loremIspum(40,40)?>
        </div>

    </div>
</div>

<div class="container my-big">


    <hr class="col-md-12 ghost-10">

    <div class="row">

        <div class="col-md-3">
            <h4 class="">Corps de typo non responsive</h4>
        </div>
        <div class="col-md-9 mb-big">
            <p>On utilise ces corps de typographie dans les organismes qui n'ont pas vocation à changer de taille en fonction de la taille d'écran.</p>
        </div>


        <?foreach (["fsz-1","fsz-2","fsz-3","fsz-4","fsz-5","fsz-6"] as $fs):?>

            <div class="col-md-3">
                <label>Style <?=$fs?></label>
            </div>

            <div class="col-md-9 mb-big">
                <h1 class="<?=$fs?> fg-black">Sur un h1, <?=utils()->string->loremIspum(30,30)?></h1>
                <h3 class="<?=$fs?> fg-fluo-2">Sur un h3, <?=utils()->string->loremIspum(30,30)?></h3>
                <div class="<?=$fs?> fg-grey-dark">Sur un div, <?=utils()->string->loremIspum(30,30)?></div>
            </div>

        <?endforeach;?>

    </div>
</div>