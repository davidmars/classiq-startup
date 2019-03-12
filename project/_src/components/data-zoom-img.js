"use strict";
var DataZoomImg={

    display:function($btn){

        //injecte le layer au besoin
        let $zoomLayer=$("#data-zoom-layer");
        if(!$zoomLayer.length){
            $zoomLayer=$(require("./data-zoom-layer.html"));
            $body.append($zoomLayer);
            //bouton fermer
            $zoomLayer.find(".close").on("click",function(){
                close();
            });
        }


        //touche prev / next
        $zoomLayer.find(".close").focus();
        $body.off('keydown',"#data-zoom-layer");
        $body.on('keydown',"#data-zoom-layer",listenKeys );
        function listenKeys(event){
            console.log(event.keyCode);
            switch(event.keyCode){
                case 39://right
                case 40://down
                    next();
                    break;
                case 37://right
                case 38://up
                    prev();
                    break;
                case 27://esc
                //case 8://backspace
                    close();
                    break;
            }
        }


        //variables
        let url=$btn.attr("data-zoom-img");
        let zoomType=$btn.attr("data-zoom-type");
        if(!zoomType){
            zoomType="image";
        }
        let zoomGroup=$btn.attr("data-zoom-group");

        //$elements
        let $imgContainer=$zoomLayer.find(".img-container");
        let $legende=$zoomLayer.find(".legende");
        let $transiEls=$zoomLayer.find(".img-container,.legende");
        let $btnNext=$zoomLayer.find(".next");
        let $btnPrev=$zoomLayer.find(".prev");

        //reset dans tous les cas
        $imgContainer.find("video.zoom-layer-video").remove();
        $imgContainer.css("background-image","none");
        $imgContainer.empty();
        $legende.text("");


        $zoomLayer.attr("is-type",zoomType);

        switch (zoomType) {
            case "video":
                let $vdo=$("<video></video>");
                $vdo.addClass("zoom-layer-video");
                $vdo.attr("src",url);
                $vdo.attr("autoplay","autoplay");
                $vdo.attr("controls","controls");
                $imgContainer.append($vdo);
                break;
            case "selector":
                let $toInject=$(url).clone();
                $toInject.removeAttr("data-zoom-group")
                $toInject.removeAttr("data-zoom-type")
                $toInject.removeAttr("data-zoom-img")
                $imgContainer.append($toInject);
                break;
            default:
                $imgContainer.css("background-image","url('"+url+"')");
        }

        //légende?
        let legende=$btn.attr("data-zoom-legend");
        $legende.text(legende);

        //gère les précédents suivants

        $btnNext.off("click");
        $btnPrev.off("click");


        let $allZooms=$("[data-zoom-img]");
        if(zoomGroup){
            $allZooms=$allZooms.filter("[data-zoom-group='"+zoomGroup+"']")
        }else{
            $allZooms=$allZooms.filter("[data-zoom-group=''],:not([data-zoom-group])")
        }
        let $prev=null;
        let $next=null;

        /**
         * Affiche le slide précédent
         */
        function prev(){
            if($prev && $prev.length){
                $transiEls.attr("transi","fade-out-right");
                setTimeout(function(){
                    DataZoomImg.display($prev);
                    $transiEls.attr("transi","fade-in-left");
                },500);
            }
        }
        /**
         * Affiche le slide suivant
         */
        function next(){
            if($next && $next.length){
                $transiEls.attr("transi","fade-out-left");
                setTimeout(function(){
                    DataZoomImg.display($next)
                    $transiEls.attr("transi","fade-in-right");
                },500);

            }
        }

        /**
         * Ferme le layer
         */
        function close(){
            $zoomLayer.remove();
            $body.off('keydown',"#data-zoom-layer");
        }

        //affiche ou pas les précédents suivants
        for(let i=0; i< $allZooms.length ;i++){
            let $curr=$($allZooms[i]);
            if($curr.is($btn)){
                $next=$($allZooms[i+1]);
                $prev=$($allZooms[i-1]);
                break
            }
        }
        if($next && $next.length){
            $btnNext.css("display","");
            $btnNext.on("click",function(){
                next();
            });
        }else{
            $btnNext.css("display","none");
        }
        if($prev && $prev.length){
            $btnPrev.css("display","");
            $btnPrev.on("click",function(){
                prev();
            });
        }else{
            $btnPrev.css("display","none");
        }


    }
};


$body.on("mousedown","[data-zoom-img]",function(e){
    e.preventDefault();
    e.stopPropagation();
    DataZoomImg.display($(this));

});