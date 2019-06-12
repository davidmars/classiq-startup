<?php
if(!the()->requestUrl->isAjax){
    the()->htmlLayout()->addJsToHeader("https://code.jquery.com/jquery-3.4.1.js");
    the()->htmlLayout()->addJsToFooter("project/_src/quick-view/lab/glitch-video/glitch-video.js");
    //the()->htmlLayout()->addCssToHeader("dist/app.css");
    if(site()->googleApiKey){
        the()->htmlLayout()->install()->googleMap(site()->googleApiKey,"places");
    }
    the()->htmlLayout()->layoutVars->googleAnalyticsId=site()->googleAnalyticsId;
    the()->htmlLayout()->hreflang=the()->project->langCode;
    the()->htmlLayout()->favicon->favicon=the()->fileSystem->filesystemToHttp("project/logo.png");
    //the()->htmlLayout()->addJavascriptTranslations();

    //manifest
    //the()->htmlLayout()->webAppManifest=the()->fileSystem->filesystemToHttp("manifest.json")."?r=".date("Y-m-d-H-i-s");
    //the()->htmlLayout()->webAppManifest=\Pov\Defaults\C_default::quickView_url("manifest");
    //the()->htmlLayout()->meta->themeColor="#ff0000";

    $view->inside("layout/html5bp",the()->htmlLayout());
}
?>
<style>
    body{
        margin: 0;
    }
    #myCanvas{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #layer{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        background-color: rgba(0, 0, 0, 0.2);

    }
    h1{
        text-transform: uppercase;
    }
</style>
<div>
    <canvas id="myCanvas" zwidth="854px" zheight="480px"></canvas>
    <div id="layer">
        <h1>Glitch Video</h1>
    </div>

</div>
