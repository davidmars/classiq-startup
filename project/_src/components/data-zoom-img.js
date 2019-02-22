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
                case 39:
                case 40:
                    next();
                    break;
                case 37:
                case 38:
                    prev();
                    break;
            }
        }


        //charge l'image
        let url=$btn.attr("data-zoom-img");
        let $imgContainer=$zoomLayer.find(".img-container");
        $imgContainer.find("video.zoom-layer-video").remove();

        if($btn.attr("data-zoom-type")==="video"){
            let $vdo=$("<video></video>");
            $vdo.addClass("zoom-layer-video");
            $vdo.attr("src",url);
            $vdo.attr("autoplay","autoplay");
            $vdo.attr("controls","controls");
            $imgContainer.append($vdo);
            $imgContainer.css("background-image","none");
        }else{
            $imgContainer.css("background-image","url('"+url+"')");

        }


        //gère les précédents suivants
        let $btnNext=$zoomLayer.find(".next");
        let $btnPrev=$zoomLayer.find(".prev");
        $btnNext.off("click");
        $btnPrev.off("click");
        let $allZooms=$("[data-zoom-img]");
        let $prev=null;
        let $next=null;

        /**
         * Affiche le slide précédent
         */
        function prev(){
            if($prev && $prev.length){
                $imgContainer.attr("transi","fade-out-right");
                setTimeout(function(){
                    DataZoomImg.display($prev);
                    $imgContainer.attr("transi","fade-in-left");
                },500);
            }
        }
        /**
         * Affiche le slide suivant
         */
        function next(){
            if($next && $next.length){
                $imgContainer.attr("transi","fade-out-left");
                setTimeout(function(){
                    DataZoomImg.display($next)
                    $imgContainer.attr("transi","fade-in-right");
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