!function(t){var e={};function i(r){if(e[r])return e[r].exports;var s=e[r]={i:r,l:!1,exports:{}};return t[r].call(s.exports,s,s.exports,i),s.l=!0,s.exports}i.m=t,i.c=e,i.d=function(t,e,r){i.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:r})},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="/",i(i.s=1)}({1:function(t,e,i){t.exports=i("VVHG")},VVHG:function(t,e){function i(t,e,i){return e in t?Object.defineProperty(t,e,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[e]=i,t}$(function(){var t,e,r="<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='button-left' aria-hidden='true'></span></button>",s="<button type='button' aria-label='Next' class='slick-next pull-right'><span class='button-right' aria-hidden='true'></span></button>";contentfeatureslider=$(".slick-slider.content-feature"),contentfeatureOptions={arrows:!0,infinite:!0,prevArrow:"<button type='button' aria-label='Previous' class='slick-prev pull-left'><span class='fas fa-chevron-left' aria-hidden='true'></span></button>",nextArrow:"<button type='button' aria-label='Next' class='slick-next pull-right'><span class='fas fa-chevron-right' aria-hidden='true'></span></button>"},contentfeatureslider.slick(contentfeatureOptions),carouselslider=$(".slick-slider.carousel-slider"),carouselsliderOptions=(i(e={arrows:!0,dots:!0,customPaging:function(t,e){return $('<button aria-live="polite" type="button" />').text("Slide "+(e+1))},cssEase:"linear",variableWidth:!0,infinite:!0,autoplay:!0},"arrows",!0),i(e,"slick",!0),i(e,"slidesToShow",1),i(e,"speed",500),i(e,"variableWidth",!0),i(e,"autoplaySpeed",8e3),i(e,"prevArrow",r),i(e,"nextArrow",s),i(e,"responsive",[(t={breakpoint:480,settings:{variableWidth:!1,slidesToShow:1}},i(t,"breakpoint",992),i(t,"settings",{variableWidth:!1,slidesToShow:1}),t)]),e),$(carouselslider.each(function(t,e){var i="carousel"+t;if(this.id=i,$(this).slick(carouselsliderOptions),$(this).find(".slick-current .carousel-feature-text")[0]){var r=$(this).find(".slick-current").width()>0?$(this).find(".slick-current").width()+"px":"100%";$('<div class="carousel-feature-caption" style="max-width: '+r+'">'+$(this).find(".slick-current .carousel-feature-text")[0].innerHTML+"</div>").insertAfter($(this)),$(this).on("afterChange",function(t,e,i,r){var s=$(e.$slides.get(i)).attr("id"),n=$("#"+s).find(".carousel-feature-text")[0].innerHTML;$(this).next(".carousel-feature-caption").html(n);var o=$(this).find(".slick-current").width()>0?$(this).find(".slick-current").width()+"px":"100%";$(this).next(".carousel-feature-caption").attr("style","max-width: "+o)})}})),$(".slick-slider.flex-items").slick({infinite:!0,slidesToShow:4,slidesToScroll:4,autoplaySpeed:5e3,autoplay:!1,dots:!0,customPaging:function(t,e){return $('<button aria-live="polite" type="button" />').text(e+1)},arrows:!0,prevArrow:r,nextArrow:s,responsive:[{breakpoint:992,settings:{slidesToShow:3,slidesToScroll:3,infinite:!0,dots:!0}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:2,infinite:!0,dots:!0}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}}]}),$(".slick-slider").each(function(){var t=$(this);(t.hasClass("simple-slickslider")||1===t.attr("class").split(" ").length)&&t.slick({arrows:!0,infinite:!0,dots:!0,prevArrow:r,nextArrow:s})})})}});
//# sourceMappingURL=slick-app.js.map