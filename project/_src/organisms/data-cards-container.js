function resizeCardsContainer(){
    $("[data-cards-container]").each(function(){
        let $el=$(this);
        let $wrapper=$el.find(">.cards-container-wrapper");
        let w=$el.width();
        $wrapper.attr("size-test",w);
        switch (true) {
            case w<=660:
                $wrapper.attr("size","<660");
                break;
            case w<=990:
                $wrapper.attr("size","<990");
                break;
            default:
                $wrapper.attr("size",">990");
                break;
        }
    });

}
setInterval(
    function(){
        resizeCardsContainer();
    },100
);

resizeCardsContainer();