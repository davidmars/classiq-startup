<?php
$httpDir=dirname("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
$routeDir="configs/routes/$httpDir";
//crée le répertoire
if(!is_dir($routeDir)){
    mkdir($routeDir,null,true);
}
//crée les fichiers de config pour chaque langue
$outputs=[];
foreach(["fr","en"] as $lang){
    $configLanguageFile="$routeDir/$lang.php";
    if(!is_file($configLanguageFile)){
        $content=file_get_contents("_install/language-template.php");
        $content=str_replace("zzz-fmkHttpRoot-zzz",dirname($_SERVER["REQUEST_URI"]),$content);
        $content=str_replace("zzz-configProjectUrl-zzz","$httpDir/$lang",$content);
        $content=str_replace("zzz-langCode-zzz","$lang",$content);
        $content=str_replace("zzz-httpHost-zzz","http://".$_SERVER["HTTP_HOST"],$content);
        file_put_contents($configLanguageFile,$content);
        $outputs[$configLanguageFile]=$content;
    }else{
        $outputs[$configLanguageFile]="Le fichier existait déjà, on ne l'a pas écrasé";
    }
}
$sharedFile="$routeDir/shared.php";
if(!is_file($sharedFile)){
    $content=file_get_contents("_install/shared-template.php");
    $content=str_replace("zzz-fmkHttpRoot-zzz",dirname($_SERVER["REQUEST_URI"]),$content);
    $content=str_replace("zzz-configProjectUrl-zzz","$httpDir/$lang",$content);
    $content=str_replace("zzz-langCode-zzz","$lang",$content);
    $content=str_replace("zzz-httpHost-zzz","http://".$_SERVER["HTTP_HOST"],$content);
    file_put_contents($sharedFile,$content);
    $outputs[$sharedFile]=$content;
}
?>
<style>
    pre{
        background-color: #f0f0f0;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #999999;
    }
</style>
<?foreach ($outputs as $file=>$content):?>
<h3><?=$file?></h3>
<pre><?=$content?></pre>
<?endforeach?>

