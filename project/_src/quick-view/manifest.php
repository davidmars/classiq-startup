<?php
the()->headerOutput->contentTypeJson();
$short_name="CqStartup";
$name="Classiq startup";

$start=site()->homePage()->href();

$iconsSizes=utils()->array->fromString("72,96,128,144,152,192,384,512");
$icons=[];
foreach ($iconsSizes as $size){
    $f="project/img/icon-".$size."x".$size.".png";
    if(file_exists("$f")){
        $o=[];
        $o["src"]=the()->fmkHttpRoot."/".$f;
        $o["sizes"]=$size."x".$size;
        $o["type"]="image/png";
        $icons[]=$o;
    }
}

?>
{
"short_name": "<?=$short_name?>",
"name": "<?=$name?>",
"start_url": "<?=$start?>",
"scope": "<?=$start?>",
"display": "standalone",
"orientation": "portrait",
"background_color": "#222222",
"theme_color": "#FF0000",
"icons": <?=json_encode($icons,JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES)?>



}