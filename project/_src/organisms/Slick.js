

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
            //new Slick($(this));
            let $el=$(this);
            $el.addClass("slick-init");
            let obj={
                infinite: true,
                dots:true,
                arrows:true,
                slidesToShow: 3,
                adaptiveHeight: false,
                autoplay:true,
                respondTo:'min',
                // the magic
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                            dots:true,
                            arrows:true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            dots:false,
                            arrows:true
                        }
                    }
                ]


            };
            if($(this).is(".slick-single")){
                obj={
                    infinite: true,
                    dots:true,
                    slidesToShow: 1,
                    adaptiveHeight: false,
                    autoplay:true,
                    arrows:true,
                }
            }
            $(this).slick(obj)
        })
    }
}