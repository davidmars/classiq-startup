import "slick-carousel";
require("slick-carousel/slick/slick.css");

/**
 * @see http://kenwheeler.github.io/slick/
 */
export default class Slick{

    constructor($main){
        this.$main=$main;

        let $wrapper=$main.closest(".js-slick-wrapper");
        let $next=$wrapper.find(".js-slick-next");
        let $prev=$wrapper.find(".js-slick-prev");
        let $current=$wrapper.find(".js-slick-current");

        let slick=$main.slick(
            {
                nextArrow:$next,
                prevArrow:$prev,
                autoplay:true
            }
        );

        slick.on('beforeChange', function(event, slick, currentSlide,nextSlide){
            $current.text(nextSlide+1)
        });


    }

    /**
     * initialise tous les [data-slick]
     */
    static initFromDom(){
        $("[data-slick]").not(".slick-init").each(function(){
            new Slick($(this));
            $(this).addClass("slick-init");
        })
    }
}