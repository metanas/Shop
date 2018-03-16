class Carousel{
    constructor(element, options={}){
        this.element = element;
        this.options = Object.assign({},{
            slidesToScroll: 1,
            slidesVisible: 1
        }, options);
    debugger
    }

}
document.addEventListener('DOMContentLoaded',function () {
    new Carousel(document.querySelector(".product-layout"),{
        slidesToScroll:3,
        slidesVisible:3
    })

});

